<?php
declare(strict_types=1);
header("Content-Type: text/plain; charset=UTF-8");
// Teilnehmerfassung: 30 Aufgaben, keine vorweggenommenen Musterlösungen.
// Bearbeite die TODOs nacheinander. Fehlerhafter Beispielcode bleibt bis zur Korrektur kommentiert.
// PHP_EOL wird durch text/plain als Zeilenumbruch sichtbar.
// Start: PHP-START.cmd im Repository-Hauptordner; Datei über den Kurs-Arbeitsbereich öffnen.

// AUFGABE 01 | Eine Variable befüllen
// In der vorbereiteten Variable fehlt der Kursname.
// Speichere den Text "PHP" und gib den Inhalt der Variable aus.
// Zielausgabe: PHP
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 01 ===" . PHP_EOL;
$kurs = "";
// TODO: Den Kursnamen einsetzen und ausgeben.

// AUFGABE 02 | Bezeichner korrigieren
// Die Bezeichner im folgenden Code sind fehlerhaft.
// Korrigiere sie an allen Stellen. Die gespeicherten Werte bleiben gleich.
// Zielausgabe: Mia lernt PHP
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 02 ===" . PHP_EOL;
/* TODO: Korrigiere die Bezeichner und aktiviere danach den Code.
$1name = "Mia";
$kurs name = "PHP";
echo $1name . " lernt " . $kurs name . PHP_EOL;
*/

// AUFGABE 03 | Kommentare ergänzen
// Kommentiere den vorhandenen Code mit allen drei Kommentarformen.
// Setze einen Kommentar vor die Zuweisung, einen Blockkommentar dahinter
// und die dritte Kommentarform hinter die Ausgabe. Der Code bleibt erhalten.
// Zielausgabe: Berlin; die Kommentare werden nicht mit ausgegeben.
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 03 ===" . PHP_EOL;
$stadt = "Berlin";
echo $stadt . PHP_EOL;
// TODO: Die geforderten drei Kommentarformen an den angegebenen Stellen ergänzen.

// AUFGABE 04 | Einen Wert überschreiben
// Die Punktzahl soll nach dem Startwert auf 9 geändert werden.
// Lass die erste Zuweisung unverändert und ergänze die Änderung vor der Ausgabe.
// Zielausgabe: 9
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 04 ===" . PHP_EOL;
$punkte = 5;
// TODO: Wert vor der Ausgabe auf 9 ändern.
echo $punkte . PHP_EOL;

// AUFGABE 05 | Eine Textverknüpfung reparieren
// Die Ausgabe im vorbereiteten Code funktioniert nicht wie vorgesehen.
// Korrigiere die Verknüpfung. Zwischen den Namen soll genau ein Leerzeichen stehen.
// Zielausgabe: Mia Sommer
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 05 ===" . PHP_EOL;
$vorname = "Mia";
$nachname = "Sommer";
/* TODO: Die fehlerhafte Verkettung korrigieren und aktivieren.
echo $vorname + "   " + $nachname . PHP_EOL;
*/

// AUFGABE 06 | Zahlentypen korrigieren
// Die Werte haben noch nicht die vorgesehenen Datentypen.
// Die Anzahl soll eine ganze Zahl, der Preis eine Dezimalzahl sein.
// Korrigiere die Zuweisungen, ohne die Zahlenwerte zu ändern.
// Zielausgabe: int(3) und float(2.5)
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 06 ===" . PHP_EOL;
$anzahl = "3";
$preis = "2.5";
// TODO: Typen gemäß Arbeitsauftrag korrigieren.
var_dump($anzahl, $preis);

// AUFGABE 07 | Text und Wahrheitswert korrigieren
// Die erste Variable soll einen Text enthalten, die zweite einen Wahrheitswert.
// Korrigiere die Datentypen in den beiden Zuweisungen.
// Zielausgabe: string(1) "7" und bool(true)
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 07 ===" . PHP_EOL;
$zahlAlsText = 7;
$aktiv = "true";
// TODO: Textwert und Wahrheitswert korrekt zuweisen.
var_dump($zahlAlsText, $aktiv);

