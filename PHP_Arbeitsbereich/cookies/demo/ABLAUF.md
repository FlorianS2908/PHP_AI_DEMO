# Demo: Ein Sprach-Cookie mit drei Dateien

1. index.php über localhost öffnen. Ohne Cookie gilt Deutsch.
2. In F12 / Netzwerk das Protokoll beibehalten, damit die 303-Antwort sichtbar bleibt.
3. Englisch wählen und speichern. Die Auswertung prüft erst Methode und Einzelwerte.
4. In der Antwort von auswertung.php stehen Set-Cookie und Location; Status 303.
5. Im neuen GET an index.php steht im Request ein Cookie-Header, sofern der Browser das Cookie akzeptiert hat.
6. $_COOKIE enthält nun den eingegangenen Wert en. F5 wiederholt nur den GET.
7. Leere Auswahl speichern: Fehler, kein neuer Set-Cookie-Header, Auswahl leer.
8. Das ältere, gültige Cookie bleibt dabei unverändert; gespeichert und neu eingegeben sind getrennte Zustände.
9. Ohne Auswahl auf Cookie löschen klicken. Danach kommt kein passendes Cookie mehr an.

Der Pfad wird automatisch für diesen Demo-Ordner gebildet. Der Cookie-Name unterscheidet
sich von der Cookie-Lupe und allen Übungen. Kein PHP-Session-Mechanismus wird verwendet.

Alle Beispiele: lokale HTTP-Umgebung. Bei einer HTTPS-Bereitstellung Secure aktivieren;
kein unverändertes Muster für Anmeldung, Berechtigungen oder vertrauliche Daten.
