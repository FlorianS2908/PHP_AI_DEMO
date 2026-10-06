# PHP · PHP-Sessions

## Start
vollständigen Ordner `PHP_AI_DEMO` nach `C:\xampp\htdocs` entpacken. Apache starten.
Im Browser: `http://localhost/PHP_AI_DEMO/PHP_Arbeitsbereich/session/index.html`.
Demos und Übungen benötigen PHP mit aktivierter Session-Unterstützung und einen beschreibbaren serverseitigen Session-Speicher. Das Paket benötigt keine Datenbank, kein Composer und kein JavaScript für die PHP-Formulare. Die HTML-Einführung verwendet JavaScript nur für ihre Simulation.

## Inhalt
- `index.html`: Webeinführung, Syntax, Regeln, Simulation und Links.
- `demo_kurz.php`: kommentierte Session-Lupe ohne Redirect.
- `demo/`: vollständige Formular-Demo mit 303 und zweiter Seite.
- `PHP_Sessions_Aufgaben.pdf`: Aufgaben ohne Lösungen, mit Selbsttests.
- `aufgaben/01_...` bis `10_...`: HTML-Gerüste und TODO-Stellen.
- `QUELLEN.md`: technische Referenzen.

Die Musterlösungen liegen ausschließlich im getrennten Lösungen-Paket. Die beiden Demos sind vollständige Lehrbeispiele und keine Aufgabenlösungen.

## Arbeitsweise
Erst die Session-Lupe betrachten. Dann in den Übungen vor jedem Session-Zugriff `session_start()` ergänzen. Die Konfiguration in `function.php` startet noch keine Session. Einträge in POST vor dem Lesen mit `isset()` und `is_string()` prüfen. Für Session-Werte den erwarteten PHP-Typ beachten: Strings, Integer oder Arrays.

Aufgaben 1–7 behalten für Formularfehler den bekannten GET-Rückweg bei. Aufgabe 7 führt eine einmalige Session-Meldung ein; ab Aufgabe 8 kommen Fehler und gültige neue Formwerte ebenfalls über die Session zurück. Bei Fehlern keinen gespeicherten fachlichen Zustand verändern. Die Fehler-/Rückgabe-Schlüssel selbst werden natürlich aktualisiert.

## Lokale Lehrumgebung
PHP 8.x als Zielumgebung. Die verwendete Cookie-Optionssyntax benötigt mindestens PHP 7.3; das ist keine Empfehlung, eine veraltete Version zu installieren. `secure=false` ist ausschließlich für diese lokale HTTP-Übung gesetzt. Bei echtem HTTPS muss es `true` sein. Nur erfundene, kurze Daten nutzen. Nicht öffentlich als fertige Anwendung bereitstellen.

Jeder Aufgabenordner verwendet einen eigenen Session-Namen und Cookie-Pfad. Die Musterlösungen haben andere Namen als die Startdateien. Beim Verschieben eines Ordners können alte Cookies im Browser übrig bleiben; für einen sauberen Test diese entfernen. Ein neuer Tab allein bedeutet keine neue Session. Ein anderer Browser oder ein getrenntes Profil bietet einen getrennten Cookie-Kontext.

Die Übungen sind sequenzielle Beispiele ohne Hintergrundanfragen. Gleichzeitige Zugriffe, ein echter Login, CSRF-Token, Session-Zeitlimits und ausgefeilte Zugriffskontrollen sind nicht implementiert. Hinweise dazu stehen in der Webeinführung und in den Lehrkraft-Hinweisen der Lösungen.

## Auswahl für Tag 5
Eine kleine Aufgabe aus diesem Paket ist Pflicht. Die weiteren Aufgaben sind Übungsreserve. Vollständige Demos dienen als Vergleich; das historische separate Lösungen-ZIP ist hier nicht enthalten.
