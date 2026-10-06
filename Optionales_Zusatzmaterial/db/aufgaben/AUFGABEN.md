# PHP – Zehn kleine Schritte zur Personenverwaltung

Alle Aufgaben bauen im **selben Ordner `aufgaben/`** aufeinander auf. Nicht zehn neue Datenbanken anlegen.
Zwei sichtbare Felder: Vorname und Nachname. SQL-Struktur und HTML-Grundgerüst sind vorgegeben. Demo und nummerierte Musterlösungen dienen erst später zum Vergleich.

## 01 – Die kleine Datenbank importieren
**Eine Datenbank · eine Tabelle · drei Spalten**  
Dateien: `datenbank.sql / phpMyAdmin`

1. Starte Apache und den Datenbankdienst in XAMPP. Importiere datenbank.sql einmal in phpMyAdmin.
2. Öffne PHP_personen und die Tabelle personen. Lies die drei Beispielpersonen.
3. Ordne die Spalten id, vorname und nachname zu. Erkläre, warum die ID kein Eingabefeld im Formular braucht.

**Teste selbst**
- Beim ersten Import in eine neue Datenbank sind drei Zeilen vorhanden.
- Notiere die Spaltentypen. Wiederhole den Import nicht: Die Beispieldaten würden erneut eingefügt.

## 02 – PHP mit der Datenbank verbinden
**PDO · Zugangsdaten · Verbindungsfehler**  
Dateien: `config.php / aufgaben/db.php`

1. Prüfe in config.php Host, Port, Datenbankname, Benutzer und Passwort für deine lokale Installation.
2. Ergänze TODO 02: Gib ein PDO-Objekt zurück. Verwende den vorbereiteten DSN und das Options-Array für Exceptions und echte Prepared Statements.
3. Entferne die vorläufige Exception. Die Fehlerbehandlung der aufrufenden Seite ist bereits vorhanden.

**Teste selbst**
- Öffne aufgaben/index.php. Mit richtigen Zugangsdaten verschwindet der Verbindungsfehler.
- Ein absichtlich falscher Datenbankname erzeugt einen verständlichen Hinweis. Stelle danach den richtigen Namen wieder her.

## 03 – Die Klasse Person ergänzen
**Daten als Objekt · Konstruktor · Getter**  
Dateien: `aufgaben/Person.php / objekt_test.php`

1. Ergänze drei private Attribute für ID, Vorname und Nachname. Verwende passende Datentypen.
2. Übernimm die Konstruktorparameter in die Attribute. Ergänze die drei Getter und ersetze deren vorläufige Rückgabewerte.
3. Die Klasse enthält keine Datenbankverbindung und keine HTML-Ausgabe. Öffne den vorgegebenen Objekttest.

**Teste selbst**
- objekt_test.php zeigt unter Ist: 7 / Mia / Müller.
- Ändere die Testwerte im Aufruf. Die Getter liefern die neuen Werte. Es wird dabei noch nichts gespeichert.

## 04 – Datensätze in Person-Objekte umwandeln
**SELECT · fetch · ein Objekt pro Zeile**  
Dateien: `aufgaben/index.php, PHP-Bereich vor dem HTML`

1. Lies id, vorname und nachname aus personen, aufsteigend nach id sortiert. Ergänze TODO 04.
2. Hole die Ergebniszeilen nacheinander als assoziative Arrays ab.
3. Erzeuge innerhalb der Schleife für jede Zeile ein eigenes Person-Objekt. Sammle die Objekte in $personen. Übernimm die ID als int.

**Teste selbst**
- Nach dem ersten Import enthält $personen drei Objekte der Klasse Person.
- Kontrolliere die Variable im Debugger oder vorübergehend mit var_dump(). Entferne Debug-Ausgaben anschließend wieder.

## 05 – Die Objekte als HTML-Tabelle anzeigen
**foreach · Getter · HTML-Ausgabe**  
Dateien: `aufgaben/index.php, Tabellenkörper`

1. Ergänze TODO 05: Durchlaufe das Array $personen mit foreach.
2. Erzeuge pro Person eine Tabellenzeile. Lies alle drei Werte über die Getter; gib die Namen mit dem vorgegebenen html()-Helper aus.
3. Zeige bei einer leeren Objektliste eine verständliche Meldung über alle drei Spalten an.

**Teste selbst**
- Jede Beispielperson erscheint genau einmal mit ihrer ID.
- Simuliere vorübergehend eine leere Liste und prüfe die Leermeldung. Entferne die Teständerung wieder.

## 06 – Die beiden POST-Einträge entgegennehmen
**Vor dem Auslesen: isset und Texttyp**  
Dateien: `aufgaben/speichern.php`

