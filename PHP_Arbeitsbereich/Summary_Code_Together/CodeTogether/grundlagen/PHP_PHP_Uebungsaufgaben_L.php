<?php
/**Arbeitsauftrag
1. Akzeptieren Sie nur Strings. Entfernen Sie äußere Leerzeichen und ersetzen Sie das Dezimalkomma
durch einen Punkt. Tausendertrennzeichen werden nicht unterstützt.
2. Prüfen Sie den vollständigen bereinigten Text mit is_numeric. Gültig sind Preise von 0 bis 500 Euro
einschließlich; der Nullpreis ist erlaubt. Die Obergrenze soll eine Konstante sein.
3. Wandeln Sie gültige Preise mit floatval um. Speichern Sie je Eintrag den Preis als float, den vollen
Euro-Anteil als int und den auf ganze Cent gerundeten Betrag als int. Verwenden Sie dafür auch
intval.
4. Sammeln Sie ungültige Eingaben mit Ursprungsindex und Fehlergrund. Geben Sie die gültigen
Datensätze, beide Anzahlen und die Summe in Cent aus. 

- rohpreise durchlaufen und prüfen ob da nur Strings drin sind
    => null | ["9,90"] => Wenn unklar => Rücksprache => ["9,90"] extrahieren
- leerzeichen => trim
- tausendertrennzeichen muss entfernt werden => 
- is_numeric => 
- preisrange >= 0 && <= 500 => 500 als Konstante
- umwandlung der Preise in float + speichern => trennen von € und Cent => runden => intval
- speicherung von ungültigen Werten => Mengenspeicher Wert, Index von dem ungültigen
- gültigen Summe in Cent und gültig
*/
const MAX_PREIS = 500.0;
function importierenPreis(array $rohdaten): array{

    $fehler = [];
    $gueltig = [];
    $summeCent = 0;
#- rohpreise durchlaufen und prüfen ob da nur Strings drin sind
# => null | ["9,90"] => Wenn unklar => Rücksprache => ["9,90"] extrahieren

    foreach($rohdaten as $index => $value){
        if(!is_string($value) && !is_array($value)){
#ungültige Werte
# ohne index als referenz zur stelle im Array => wird nie überschrieben
            array_push($fehler,["index" => $index, "grund" => "kein String"] );
             # $fehler[] = ["index" => $index, "grund" => "kein String"];
             # kann ich jetzt das Element welches ein Fehler aus den Rohdaten entfernen
             unset($rohdaten[$index]);
             continue;
        }
        if(is_array($value)){
            # hole den String aus dem Array und packe in als String mit dem gleichen Index wieder ins array
            $rohdaten[$index] = $value[0];
            continue;
        }
        $rohpreiseAsStringTrim = trim($value);
        $rohpreisAsStringReplaceTausendertrennzeichen = str_replace(",", ".", $rohpreiseAsStringTrim);

        if($rohpreisAsStringReplaceTausendertrennzeichen === ""){
            array_push($fehler,["index" => $index, "grund" => "leere Eingabe"] );
            continue;
        }
        // 3. Den vollständigen rohpreisAsStringReplaceTausendertrennzeichen VOR der Umwandlung prüfen.
        if (!is_numeric($rohpreisAsStringReplaceTausendertrennzeichen)) {
            array_push($fehler,["index" => $index, "grund" => "Keine vollständige Zahl"] );
            continue;
        }
 // 4. Umwandeln und anschließend den Zahlenbereich prüfen.
        $preis = floatval($rohpreisAsStringReplaceTausendertrennzeichen);

        if ($preis < 0 || $preis > MAX_PREIS) {
            array_push($fehler,["index" => $index, "grund" => "Preis außerhalb von 0 bis " . MAX_PREIS . " Euro"] );
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
    "12abc", "", "  ", "1.234,56", null, ["9,90"],123
];
var_dump($rohpreise);
var_dump(importierenPreis($rohpreise));


/**explode / implode · eigene Funktionen · Arrays · Dubletten
Die Teilnehmer-Kürzel stammen aus einer durch Semikolon getrennten Textzeile. Das Kürzel "0" ist
ausdrücklich gültig.
Startdaten / TODO

$rohtext = " Mia ; TOM; ; mia; 0; Lena ; tom; ";

// TODO: Bereinigungsfunktion(en) selbst schreiben.
// TODO: Importieren, zaehlen und sortiert ausgeben.

Arbeitsauftrag
1. Zerlegen Sie den Text am Semikolon. Normalisieren Sie jedes Kürzel: äußere Leerzeichen entfernen
und ASCII-Buchstaben kleinschreiben. Verwenden Sie dafür eine eigene Funktion mit
Parametertyp und Rückgabetyp.
2. Entfernen Sie nur Kürzel, die nach der Bereinigung aus keinem Zeichen mehr bestehen. Entfernen
Sie anschließend doppelte Werte; der erste Eintrag soll erhalten bleiben.
3. Erzeugen Sie eine aufsteigend sortierte Liste mit lückenlosen numerischen Keys. Geben Sie die
Kürzel zusätzlich als einen Text mit dem Trenner " | " aus.
4. Zählen Sie getrennt: ursprüngliche Felder, entfernte Leerfelder, entfernte Dubletten und
verbleibende Kürzel. Kontrollieren Sie, dass die Zahlen zusammenpassen. */
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
?>