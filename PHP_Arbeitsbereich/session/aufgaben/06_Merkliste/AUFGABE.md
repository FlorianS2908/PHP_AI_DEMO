# 06 Eine kleine Merkliste führen

**POST · begriff (Text) · Aktionen hinzufuegen / leeren**

Ein Session-Array erweitern und durchlaufen

1. Prüfe den POST-Begriff mit isset(), is_string() und trim(). Ein leerer Begriff ist ungültig. Lies die vorhandene Merkliste als Array.
2. Erlaube höchstens fünf Einträge und keine identischen Doppelungen. Groß- und Kleinschreibung werden dabei unterschieden. Bei Fehlern bleibt die Liste unverändert.
3. Hänge nur einen gültigen neuen Begriff an. Speichere die Liste in der Session, leite zurück und gib ihre Einträge mit foreach sicher in HTML aus.
4. Die POST-Aktion leeren entfernt nur die Merkliste und benötigt keine neue Texteingabe. Nach der Rückleitung erscheint „Noch keine Begriffe“.

## Teste selbst

- PHP, dann HTML → beide Begriffe in der Liste.
- PHP erneut → Fehlermeldung, keine Doppelung; sechster Begriff → abgelehnt.
- F5 dupliziert nichts; Leeren entfernt die Liste.

Die gemeinsamen Regeln stehen im Aufgaben-PDF. Startdateien enthalten keine fertige Verarbeitung.