1. Das Formular ist fertig vorbereitet. Ergänze in TODO 06 für jeden POST-Eintrag eine eigene Prüfung mit isset() und is_string().
2. Fehlt ein Eintrag oder ist er kein Textwert, sammle eine passende Feldmeldung. Verarbeite das andere Feld trotzdem.
3. Entferne bei vorhandenen Textwerten äußere Leerzeichen. Lege die Werte zunächst in $vorname und $nachname ab, noch nicht in der Datenbank.

**Teste selbst**
- Untersuche die Variablen am Haltepunkt nach dem Empfang: Mia / Müller kommt in den Textvariablen an.
- Entferne im Browser testweise das name-Attribut eines Feldes oder sende einen Array-Wert. Es darf keine Undefined-array-key-Warnung entstehen.

## 07 – Inhalte prüfen und bei Fehlern zurückleiten
**Pflichtfelder · maximal 50 Zeichen · Werterhalt**  
Dateien: `aufgaben/speichern.php, TODO 07a und 07b`

1. Prüfe beide noch nicht beanstandeten Texte: nach trim() nicht leer, gültiges UTF-8 und höchstens 50 Zeichen. Die Zeichenfunktionen sind als Baustein vorgegeben.
2. Sammle alle Fehler. Übernimm ausschließlich gültige Eingaben in $werte. Entferne den vorläufigen TODO-Schutz erst nach vollständiger Prüfung.
3. Bei Fehlern: Fehler und gültige Werte unter $_SESSION["formular"] ablegen, mit 303 zurückleiten und beenden. Die Anzeige und das Wiedereinsetzen sind schon vorbereitet.

**Teste selbst**
- Mia / leer: Vorname bleibt, Nachname ist leer, keine neue DB-Zeile.
- Beide leer: beide Feldmeldungen. Leerzeichen oder 51 Zeichen: betroffene Eingabe wird abgelehnt.

## 08 – Eine gültige Person mit INSERT speichern
**prepare · Platzhalter · execute**  
Dateien: `aufgaben/speichern.php, TODO 08`

1. Ergänze nach erfolgreicher Prüfung eine INSERT-Anweisung mit zwei benannten Platzhaltern. Die ID wird nicht von dir übergeben.
2. Bereite die Anweisung mit prepare() vor. Übergib beide Werte getrennt vom SQL-Text an execute().
3. Entferne die vorläufige Exception. Setze niemals Formulardaten durch Verkettung direkt in den SQL-Befehl ein.

**Teste selbst**
- Speichere einmal Nora / Weber und prüfe in phpMyAdmin: Es gibt eine zusätzliche Zeile.
- Ohne Aufgabe 09 erscheint nach dem INSERT noch der Übergangshinweis. Nicht erneut absenden; öffne index.php per GET.

## 09 – Nach dem Speichern die aktuelle Liste laden
**POST → INSERT → 303 → GET → SELECT**  
Dateien: `aufgaben/speichern.php, TODO 09`

1. Hinterlege nach dem erfolgreichen INSERT eine kurze Erfolgsmeldung in $_SESSION["erfolg"].
2. Ersetze die vorläufige Ausgabe durch die 303-Rückleitung zu index.php und ein anschließendes exit.
3. Die neue GET-Anfrage soll die Personen erneut aus der Datenbank lesen und die ergänzte Tabelle zeigen. Die Erfolgsmeldung wird einmalig angezeigt.

**Teste selbst**
- Formular absenden: Person in der Liste, Erfolgsmeldung sichtbar, Eingabefelder leer.
- F5 auf der zurückgeleiteten Seite erzeugt keine weitere Zeile. Bewusstes erneutes Absenden ist dagegen ein neues INSERT.

## 10 – Den gesamten Ablauf prüfen
**Zusammenführen · Sonderzeichen · Fehlerfälle**  
Dateien: `Alle Dateien im Aufgabenordner`

1. Prüfe einen gültigen Namen, leere und fehlende Werte, Arrays und beide Felder falsch. Für den Test mit 51 Zeichen entfernst du im Browser-Inspector vorübergehend maxlength; für einen fehlenden Wert das name-Attribut.
2. Speichere erfundene Testnamen mit Umlaut, Bindestrich und Apostroph. Prüfe außerdem, dass HTML-Zeichen als Text erscheinen.
3. Öffne die Übersicht in einem privaten Browserfenster: gespeicherte Personen müssen auch ohne die bisherige Session aus der Datenbank gelesen werden.

**Teste selbst**
- Ungültige Eingaben erzeugen keine neue Zeile; gültige neue Eingaben bleiben nach Fehlern erhalten.
- Erkläre den Weg eines Datensatzes: DB-Zeile → Person-Objekt → Getter → HTML. Ein Objekt allein speichert nichts in MySQL.
