# 08 Lautstärke nur im erlaubten Bereich

Die Klasse schützt ihren gültigen Zustand; 0 ist erlaubt.

**Dateien:** index.php

1. Das private Attribut wert startet mit 5; getWert() ist vorbereitet. Ergänze setWert($wert).
2. Akzeptiere ausschließlich int-Werte von 0 bis 10. Bei Erfolg: Wert ändern und true zurückgeben. Sonst: false zurückgeben und den bisherigen Wert behalten.
3. Die Aufrufe für 0 und danach 11 sind vorgegeben. Ergänze die Methode und aktiviere den gekennzeichneten Testblock.

## Teste selbst
- setWert(0): angenommen; der gespeicherte Wert ist 0.
- Danach setWert(11): abgelehnt; der Wert bleibt 0.
- Auch -1, 2.5 und der Text "5" werden abgelehnt.

Neu erstellte PHP-Übung. Umfang und Herkunft: QUELLEN.md im Paketstamm.
