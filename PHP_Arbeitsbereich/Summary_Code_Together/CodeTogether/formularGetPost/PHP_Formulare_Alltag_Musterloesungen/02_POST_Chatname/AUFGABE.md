## Aufgabe 02: Chatname festlegen

**Methode:** POST  
**Felder:** Chatname: alias

Den Ablauf auf POST übertragen und die Übertragungsmethode unterscheiden.

1. Sende alias mit POST. Prüfe ausdrücklich mit isset(), ob der Eintrag in $_POST gesetzt ist; lies nicht aus $_GET.
2. Übernimm nur einen Textwert. Entferne äußere Leerzeichen und lehne eine fehlende oder leere Eingabe ab.
3. Leite bei einem Fehler zurück. Die Meldung kommt als URL-Parameter im Formular an und wird dort angezeigt.
4. Bei gültiger Eingabe gib den Chatnamen aus. Ein GET-Aufruf der Auswertung darf nicht als erfolgreiche POST-Eingabe gelten.

**Teste selbst:**

- Pixel -> Erfolgsausgabe.
- Leer oder nur Leerzeichen -> Rückleitung mit Fehlermeldung.
- auswertung.php?alias=Pixel öffnen -> keine erfolgreiche POST-Auswertung.

Zusätzlich gelten die gemeinsamen Prüfungen aus README.md: fehlende Parameter, leere Eingaben, beide Fehler und keine PHP-Warnungen.
