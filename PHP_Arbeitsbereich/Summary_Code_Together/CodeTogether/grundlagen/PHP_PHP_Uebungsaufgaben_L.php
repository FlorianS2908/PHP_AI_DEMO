<?php
declare(strict_types=1);
header("Content-Type: text/plain; charset=UTF-8");
/**
 * Ausgearbeitete Beispiele zu den Vertiefungsaufgaben 01 und 02.
 * Dies ist kein vollständiges Lösungspaket zu den zehn Zusatzaufgaben.
 * Preisimport: nur Strings; Arrays werden als Fehler protokolliert, nicht entpackt.
 * Zahlenform zuerst prüfen, danach umwandeln; "0" ist ausdrücklich gültig.
 */
echo "Vertiefung 01: Preisimport" . PHP_EOL;
const MAX_PREIS = 500.0;

/**
 * Bereinigt und prüft die Importdaten.
 *
 * @param array $rohpreise Ungeprüfte Eingaben mit ihren Ursprungsindizes.
 * @return array Gültige Datensätze, Fehlerprotokoll und Zusammenfassung.
 */
function importierePreise(array $rohpreise): array
{
    $gueltig = [];
    $fehler = [];
    $summeCent = 0;

    foreach ($rohpreise as $index => $rohpreis) {
        // 1. Nur Strings akzeptieren, keine Zahlen, Arrays oder null.
        if (!is_string($rohpreis)) {
            $fehler[] = ["index" => $index, "grund" => "Kein String"];
            continue;
        }

        // 2. Äußere Leerzeichen entfernen und Dezimalkomma ersetzen.
        $text = trim($rohpreis);
        $text = str_replace(",", ".", $text);

        // "0" bleibt erlaubt: nur den wirklich leeren String ablehnen.
        if ($text === "") {
            $fehler[] = ["index" => $index, "grund" => "Leere Eingabe"];
            continue;
        }

        // 3. Den vollständigen Text VOR der Umwandlung prüfen.
        if (!is_numeric($text)) {
            $fehler[] = [
                "index" => $index,
                "grund" => "Keine vollständige Zahl"
            ];
            continue;
        }

        // 4. Umwandeln und anschließend den Zahlenbereich prüfen.
        $preis = floatval($text);

        if ($preis < 0 || $preis > MAX_PREIS) {
            $fehler[] = [
                "index" => $index,
                "grund" => "Preis außerhalb von 0 bis " . MAX_PREIS . " Euro"
            ];
            continue;
        }

        // 5. Volle Euro abschneiden; den Centbetrag dagegen zuerst runden.
        $volleEuro = intval($preis);
        $cent = intval(round($preis * 100));

        $gueltig[] = [
            "index" => $index,
            "preis" => $preis,
            "volleEuro" => $volleEuro,
            "cent" => $cent
        ];

        $summeCent += $cent;
    }

    return [
        "gueltig" => $gueltig,
        "fehler" => $fehler,
        "anzahlGueltig" => count($gueltig),
        "anzahlFehler" => count($fehler),
        "summeCent" => $summeCent
    ];
}

$rohpreise = [
    " 12,50 ", "8.90", "0", "1e2", "-2,50",
    "12abc", "", "  ", "1.234,56", null, ["9,90"]
];

// Zum Testen die Startdaten durch eine dieser Listen ersetzen:
// $rohpreise = ["500", "500,01", "12,345", "0,10", 12];
// $rohpreise = [];

$ergebnis = importierePreise($rohpreise);
var_dump($ergebnis);
echo PHP_EOL . "Vertiefung 02: Anmeldeliste" . PHP_EOL;
function bereinigeKuerzel(string $text): string
{
    return strtolower(trim($text));
}

/** Nur der Leerstring wird abgelehnt – nicht das gültige Kürzel "0". */
function kuerzelIstBelegt(string $text): bool
{
    return $text !== "";
}

function importiereAnmeldungen(string $rohtext): array
{
    $felder = explode(";", $rohtext);
    $normalisiert = array_map("bereinigeKuerzel", $felder);

    // Nicht einfach array_filter($normalisiert): Dann würde auch "0" fehlen.
    $nichtLeer = array_filter($normalisiert, "kuerzelIstBelegt");
    $eindeutig = array_unique($nichtLeer); // Der erste gleiche Wert bleibt.

    $liste = array_values($eindeutig);
    sort($liste, SORT_STRING); // Alphabetisch; numerische Keys ab 0.

    $anzahlFelder = count($felder);
    $anzahlLeer = $anzahlFelder - count($nichtLeer);
    $anzahlDoppelt = count($nichtLeer) - count($eindeutig);
    $anzahlVerbleibend = count($liste);

    return [
        "liste" => $liste,
        "text" => implode(" | ", $liste),
        "urspruenglicheFelder" => $anzahlFelder,
        "entfernteLeerfelder" => $anzahlLeer,
        "entfernteDubletten" => $anzahlDoppelt,
        "verbleibend" => $anzahlVerbleibend,
        "zaehlerPassen" => $anzahlFelder ===
            $anzahlLeer + $anzahlDoppelt + $anzahlVerbleibend
    ];
}
$rohtext = " Mia ; TOM; ; mia; 0; Lena ; tom; ";
var_dump(importiereAnmeldungen($rohtext));
