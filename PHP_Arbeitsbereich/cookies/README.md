# PHP – Einstieg in Cookies

## Start

Entpacke den enthaltenen Ordner **PHP_Cookies** direkt nach **C:\xampp\htdocs**.
Starte Apache im XAMPP Control Panel und öffne:

    http://localhost/PHP_Cookies/index.html

Die Einstiegseite verlinkt die Demos, das Aufgabenblatt und alle Startformulare.
Es wird keine Datenbank benötigt. PHP-Dateien nicht per Doppelklick öffnen.
Zielumgebung: PHP 8.x. Die Codebeispiele benötigen keine zusätzlichen Bibliotheken.

## Inhalt

- **index.html**: Webeinführung mit Architektur, Schrittsimulation, Syntax, Regeln und Aufgabenübersicht.
- **demo_kurz.php**: eigenständige Cookie-Lupe ohne Redirect. Sie zeigt den Eingang des aktuellen Requests
  getrennt von der Cookie-Aktion für die Antwort. Danach den GET-Link verwenden.
- **demo/**: vollständig kommentiertes Beispiel mit index.php, auswertung.php und function.php.
  Ein Sprachfeld, POST-Validierung, Setzen/Ändern/Löschen und HTTP-303-Rückleitung.
- **aufgaben/**: zehn unabhängige Aufgabenordner mit vorbereiteten Formularen und TODOs.
- **PHP_Cookies_Aufgaben.pdf**: sieben Seiten, ohne Aufgabenlösungen.
- **QUELLEN.md**: technische Referenzen und Abgrenzung.

Die vollständigen Aufgabenlösungen liegen ausschließlich im getrennten ZIP **PHP_Cookies_Loesungen.zip**.
Die beiden Demos sind natürlich bereits fertig ausführbar.

## Unterrichtsablauf

Zuerst in der Einführung den Weg Browser → Server → Browser und den Folge-Request besprechen.
Dann mit der Cookie-Lupe das Setzen, Ändern und Löschen beobachten. Anschließend zeigt die
Drei-Dateien-Demo denselben Ablauf mit der bereits bekannten Redirect-Technik.
Danach die Aufgaben 1 bis 10 in der angegebenen Reihenfolge bearbeiten.

Die Validierungen bleiben sichtbar im Quellcode: keine Cookie-Frameworks, keine Klassen,
keine Sessions und keine Datenbank. Die Schrittsimulation verwendet etwas JavaScript nur
für die Lehrdarstellung; die PHP-Anwendungen kommen ohne JavaScript aus.

## Arbeitsregeln

Jeden POST- und Cookie-Eintrag einzeln mit isset() und Texttyp prüfen; erst dann seinen Inhalt
übernehmen. Fehlende Cookies sind normal: Die Seite verwendet einen Standardwert.

Cookie-Aktionen und Redirects stehen vor der HTML-Ausgabe. Nach header("Location: ...") folgt exit.
Bei Formfehlern bleibt ein älteres Cookie unverändert. Gültige neue Eingaben werden für das
Fehlerformular zurückgegeben; ungültige Felder bleiben leer.

Alle Übungen senden Änderungen mit POST; normale GET-Aufrufe verlängern die Lebensdauer nicht.
Die Formulare tragen novalidate, damit die Serverprüfung sichtbar ist. Erhaltene Werte stammen
hier nicht aus Browser-Autofill, sondern aus dem PHP-Code.

## Cookie-Pfade und Ordnernamen

function.php berechnet $cookiePfad aus dem URL-Ordner der aufgerufenen PHP-Datei.
Das ist kein Pfad im Windows-Dateisystem. Die Aufgaben funktionieren auch in einem anderen
URL-Unterordner, wenn die zugehörigen Dateien zusammenbleiben.

Die statische Übersicht verlinkt die ursprüngliche Ordnerstruktur. Beim Umbenennen einzelner
Aufgabenordner müssten diese Links angepasst werden.

Die Cookie-Lupe, Drei-Dateien-Demo und einzelnen Aufgaben haben unterschiedliche Cookie-Namen.
Startcode und Musterlösungen verwenden unterschiedliche Ordnerpfade. Deshalb beeinflussen
sie einander beim Testen nicht. Nach Abschluss lassen sich die Übungscookies in F12 löschen.

Aufgabe 8 setzt bewusst ein Cookie nur für bereich/. Die Anzeigeseite in diesem Unterordner
bekommt das Cookie, das Formular im übergeordneten Ordner nicht.

## Lokale Übung, keine Produktivanwendung

Die Beispiele sind für lokale HTTP-Aufrufe unter localhost gedacht. Deshalb ist secure hier false.
Bei einer Bereitstellung über HTTPS secure auf true setzen. HttpOnly und SameSite=Lax werden
explizit verwendet. Schutzattribute ersetzen weder Inhaltsprüfung noch eine vollständige
Absicherung einer produktiven Anwendung. Es gibt hier keine Anmeldung oder Berechtigungsprüfung.

Nur harmlose, kurze Einstellungen verwenden. Keine Passwörter, persönlichen Datensätze oder
vertraulichen Angaben speichern. Die Beispiele sind kein Einwilligungs- oder Tracking-System.
Die Option „merken“ ist eine didaktische Speicherentscheidung, keine rechtliche Bewertung.

## Fehlersuche

Bei unerwartetem Verhalten in F12 den Cookie-Wert, Pfad und Ablaufzeitpunkt prüfen.
Im Netzwerk „Protokoll beibehalten“ aktivieren: Der Set-Cookie-Header gehört zur Antwort
von auswertung.php; Cookie gehört zum folgenden Request an index.php.

Ein empfangener Set-Cookie-Header garantiert nicht, dass der Browser tatsächlich speichert.
Bei blockierten Cookies müssen Standards weiter funktionieren. Eine bereits sichtbare Seite
ändert sich beim Ablauf eines Cookies nicht von selbst; für die neue Anzeige neu laden.

Bei „headers already sent“ zuerst nach einer Ausgabe vor dem PHP-Verarbeitungsblock suchen.
Dateien als UTF-8 ohne BOM speichern. In reinen PHP-Hilfsdateien das abschließende ?> weglassen.
