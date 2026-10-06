# PHP – Personen speichern und lesen

## Schnellstart in XAMPP
1. Den vollständigen Ordner **PHP_Datenbank** nach `C:\xampp\htdocs` entpacken.
2. In XAMPP **Apache** und den als **MySQL** bezeichneten Datenbankdienst starten.
3. `http://localhost/phpmyadmin` öffnen. Die Datei `datenbank.sql` einmal importieren.
4. `config.php` prüfen: vorbereitet sind `127.0.0.1`, Port `3306`, Datenbank
   `PHP_personen`, Benutzer `root`, leeres Passwort. Bei dir abweichende Werte ändern.
5. `http://localhost/PHP_Datenbank/index.html` öffnen.

Voraussetzungen: PHP 8 mit `pdo_mysql`, `mbstring` und aktivierter Session-Unterstützung;
MySQL oder MariaDB. Der Code benötigt keine Fremdbibliothek und kein Composer.
XAMPP verwendet je nach Distribution MariaDB; der PDO-Treiber heißt trotzdem `mysql`.
Alle PHP-Dateien über den Webserver aufrufen, nicht per Doppelklick.

## Die drei Einstiege
- `demo/lesen.php`: nur lesen, Zeilen sichtbar in Person-Objekte umwandeln, HTML-Tabelle.
- `demo/index.php`: vollständige Demo mit zwei Eingabefeldern und Speichern.
- `aufgaben/index.php`: Starter mit nummerierten TODOs. Alle zehn Aufgaben bauen
  im selben Ordner aufeinander auf. `aufgaben/AUFGABEN.md` und PDF beschreiben sie.

Die Demos sind vollständig. Das Aufgabenprojekt ist absichtlich noch nicht fertig.
Die nummerierten Lösungen und eine fertige Aufgabenfassung liegen getrennt im Lösungs-ZIP.

## Die kleine Datenbank
`personen(id, vorname, nachname)`. Die Datenbank vergibt die ID selbst.
Es gibt keine weiteren Tabellen, Fremdschlüssel oder Benutzerkonten.
Beim ersten Import in eine neue Datenbank entstehen drei Beispielpersonen.
Das SQL löscht keine Daten. Ein erneuter Import fügt die Beispiele erneut hinzu.
Demo, Aufgaben und Lösungen verwenden absichtlich dieselbe lokale Datenbank.
Neue Einträge sind deshalb in allen Varianten sichtbar. SQL nicht für jede Variante neu importieren.

## Die PHP-Dateien
- `config.php` im Hauptordner: Zugangsdaten.
- `db.php`: eine Funktion zum Erzeugen der PDO-Verbindung.
- `Person.php`: nur die drei Attribute, Konstruktor und Getter.
- `index.php`: SELECT, Umwandlung in Person-Objekte, Formular und HTML-Tabelle.
- `speichern.php`: POST entgegennehmen, beide Namen prüfen, INSERT, 303-Rückleitung.
- `function.php`: vorgegebene HTML-Ausgabe, Session-Konfiguration und Formulartoken.
- `style.css`: wenige Regeln, keine Bibliothek.

## Regeln der Übung
Namen: Textwerte; nach trim() nicht leer und höchstens 50 UTF-8-Zeichen.
Umlaute, Bindestriche und Apostrophe sind möglich; es gibt keine reine A–Z-Prüfung.
Beide Felder werden geprüft, bevor ein INSERT ausgeführt wird. Bei Fehlern bleiben
nur die gültigen neuen Formwerte erhalten; ungültige Felder werden geleert.
Fehler und vorübergehende Eingaben werden einmalig in der Session transportiert.
Die dauerhaften Personendaten kommen bei jedem Aufruf aus der Datenbank.
Vor dem INSERT steht ein vorgegebener Formulartoken-Test; er ist kein neues Lernziel.

`new Person(...)` allein schreibt NICHT in die Datenbank. Beim Lesen erzeugt PHP aus
jeder Zeile ein neues Objekt. Für neue Daten muss das INSERT explizit ausgeführt werden.
Die Ausgabe wird mit htmlspecialchars() maskiert, nicht bereits vor dem INSERT.
Nach Erfolg lädt 303 die Seite per GET neu. F5 auf dieser GET-Seite schreibt nichts.
Erneutes bewusstes Absenden / Doppelklick ist damit nicht grundsätzlich ausgeschlossen.
Gleiche Namen dürfen mehrfach vorkommen; die ID unterscheidet die Datensätze.

## Probleme finden
- Verbindung abgelehnt: Datenbankdienst und Port prüfen.
- Unknown database / Tabelle fehlt: SQL-Import und Datenbankname prüfen.
- Access denied: Benutzer und Passwort in config.php prüfen.
- Could not find driver: `pdo_mysql` in PHP aktivieren, Apache neu starten.
- Undefined function mb_strlen/mb_check_encoding: `mbstring` aktivieren, Apache neu starten.
- Headers already sent: keine Leerzeichen/HTML/echo vor PHP-Session und header(); ohne BOM speichern.
- Tokenfehler: Browser-Cookies erlauben, Formular neu laden und erneut senden.
- Starter zeigt TODO-Meldung: das ist Absicht, passende Aufgabe noch nicht gelöst.

Technische Datenbankfehler werden ins PHP-/Apache-Fehlerprotokoll geschrieben und nicht
als rohe SQL-Fehlermeldung im Browser angezeigt.

## Einsatzgrenze
Nur lokal im Unterricht und mit erfundenen Personen nutzen. Kein Login, keine Rechteprüfung,
keine öffentliche Bereitstellung. Die Root-Konfiguration ist lediglich eine lokale Vorlage.
Für einen echten Betrieb wären u. a. eigene beschränkte DB-Zugangsdaten, Zugriffsschutz,
HTTPS, Betriebskonfiguration und weitere Datenschutz-/Sicherheitsmaßnahmen erforderlich.

Für den 51-Zeichen-Test im Browser-Inspector testweise maxlength entfernen.
novalidate deaktiviert die automatische Formularvalidierung, hebt aber die Eingabelängenbegrenzung nicht auf.
