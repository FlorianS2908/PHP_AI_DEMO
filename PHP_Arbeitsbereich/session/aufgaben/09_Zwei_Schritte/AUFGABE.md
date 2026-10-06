# 09 Einen Entwurf in zwei Schritten bestätigen

**Schritt 1: titel · Schritt 2: Checkbox bestaetigt (ja)**

Session-Daten zwischen zwei Formularschritten verwenden

1. Prüfe den Titel aus dem ersten POST-Formular. Speichere nur gültigen Text als Session-Entwurf und leite zu bestaetigen.php weiter.
2. Die zweite Seite liest den Titel nur aus der Session. Ohne gültigen Entwurf führt sie mit einer Fehlermeldung zum ersten Formular zurück.
3. Prüfe die Bestätigung serverseitig: bestaetigt muss gesetzt, ein Textwert und genau ja sein. Ohne Haken bleibt der Entwurf erhalten und die zweite Seite zeigt einen Fehler.
4. Nach gültiger Bestätigung übernimmst du den Titel als Auftrag und entfernst den Entwurf. Die Startseite zeigt die Bestätigung. Das ist nur eine Ablaufübung, kein Login und kein Druckauftrag.

## Teste selbst

- Titel „Übungsblatt“ → zweite Seite zeigt denselben Titel ohne URL-Parameter.
- Ohne Haken senden → Meldung; Entwurf bleibt; mit Haken → Bestätigung.
- Zweite Seite ohne Entwurf direkt öffnen → kontrolliert zum ersten Schritt zurück.

Die gemeinsamen Regeln stehen im Aufgaben-PDF. Startdateien enthalten keine fertige Verarbeitung.
