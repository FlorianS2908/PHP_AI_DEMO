# Arrays und Funktionen – vier kurze Übungen

**Voraussetzungen:** Arrays, foreach, if/else, Parameter und return. Dies ist Übungsreserve für Tag 3–4. Arbeite in einer Kopie von [aufgaben_testarray.php](aufgaben_testarray.php). Vergleiche erst danach mit [loesungen_testarray.php](loesungen_testarray.php).

Die Startdatei enthält Platzhalter. Ergänze jeweils nur die aktuelle Funktion und ihre Testaufrufe. `mixed` erlaubt unterschiedliche Eingabetypen, damit auch ungültige Daten getestet werden können. Die Rückgabetypen legen fest, welche Ergebnisarten erlaubt sind.

## 1. Mengen bereinigen

Schreibe `negativeMengenKorrigieren`. Ist die Eingabe kein Array, gib `[]` zurück. Akzeptiere innerhalb des Arrays nur Integer oder mit `FILTER_VALIDATE_INT` prüfbare Ganzzahltexte. Entferne alle anderen Einträge. Setze negative Mengen auf `0`; behalte Artikelschlüssel und speichere gültige Mengen als Integer.

- Vorgabe aus der Startdatei → `['Tee' => 8, 'Kaffee' => 0, 'Kakao' => 0]`.
- `['A' => '2.5', 'B' => true, 'C' => [2]]` → `[]`.
- Leeres Array → `[]`. Die Zahl `0` und der Text `"0"` bleiben erhalten.

## 2. Bestand ergänzen

Schreibe `bestandErgaenzen`. Ein ungültiges Lager ergibt `[]`. Eine ungültige Lieferung lässt ein gültiges Lager unverändert. Prüfe `artikel` mit `isset`, `is_string` und `trim`; leere Namen sind ungültig. Prüfe die Liefermenge wie oben, akzeptiere aber nur Werte ab `0`.

Lege einen neuen Artikel an oder addiere zum vorhandenen gültigen Bestand. Verwende `array_key_exists`, damit ein vorhandener `null`-Bestand nicht als neuer Artikel behandelt wird. Ein ungültiger bestehender Bestand wird nicht überschrieben. Das Ergebnis muss als PHP-Integer darstellbar sein; sonst bleibt der Bestand unverändert. Alle anderen Artikel bleiben erhalten. Das Originalarray beim Aufrufer wird nicht verändert.

- Tee `5` + Lieferung `"3"` → Tee `8`.
- Neuer Artikel mit Menge `"0"` → neuer Eintrag mit Integer `0`.
- Negativer, leerer oder als Array übermittelter Wert → Lager unverändert.
- Vorhandener Bestand `null` → keine Änderung dieses Eintrags.

## 3. Summe zurückgeben

Schreibe `getSum`. Erlaube endliche Zahlen und Zahlenstrings, lehne andere Werte mit `false` ab. Gib die Summe zurück; die Funktion selbst verwendet kein `echo`. Ist das Rechenergebnis nicht endlich, gib ebenfalls `false` zurück.

Prüfe `3, 5` → `8`; `-3, 3` → `0`; `"2.5", 1` → `3.5`; `"abc", 1` → `false`. Unterscheide ein gültiges Ergebnis `0` mit `=== false` von einem Fehler.

## 4. Größte Zahl finden

Schreibe `getMax` mit derselben Eingabeprüfung. Verwende `if/elseif/else` statt `max`. Gib den größten der drei Werte zurück; Gleichstände sind gültig. Prüfe `12, 11, 12` → `12`; `-5, -2, -9` → `-2`; `0, 0, 0` → `0`; eine ungültige Eingabe → `false`.

## Nachweis und Begriffe

Notiere pro Aufgabe Eingaben, erwartetes Ergebnis, tatsächliches Ergebnis und eine kurze Begründung. `return` beendet die aktuelle Funktion und liefert ein Ergebnis; `echo` erzeugt Ausgabe. PHP ist dynamisch typisiert und erlaubt bestimmte automatische Typumwandlungen. Deshalb legen wir hier die erlaubten Werte ausdrücklich fest. `number` ist in PHP kein allgemeiner Typ oder eingebauter Standardwert für Parameter.

Bei Klartextausgabe erzeugt `PHP_EOL` einen passenden Zeilenumbruch. In normalem HTML ist ein solcher Zeilenumbruch nicht automatisch als neue Zeile sichtbar. Die Startdatei verwendet deshalb `text/plain`.

[Zur Übersicht der gemeinsamen Arbeit](../../index.html)
