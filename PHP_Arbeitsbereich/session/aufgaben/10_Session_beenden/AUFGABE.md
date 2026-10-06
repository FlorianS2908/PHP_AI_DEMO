# 10 Die gesamte Übungs-Session beenden

**POST · alias · format (kompakt / gross) · Aktion beenden**

Session-Daten, PHP-Array und Browser-Cookie unterscheiden

1. Prüfe und speichere Alias sowie Format wie gewohnt. Verwende für Formularfehler den Session-Rückweg aus Aufgabe 8.
2. Ergänze die POST-Aktion beenden. Sie verlangt keine neuen Feldwerte. Leere sämtliche Werte dieser Session, entferne ihr Cookie mit passendem Namen und Pfad und zerstöre die serverseitigen Session-Daten.
3. Leite danach auf die vorbereitete ende.html weiter. Diese Seite darf keine neue Session starten. Andere Aufgabenordner dürfen nicht beeinflusst werden.
4. Öffne anschließend index.php erneut: Jetzt entsteht eine neue leere Session. Prüfe im Browser den Cookie-Zustand vor und nach der Beenden-Aktion.

## Teste selbst

- Alias / Groß speichern → Werte vorhanden; Beenden → Cookie weg.
- F5 auf ende.html → keine neue Session; Link zu index.php → neuer leerer Stand.
- Alte Werte erscheinen nicht wieder; nur ein Eintrag per unset() wäre nicht dasselbe.

Die gemeinsamen Regeln stehen im Aufgaben-PDF. Startdateien enthalten keine fertige Verarbeitung.