// AUFGABE 08 | null und Arrayzugriff korrigieren
// Der Hinweis soll null enthalten, nicht eine leere Zeichenkette.
// Außerdem soll die erste Farbe ausgegeben werden. Korrigiere beide Stellen;
// die Reihenfolge der Farben im Array bleibt unverändert.
// Zielausgabe: NULL und string(3) "rot"
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 08 ===" . PHP_EOL;
$hinweis = "";
$farben = ["rot", "blau"];
// TODO: null-Zuweisung und Arrayzugriff korrigieren.
var_dump($hinweis, $farben[1]);

// AUFGABE 09 | Eine Berechnung korrigieren
// Die Berechnung des Gesamtpreises ist fachlich falsch.
// Berechne den Preis für die angegebene Anzahl. Die Startwerte bleiben gleich.
// Zielausgabe: 12
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 09 ===" . PHP_EOL;
$preis = 4;
$anzahl = 3;
// TODO: Den falschen Rechenoperator korrigieren.
$gesamt = $preis + $anzahl;
echo $gesamt . PHP_EOL;

// AUFGABE 10 | Einen Zahlenstring umwandeln
// Die Eingabe ist hier ein bereits als gültig bekannter Zahlenstring.
// Die Variable $zahl soll daraus eine ganze Zahl erhalten.
// Korrigiere die zweite Zuweisung. Die Eingabe selbst bleibt ein String.
// Zielausgabe: int(12)
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 10 ===" . PHP_EOL;
$eingabe = "12";
// TODO: Vorgegebenen Zahlenstring in int umwandeln und mit var_dump prüfen.

// AUFGABE 11 | Eine Bedingung korrigieren
// Nur eine negative Zahl soll auf 0 gesetzt werden.
// Der vorbereitete Code prüft den falschen Fall. Korrigiere die Bedingung.
// Zielausgabe: 0
// Zusatztest: Mit den Startwerten 0 und 4 müssen diese Werte unverändert bleiben.
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 11 ===" . PHP_EOL;
$zahl = -4;
// TODO: Die Bedingung so korrigieren, dass nur negative Zahlen auf 0 gesetzt werden.
if ($zahl > 0) {
    $zahl = 0;
}
echo $zahl . PHP_EOL;

// AUFGABE 12 | Zwischen zwei Ausgaben wählen
// Ab fünf Punkten soll "Ziel erreicht" ausgegeben werden,
// bei weniger Punkten "Weiter ueben". Ergänze eine if-else-Verzweigung.
// Zielausgabe: Ziel erreicht
// Zusatztest: Teste auch genau 5 Punkte sowie 4 Punkte.
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 12 ===" . PHP_EOL;
$punkte = 7;
// TODO: if/else gemäß Arbeitsauftrag ergänzen.

// AUFGABE 13 | Drei Fälle unterscheiden
// Gib passend zur Zahl "negativ", "null" oder "positiv" aus.
// Verwende eine Verzweigung mit if, elseif und else.
// Das Wort "null" in der Ausgabe bezeichnet hier die Zahl 0.
// Zielausgabe: null
// Zusatztest: Teste zusätzlich eine negative und eine positive ganze Zahl.
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 13 ===" . PHP_EOL;
$zahl = 0;
// TODO: if/elseif/else für negativ, null und positiv ergänzen.

// AUFGABE 14 | Zwei Voraussetzungen prüfen
// "Bestanden" darf nur erscheinen, wenn mindestens fünf Punkte vorliegen
// und die Aufgabe abgegeben wurde. Sonst soll keine Meldung erscheinen.
// Korrigiere die logische Verknüpfung im vorhandenen Code.
// Zielausgabe: Bestanden
// Zusatztest: Bei 4 Punkten und true sowie bei 8 Punkten und false darf nichts erscheinen.
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 14 ===" . PHP_EOL;
$punkte = 8;
$abgegeben = true;
// TODO: Beide Voraussetzungen müssen erfüllt sein. Logischen Operator korrigieren.
if ($punkte >= 5 || $abgegeben === true) {
    echo "Bestanden" . PHP_EOL;
}

// AUFGABE 15 | Den Ablauf eines switch korrigieren
// Bei der Aktion "start" soll ausschließlich "Los" erscheinen.
// Bei allen anderen Aktionen soll ausschließlich "Unbekannt" erscheinen.
// Im vorbereiteten Code läuft nach dem passenden Fall noch weiterer Code.
// Zielausgabe: Los
// Zusatztest: Mit der Aktion "pause" soll nur "Unbekannt" erscheinen.
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 15 ===" . PHP_EOL;
$aktion = "start";
// TODO: Den unbeabsichtigten zweiten Zweig verhindern.
switch ($aktion) {
    case "start":
        echo "Los" . PHP_EOL;
    default:
        echo "Unbekannt" . PHP_EOL;
}

