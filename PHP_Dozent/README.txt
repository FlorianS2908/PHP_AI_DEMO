PHP – fertig aufgebautes Unterrichtspaket

START: ZIP vollständig entpacken. START.cmd oder index.html öffnen.
Für den Webkurs wird kein Python-Generator, npm oder Build-Schritt benötigt.
Navigation in den Webvarianten: Pfeil links/rechts, Pos1/Ende und Schaltflächen.
Leseansicht und Druckansicht sind vorhanden.

PHP: PHP-START.cmd oder XAMPP nutzen. Datenbankdienst separat starten.
backend/schema.sql importieren; config.example.php als config.local.php kopieren
und nur eigene lokale Testzugangsdaten eintragen. Keine produktiven Daten.
Die Suchreferenz ist keine vollständige Buchungssoftware.

Quiz: Neue PHP-Fassung nach dem vorhandenen Bedienkonzept und JSON-Schema.
Das Originaltool konnte nicht als Rohdatei übernommen werden; daher ist der
Funktionscode neu implementiert, nicht angeblich unverändert kopiert.
Auswahl, Mehrfachwahl, Reihenfolge und Zuordnung werden unterstützt.
Eine vollständig korrekte Frage = 1 Punkt, keine Teilpunkte.
Keine manipulationssichere Prüfung; JSON-Dateien enthalten Lösungsschlüssel.
Beim Neuladen wird der laufende Quizversuch nicht wiederhergestellt.

Im Teilnehmerpaket fehlen die separat erzeugten Aufgabenlösungen und Fragenpools.
Zwei Bedienprobe-Fragen sind im dortigen Quiz integriert. Demos bleiben vollständig.
Die Lehrkraft gibt weitere JSON-Pools gezielt aus.

Fachkorrekturen und zusätzliche Inhalte sind in quellen.html ausgewiesen.

PRUEFSTAND: Quiz, Webvarianten, Demos und PHP-Grundlagen wurden getestet.
Die echte MySQL/MariaDB-Anbindung bleibt lokal zu pruefen; hier fehlten
Datenbankserver und mysqli. Einzelheiten stehen in der Dozentenfassung
in qa.html. Die Windows-CMD-Dateien wurden nicht unter Windows ausgefuehrt.
