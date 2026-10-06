<?php
declare(strict_types=1);
// TODO: Nur POST verarbeiten; Direktaufruf kontrolliert behandeln.
// TODO: Feld ziel auf Existenz, Texttyp, Leerzeichen und Pflichtinhalt prüfen.
// TODO: Fehler sammeln; gültigen Text für die HTML-Ausgabe maskieren.
// TODO: Anschließend den Ablauf um einen 303-Rückweg erweitern.
http_response_code(501);
echo 'Startaufgabe: Die Formularverarbeitung muss noch ergänzt werden.';
