# PHP AI Demo – CourseForge-Kursmaterialien

Arbeitsprobe von Florian Schaffer: ein in der Unterrichtspraxis eingesetztes Materialpaket für einen fünftägigen Kurs mit PHP-Schwerpunkt.

**[Projektübersicht als PDF](docs/CourseForge_Kursmaterialien_PHP_Florian_Schaffer.pdf)** · [Dozentenfassung](PHP_Dozent/index.html) · [Teilnehmerfassung](PHP_Teilnehmer/index.html) · [Arbeitsbereich](PHP_Arbeitsbereich/index.html)

GitHub zeigt HTML als Quelltext. Für die Darstellung das Repository herunterladen oder klonen und die Startseite lokal öffnen.

## In fünf Minuten ansehen

1. Repository herunterladen und vollständig entpacken; die zentrale Datei **index.html** im Browser öffnen.
2. In **PHP Dozent** einen Themenbaustein, eine Demo und die zugehörigen Aufgaben/Musterlösungen vergleichen.
3. Unter **PHP Arbeitsbereich → ai** die fünf Formularprojekte und die getrennten Prompt-Muster ansehen.
4. Die Teilnehmerfassung zeigt die für Lernende zusammengestellten Materialien. Vollständige Fragenpools und Aufgabenlösungen liegen in der Dozentenfassung.
5. Für PHP-Verarbeitung den Kurs in XAMPP/htdocs ablegen und Apache starten. Alternativ PHP-START.cmd bei installiertem PHP verwenden. Datenbankübungen benötigen zusätzlich MySQL/MariaDB und eine lokale Konfiguration.

## Drei klar benannte Kursbereiche

| Ordner | Zweck |
| --- | --- |
| PHP_Dozent | 13 Webbausteine, 78 Kernaufgaben, 26 Demos, Musterlösungen, 156 unterschiedliche Quizfragen, Quellenhinweise und Unterrichtssteuerung |
| PHP_Teilnehmer | Webkurs, Startdateien, Aufgaben, Demos und Quiz mit zwei Bedienprobe-Fragen; weitere Pools werden gezielt ausgegeben |
| PHP_Arbeitsbereich | Summary_Code_Together, tägliche Fragenpools, HTML-Tag-Tool, KI-Formularlabor und thematische Übungspakete |

Das durchgängige Lernkonzept lautet: **Demo → Startdateien → eigene Aufgaben/Übungen → Prüfung → Vergleich mit separat bereitgestellten Lösungen**.

Persönliche Bearbeitungen liegen lokal unter PHP_Arbeitsbereich/Persoenliche_Arbeit. Die .gitignore nimmt neu angelegte persönliche Ordner aus der gemeinsamen Versionierung aus. Sie ersetzt keine Zugriffskontrolle. Gemeinsame Beispiele liegen unter Summary_Code_Together.

## Prompt Engineering durch praktische Entwicklung

Fünf Projekte verbinden HTML, CSS Grid und PHP mit fachlichen Regeln:

- Workshop-Anmeldung: Pflichtfelder, optionale Extras und Kostenberechnung.
- Fahrrad-Werkstattauftrag: bedingte Pflichtfelder, Termin und Budget.
- Raumreservierung: Kapazität, Zeiträume und Abrechnung.
- Teamshirt-Konfigurator: abhängige Angaben und Mengenrabatte.
- PC-Konfigurator: Kompatibilität, Preispositionen und Budgetvergleich.

Teilnehmende erstellen eigene **Umsetzungs-, Prüf- und Korrekturprompts**. Die Abgabe umfasst die Anwendung, Annahmen und ein Testprotokoll. Lösungen und Prompt-Muster sind getrennt abgelegt.

## Rolle von CourseForge

Vor der Erstellung stehen Zielgruppe, Lernziele, Themenauswahl, Kursumfang und Prüfkriterien fest. CourseForge arbeitet daraus die Materialien aus. Die Lehrkraft überprüft Inhalte und Lernweg und arbeitet Feedback ein. Kurs-, Ordner- und Dateibezeichnungen werden vorgegeben; diese Veröffentlichung verwendet durchgehend neutrale PHP-Namen.

Die Ausarbeitung dauerte nach rückblickender Schätzung etwa vier bis fünf Tage mit sieben bis acht Anpassungen. Dies sind projektspezifische Erfahrungswerte, keine gemessenen Arbeitsstunden oder allgemeine Leistungsgarantie.

Der Rahmen beträgt fünf Tage mit jeweils neun Unterrichtseinheiten. Der Materialfundus enthält auch ergänzende Themen; die Lehrkraft wählt passend zur Lerngruppe aus.

## Prüfstand

Die aktuelle Bereitstellungsprüfung steht in [pruefberichte/bereitstellung.json](pruefberichte/bereitstellung.json). Sie prüft Dateinamen und Inhalte, JSON, lokale HTML-Verweise, JavaScript-Syntax und die aktualisierten Dateimanifeste.

Die ursprünglichen Prüfberichte zum Kernkurs und Formularlabor sind getrennt enthalten. Sie dokumentieren unter anderem 22 PHP-HTTP-Fälle im Kernkurs und 152 HTTP-Fälle im Formularlabor. Diese Laufzeittests wurden bei der Umbenennung nicht erneut ausgeführt. Ein vollständiger Windows-/XAMPP-End-to-End-Test und der erfolgreiche Datenbankpfad bleiben gesondert zu prüfen.

Aufgaben können bewusst unvollständigen Startcode enthalten. Zwei gemeinsame Formularübungen kennzeichnen die noch zu entwickelnde Verarbeitung ausdrücklich als Übungsauftrag. Die fünf Musterlösungen des KI-Formularlabors liegen unter PHP_Arbeitsbereich/ai/Loesungen.

## Umfang der Veröffentlichung

Veröffentlicht werden die ausgearbeiteten Lernmaterialien. Interne Ausgangspräsentationen, alte Archivverzeichnisse, persönliche Git-Historien und nicht benötigte Vorschauaufnahmen sind nicht Bestandteil des Repositories. Fachliche Quellenbezüge und öffentlich zugängliche technische Referenzen bleiben erhalten.

Alle Geschäftsszenarien verwenden fiktive Daten. Die Beispiele dienen dem Unterricht; sie führen keine echten Bestellungen, Zahlungen oder E-Mails aus.

