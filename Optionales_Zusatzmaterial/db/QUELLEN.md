# Herkunft und technische Referenzen

## Unterrichtlicher Anschluss
Die bereitgestellte BigPicture_PHP.pdf nennt auf Seite 3 XAMPP, MariaDB/phpMyAdmin,
PDO, serverseitige Validierung und Prepared Statements. Seite 4 nennt das Laden von
Datensätzen, die Ausgabe in HTML und OOP als Vorbereitung auf MVC.
Die vorhandenen HTML-Folien behandeln Tabellen (Kapitel 4, Teil 1, PDF-Seiten 44–45)
und Formulare (Kapitel 4, Teil 2, PDF-Seite 23).
Das vorherige OOP-Paket führt Klassen, Konstruktoren, private Attribute und Getter ein.

## Neue didaktische Übertragung
Die konkrete Personen-Datenbank, PHP-Dateien und zehn Arbeitsschritte wurden neu
für diesen Auftrag erstellt. Sie sind keine wörtliche Übernahme aus PHP-Folien.
Die hochgeladenen Kapitel 1–5 liefern keine fertige PDO-Personenverwaltung.
Wir verwenden eine Tabelle mit ID, Vorname und Nachname; keine Registrierung,
Passwörter, Beziehungen, Vererbung, MVC-Klassenstruktur, UPDATE oder DELETE.

## Technische Referenzen, geprüft am 01.10.2026
1. PDO-Verbindung und DSN: https://www.php.net/manual/de/ref.pdo-mysql.connection.php
2. query und fetch: https://www.php.net/manual/de/pdostatement.fetch.php
3. prepare und Platzhalter: https://www.php.net/manual/de/pdo.prepare.php
4. execute mit Parameter-Array: https://www.php.net/manual/de/pdostatement.execute.php
5. PDO-Fehlerbehandlung: https://www.php.net/manual/de/pdo.error-handling.php
6. Sichere HTML-Textausgabe: https://www.php.net/manual/de/function.htmlspecialchars.php
7. Weiterleitung mit HTTP 303: https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/303
8. AUTO_INCREMENT: https://dev.mysql.com/doc/refman/8.4/en/example-auto-increment.html
9. UTF-8-Zeichen zählen: https://www.php.net/manual/de/function.mb-strlen.php
10. XAMPP unter Windows: https://www.apachefriends.org/faq_windows.html
11. Vorgegebener Formularschutz (CSRF): https://cheatsheetseries.owasp.org/cheatsheets/Cross-Site_Request_Forgery_Prevention_Cheat_Sheet.html
