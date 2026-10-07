<?php
declare(strict_types=1);
// TODO: Nur POST verarbeiten; Direktaufruf kontrolliert behandeln.
// TODO: index.html in index.php umbenennen und dort Rückmeldungen aus GET anzeigen.
// TODO: Feld ziel auf Existenz, Texttyp, Leerzeichen und Pflichtinhalt prüfen; maximal 100 UTF-8-Bytes (strlen).
// TODO: Fehler sammeln; gültigen Text separat erhalten; erst bei der HTML-Ausgabe maskieren.
// TODO: Anschließend den Ablauf um einen 303-Rückweg erweitern.
http_response_code(501);
echo 'Startaufgabe: Die Formularverarbeitung muss noch ergänzt werden.';
