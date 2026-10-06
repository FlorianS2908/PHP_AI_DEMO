# PHP AI Demo – CourseForge-Kursmaterialien

Arbeitsprobe von Florian Schaffer: ein aus der Unterrichtspraxis weiterentwickeltes Materialpaket. Die aktuelle Fassung führt durch **fünf Tage mit je neun UE** – von HTML/CSS bis Cookies und Sessions.

**[Teilnehmerfassung](PHP_Teilnehmer/index.html)** · **[Dozentenfassung](PHP_Dozent/index.html)** · [Arbeitsbereich](PHP_Arbeitsbereich/index.html) · [Projektübersicht als PDF](docs/CourseForge_Kursmaterialien_PHP_Florian_Schaffer.pdf)

## Fünf Tage / 45 UE

| Tag | Pflichtstoff | Ergebnis |
| --- | --- | --- |
| 1 | Schnittstellen, Peripherie, UI/Usability; HTML-Struktur, Tags, Attribute, id/class; CSS-Regeln und Bedienbarkeit | Kleine HTML/CSS-Seite mit Tastaturtest |
| 2 | HTML-Formulare, name/value, GET/POST, URL/Body, HTTP-Request und Response | Formular und beobachteter Datenweg |
| 3 | PHP-Tags, DOCTYPE, Variablen, Typen, strict_types, if/else, Arrays, Schleifen, Funktionen | Kleines PHP-Skript und Schreibtischtest |
| 4 | GET/POST verarbeiten, prüfen, Fehlerlisten, sichere HTML-Ausgabe, 303-Rückweg | Validiertes kleines Formular |
| 5 | Cookies und Sessions; Speichern, Lesen, Löschen, praktische Lernzielkontrolle | Je eine Zustandsübung und Projektabnahme |

**OOP und Datenbanken sind optional.** Die eigenständigen Pakete liegen unter [Optionales_Zusatzmaterial](Optionales_Zusatzmaterial/index.html). Auch der ältere Datenbankbaustein und die MySQL-Suchreferenz sind nur dort als Anschlussmaterial vorgesehen. Der Kernkurs benötigt keine Datenbank.

Jeder Tag hat Lernziele, neun UE, kurze Erklärungen, kleine Beispiele, verknüpfte Demos, Startdateien, Aufgaben, einen KI-Auftrag und einen Wissenscheck. Die Dozentenfassung ergänzt Ablaufhinweise, Erwartungshorizonte und getrennte Musterlösungen. [kursplan.json](kursplan.json) dokumentiert die Zuordnung.

## Lokal starten

1. Das **gesamte Repository** herunterladen/klonen. GitHub zeigt HTML als Quelltext; lokale Darstellung über index.html.
2. Für HTTP-Formulare und PHP **PHP-START.cmd im Hauptordner** starten. PHP aus PATH oder C:\xampp\php wird verwendet. Adresse: http://127.0.0.1:8080/.
3. Alternativ: gesamten Ordner PHP_AI_DEMO unter C:\xampp\htdocs ablegen, Apache starten, http://localhost/PHP_AI_DEMO/ öffnen. MySQL nur für die optionale DB-Erweiterung starten.
4. Ab Tag 2 die Netzwerkanalyse der Browser-Entwicklerwerkzeuge verwenden. PHP-Dateien nicht per Doppelklick ausführen.

## Material und Werkzeuge

- [HTML-Tag-Tool](PHP_Arbeitsbereich/html-tag-tool/index.html): direkt aus Teilnehmer- und Dozentenansicht erreichbar, mit Rückwegen.
- [Summary Code Together](PHP_Arbeitsbereich/Summary_Code_Together/index.html): vorhandene Grundlagen, Arrays, kleine Schritte und Formulare für Tag 3–4.
- [Cookies](PHP_Arbeitsbereich/cookies/index.html) und [Sessions](PHP_Arbeitsbereich/session/index.html): Erklärung, Demo und Startaufgaben für Tag 5. Je eine Aufgabe ist Pflicht, weitere Aufgaben sind Reserve.
- [Erwartungshorizonte](PHP_Dozent/tagesloesungen.html): Antworten, Lösungen für neue PHP-Tagesaufgaben und die beiden ausgewählten Zustandsübungen. Die historischen vollständigen Zusatz-Lösungspakete sind nicht enthalten.
- Der Themenfundus umfasst die ursprünglichen 13 Bausteine (einschließlich der optionalen Datenbank), 78 Aufgaben, 26 Demos und 156 unterschiedliche Fragen. Neue Tagesseiten führen eine passende Auswahl zusammen; die fünf Tage verlangen nicht die vollständige Bearbeitung des Fundus.

## KI mit wachsendem Lernstand

Das [KI-Formularlabor](PHP_Arbeitsbereich/ai/index.html) bietet fünf Szenarien: Workshop, Fahrradwerkstatt, Raumreservierung, Teamshirt und PC-Konfigurator. **Ein Projekt auswählen.** Kleine Kursvarianten begrenzen Umfang und Fachregeln; die bisherigen großen PDFs und Musterlösungen dienen der Vertiefung.

HTML/CSS prüfen → Formular planen → kleinen PHP-Code erklären → Eingaben validieren → eine Cookie- oder Session-Funktion ergänzen. Abgabe: eigene Dateien, eigene Prompts, begründete Änderungen und Normal-/Fehl-/Grenzfalltests. [Aktuelle Kursaufträge als PDF](PHP_Arbeitsbereich/ai/PHP_KI_Kursauftraege_5_Tage.pdf).

## Rolle von CourseForge

Die Lehrkraft benennt zuerst Zielgruppe, Vorwissen, Lernziele, Zeitrahmen, Themenfolge und Prüfkriterien. CourseForge erstellt zusammenhängende Materialien; die Lehrkraft prüft fachlich und didaktisch und arbeitet Feedback ein. Kurs-, Ordner- und Dateibezeichnungen werden vorgegeben und entsprechend zusammengesetzt. Diese Fassung verwendet neutrale PHP-Namen.

Die ursprüngliche Ausarbeitung dauerte nach rückblickender Schätzung etwa vier bis fünf Tage mit sieben bis acht Anpassungen. Das sind projektspezifische Erfahrungswerte, keine gemessenen Arbeitsstunden oder allgemeine Leistungsgarantie. Die hier dokumentierte Tagesstruktur ist eine Weiterentwicklung des Materials.

## Zusammenarbeit und Prüfstand

Persönliche Bearbeitungen liegen unter PHP_Arbeitsbereich/Persoenliche_Arbeit und sind über .gitignore von der gemeinsamen Versionierung ausgenommen. Das öffentliche Repository enthält auch Lehrkraftmaterial; die Trennung ist didaktisch und keine Zugriffskontrolle.

Die aktuelle Prüfung steht in [pruefberichte/kursstruktur-review.md](pruefberichte/kursstruktur-review.md) und [bereitstellung.json](pruefberichte/bereitstellung.json). Ältere Prüfberichte sind historische Nachweise und keine erneute Prüfung dieses Stands. Ein echter Windows-/XAMPP-Test erfolgt separat.

Interne Ausgangspräsentationen, persönliche Git-Historien und alte Archive sind nicht Teil der Veröffentlichung. Alle Geschäftsszenarien verwenden fiktive Daten; keine echten Bestellungen, Zahlungen oder E-Mails.