// AUFGABE 16 | Eine Zählschleife korrigieren
// Die Schleife soll alle ganzen Zahlen von 1 bis einschließlich 3 ausgeben.
// Der vorbereitete Code endet zu früh. Korrigiere die Schleife.
// Zielausgabe: 1, 2, 3 - jeweils in einer eigenen Zeile
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 16 ===" . PHP_EOL;
// TODO: Die Schleifengrenze korrigieren; erwartet sind 1, 2 und 3.
for ($i = 1; $i <= 4; $i++) {
    echo $i . PHP_EOL;
}

// AUFGABE 17 | Mit while herunterzählen
// Ergänze eine while-Schleife, die von $rest bis einschließlich 1 herunterzählt.
// Gib jede Zahl in einer eigenen Zeile aus. Die 0 wird nicht mehr ausgegeben.
// Zielausgabe: 3, 2, 1 - jeweils in einer eigenen Zeile
// Zusatztest: Mit dem Startwert 0 soll keine Zahl ausgegeben werden.
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 17 ===" . PHP_EOL;
$rest = 3;
// TODO: while-Schleife ergänzen. Der Zähler muss sich verändern.

// AUFGABE 18 | Eine do-while-Schleife bauen
// Gib in jedem Durchlauf zuerst $zahl aus und erhöhe sie anschließend um eins.
// Wiederhole den Durchlauf, solange die Zahl noch kleiner als 3 ist.
// Verwende do-while und erkläre, warum beim Startwert 5 eine Ausgabe entsteht.
// Zielausgabe: 5 - genau einmal; nach der Schleife hat $zahl den Wert 6.
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 18 ===" . PHP_EOL;
$zahl = 5;
// TODO: do-while-Schleife gemäß Arbeitsauftrag ergänzen.

// AUFGABE 19 | Arraywerte ausgeben
// Gib alle Farben in ihrer vorhandenen Reihenfolge aus, jede in einer eigenen Zeile.
// Verwende eine foreach-Schleife statt einzelner Ausgaben pro Arrayposition.
// Zielausgabe: rot, gruen, blau - jeweils in einer eigenen Zeile
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 19 ===" . PHP_EOL;
$farben = ["rot", "gruen", "blau"];
// TODO: Alle Werte mit foreach ausgeben.

// AUFGABE 20 | Eine Arrayänderung reparieren
// Erhöhe den gespeicherten Bestand jedes Artikels um eins. => Inkrement
// Der aktuelle Code verändert das ursprüngliche Lager nicht.
// Korrigiere die Änderung innerhalb der Schleife.
// Zielausgabe: 3 / 1
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 20 ===" . PHP_EOL;
$lager = ["Stift" => 2, "Heft" => 0];
// TODO: Jeden Bestand im Array um 1 erhöhen und beide Bestände ausgeben.

// AUFGABE 21 | Eine Textbereinigung reparieren
// Vor und nach dem ausgegebenen Namen sollen keine Leerzeichen stehen.
// Die vorbereitete Bereinigung hat bei der Ausgabe noch keine Wirkung.
// Korrigiere den Code. Leerzeichen innerhalb eines Namens sollen erhalten bleiben.
// Zielausgabe: Mia - ohne äußere Leerzeichen
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 21 ===" . PHP_EOL;
$name = "  Mia  ";
// TODO: Äußere Leerzeichen entfernen; Rückgabewert verwenden.

// AUFGABE 22 | Kleinbuchstaben erzeugen
// Wandle den gespeicherten Text mit einer String-Funktion vollständig
// in Kleinbuchstaben um. Schreibe den Satz nicht als neuen festen Text.
// Zielausgabe: php macht spass
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 22 ===" . PHP_EOL;
$text = "PHP MACHT SPASS";
// TODO: In Kleinbuchstaben umwandeln und ausgeben.

