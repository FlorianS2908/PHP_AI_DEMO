PHP – PHP in kleinen Schritten
TEILNEHMER-STARTER – ohne Lösungen

1. ZIP vollständig entpacken.
2. PHP-START.cmd starten; XAMPP-PHP oder PHP im PATH wird verwendet.
3. http://127.0.0.1:8085/ im Browser öffnen.
   Alternative: Ordner nach C:\xampp\htdocs kopieren, Apache starten
   und den passenden localhost-Pfad verwenden.
4. Pro Aufgabe gibt es formular.html, style.css und auswertung.php.
5. Nur den markierten PHP-Block bearbeiten. Das Formular bleibt gleich.
   Aufgabe 16: zusätzlich method von post auf get ändern und vergleichen.
6. Immer über HTTP arbeiten; PHP wird nicht per Doppelklick ausgeführt.

Die Übungen sind unabhängig. Vorbereitete Variablen stehen in der Datei.
Es muss keine gelöste Voraufgabe kopiert werden. Keine Datenbank nötig.
Die ersten Leer-Ausgaben sind Absicht: Der PHP-Aufgabencode fehlt noch.

Beispieldaten: vorname=Mia, ziel=paris, personen=2; newsletter optional ja.
Kein required-Attribut, damit leere Angaben serverseitig geübt werden können.
Leere Felder und fehlende Schlüssel sind verschiedene Testfälle.
$_GET enthält die Query-Parameter; $_POST die form-codierten POST-Daten.
POST verschlüsselt nichts. Nur fiktive Daten verwenden.
$ausgabe ist Text. Das Ausgabe-Gerüst maskiert HTML-Sonderzeichen.
Die Kopie des Formulars ist überall identisch bis auf Nummer und method.

Quellenbasis: PHP Kapitel 6 PHP DB, S. 17–21;
Kapitel 4 HTML Teil 2, S. 23–30; bestehende PHP-Vertiefungs-Webvariante.
Die konkreten Aufgaben, Eingabewerte und Lösungen sind neu vereinfacht.
Fachprüfung: offizielles PHP-Handbuch, siehe Quellen.txt.