// AUFGABE 23 | Eine Textumwandlung korrigieren
// Die Ausgabe soll vollständig in Großbuchstaben erscheinen.
// Im vorbereiteten Code wird die falsche String-Operation verwendet.
// Korrigiere den Funktionsaufruf. Der Starttext bleibt unverändert.
// Zielausgabe: HALLO PHP
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 23 ===" . PHP_EOL;
$text = "hallo php";
// TODO: Die passende Umwandlungsfunktion verwenden.
$text = strtolower($text);
echo $text . PHP_EOL;

// AUFGABE 24 | Die Textlänge bestimmen
// Die Variable $laenge enthält bisher nur einen vorläufigen Wert.
// Ersetze ihn durch eine Berechnung der Textlänge. Der Text selbst bleibt erhalten.
// Zielausgabe: 5
// Zusatztest: Mit dem Text "PHP" soll sich die Ausgabe automatisch auf 3 ändern.
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 24 ===" . PHP_EOL;
$text = "Hallo";
// TODO: Länge mit strlen bestimmen und ausgeben.

// AUFGABE 25 | Einen Textteil ersetzen
// Ersetze im gespeicherten Text "rot" durch "blau".
// Nutze eine String-Funktion. Schreibe nicht den gesamten Satz neu.
// Zielausgabe: Das Auto ist blau.
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 25 ===" . PHP_EOL;
$text = "Das Auto ist rot.";
// TODO: rot durch blau ersetzen und das Ergebnis ausgeben.

// AUFGABE 26 | Die erste Funktion ergänzen
// Die vorbereitete Funktion soll den Text "Hallo PHP" zurückliefern.
// Ergänze den Funktionsinhalt. Rufe die Funktion anschließend außerhalb auf
// und gib dort ihren Rückgabewert aus.
// Zielausgabe: Hallo PHP
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 26 ===" . PHP_EOL;
// TODO: begruessung(): string definieren, aufrufen und den Rückgabewert ausgeben.

// AUFGABE 27 | Eine Funktionsberechnung korrigieren
// Die Funktion soll das Doppelte der übergebenen ganzen Zahl zurückliefern.
// Der Rückgabewert ist fachlich falsch. Korrigiere den Funktionsinhalt;
// Parameter und Typdeklarationen bleiben unverändert.
// Zielausgabe: 8
// Zusatztest: Die Aufrufe mit 0 und -3 müssen 0 beziehungsweise -6 liefern.
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 27 ===" . PHP_EOL;
// TODO: Die falsche Berechnung korrigieren.
function verdoppeln(int $zahl): int {
    return $zahl + 2;
}
echo verdoppeln(4) . PHP_EOL;

// AUFGABE 28 | Eine Funktion mit zwei Parametern bauen
// Erstelle eine Funktion namens addiere mit zwei ganzzahligen Parametern.
// Sie soll deren Summe als ganze Zahl zurückliefern. Verwende Typdeklarationen.
// Rufe sie mit den vorbereiteten Werten auf und gib das Ergebnis aus.
// Zielausgabe: 7
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 28 ===" . PHP_EOL;
// TODO: addiere(int $a, int $b): int definieren; mit 3 und 4 aufrufen und Ergebnis ausgeben.

// AUFGABE 29 | Eine Bereinigungsfunktion vervollständigen
// Die Funktion soll den übergebenen Namen ohne äußere Leerzeichen zurückliefern.
// Bisher liefert sie den Namen unverändert. Ergänze die Verarbeitung;
// Leerzeichen innerhalb des Namens sollen erhalten bleiben.
// Zielausgabe: Mia - ohne äußere Leerzeichen
// Zusatztest: Aus "  Mia Sommer  " soll "Mia Sommer" werden.
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 29 ===" . PHP_EOL;
// TODO: bereinigeName(string $name): string definieren; mit "  Mia  " prüfen.

// AUFGABE 30 | Eine Leerprüfung korrigieren
// Die Funktion soll true liefern, wenn der Text nach dem Entfernen äußerer
// Leerzeichen leer ist. Andernfalls soll sie false liefern.
// Auch "0" ist Inhalt. Die aktuelle Prüfung behandelt die Beispiele falsch.
// Zielausgabe: bool(true), danach bool(false)
// Zusatztest: Teste außerdem eine leere Zeichenkette und den Text "Mia".
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 30 ===" . PHP_EOL;
// TODO: Nur nach trim() leeren Text erkennen. Der Text "0" ist nicht leer.
function istLeer(string $text): bool {
    return empty(trim($text));
}
var_dump(istLeer("   "));
var_dump(istLeer("0"));
