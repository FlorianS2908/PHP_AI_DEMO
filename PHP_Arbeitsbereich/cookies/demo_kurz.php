<?php
// COOKIE-LUPE: absichtlich OHNE Redirect, um den aktuellen Request zu beobachten.
// Lokal über http://localhost aufrufen. Keine Sessions und keine Datenbank.
function html(string $text): string
{
    return htmlspecialchars($text, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}

header("Cache-Control: no-store");
$seite = basename($_SERVER["SCRIPT_NAME"]);
$pfad = rtrim(dirname($_SERVER["SCRIPT_NAME"]), "/\\") . "/";
$meldung = "Noch keine Cookie-Aktion in diesem Aufruf.";
$eingang = "Kein gültiges Cookie angekommen.";
$sprache = "de";

// 1. $_COOKIE beschreibt NUR die Cookies dieser eingehenden Anfrage.
if (isset($_COOKIE["PHP_lupe_sprache"]) && is_string($_COOKIE["PHP_lupe_sprache"])) {
    if (in_array($_COOKIE["PHP_lupe_sprache"], ["de", "en"], true)) {
        $sprache = $_COOKIE["PHP_lupe_sprache"];
        $eingang = "Angekommen: " . $sprache;
    }
}

// 2. Änderungen sind ausdrücklich POST-Aktionen.
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $aktion = "";
    if (isset($_POST["aktion"]) && is_string($_POST["aktion"])) {
        $aktion = $_POST["aktion"];
    }
    $optionen = [
        "expires" => time() + 3600,
        "path" => $pfad,
        "secure" => false, // NUR lokale HTTP-Übung. Für HTTPS: true.
        "httponly" => true,
        "samesite" => "Lax"
    ];

    if ($aktion === "speichern") {
        $neu = "";
        if (isset($_POST["sprache"]) && is_string($_POST["sprache"])) {
            $neu = $_POST["sprache"];
        }
        if (in_array($neu, ["de", "en"], true)) {
            // 3. Der Antwort-Header bittet den Browser, das Cookie zu speichern.
            setcookie("PHP_lupe_sprache", $neu, $optionen);
            $meldung = "Set-Cookie für " . $neu . " an den Browser gesendet.";
        } else {
            $meldung = "Fehler: Bitte Deutsch oder Englisch wählen. Kein Cookie geändert.";
        }
    } elseif ($aktion === "loeschen") {
        // Gleicher Name und Pfad; eine Ablaufzeit in der Vergangenheit.
        $optionen["expires"] = time() - 3600;
        setcookie("PHP_lupe_sprache", "", $optionen);
        $meldung = "Löschanweisung an den Browser gesendet.";
    } else {
        $meldung = "Fehler: Ungültige Aktion. Kein Cookie geändert.";
    }
}

// 4. Erst JETZT HTML ausgeben. $_COOKIE wurde NICHT manuell verändert.
// In normalen Formularen folgt nach setcookie(): header(..., true, 303); exit;
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP · Cookie-Lupe</title>
    <style>body { font-family: Arial, sans-serif; max-width: 850px; margin: 28px auto; padding: 0 18px; line-height: 1.55; }
input, select, button { font: inherit; padding: 6px 9px; }
button { cursor: pointer; margin: 4px 4px 4px 0; }
fieldset { margin: 18px 0; }
code { overflow-wrap: anywhere; }
a { text-underline-offset: 3px; }
.fehler { border-left: 4px solid #9b2626; padding-left: 12px; }
.info { background: #f2f5f7; padding: 12px; }
body.dunkel { background: #202936; color: #f5f7fa; }
body.dunkel a { color: #b8d8ff; } body.dunkel .info { background: #344155; }
body.gross { font-size: 21px; }
</style>
</head>
<body>
    <h1>Cookie-Lupe: Jetzt ist nicht der nächste Request</h1>
    <p>Diese kleine Demo setzt, ändert und löscht genau ein Sprach-Cookie.</p>
    <p class="info"><strong>In dieser Anfrage angekommen:</strong><br><?= html($eingang) ?></p>
    <p role="status"><strong>Aktion für die Antwort:</strong><br><?= html($meldung) ?></p>
    <form action="<?= html($seite) ?>" method="post" novalidate>
        <label for="sprache">Neue Sprache</label>
        <select id="sprache" name="sprache">
            <option value="de" <?= $sprache === "de" ? "selected" : "" ?>>Deutsch</option>
            <option value="en" <?= $sprache === "en" ? "selected" : "" ?>>Englisch</option>
        </select>
        <button type="submit" name="aktion" value="speichern">Cookie setzen / ändern</button>
        <button type="submit" name="aktion" value="loeschen">Cookie löschen</button>
    </form>
    <p><a href="<?= html($seite) ?>">Neuen GET-Aufruf ausführen</a></p>
    <p><strong>Beobachte:</strong> Nach dem Setzen oder Löschen bleibt die Anzeige der eingegangenen
       Cookie-Daten noch unverändert. Erst der Link oben löst einen neuen Request aus.</p>
    <p>Für diesen Versuch bitte den Link verwenden, nicht F5: Beim Neuladen einer POST-Antwort
       könnte der Browser dieselbe Aktion noch einmal absenden.</p>
    <details><summary>So führst du die Demo vor</summary>
        <ol>
            <li>Cookie löschen, danach „Neuen GET-Aufruf“ anklicken: kein gültiges Cookie.</li>
            <li>Englisch setzen: In der Antwort wird en gesendet; eingegangen war noch kein Cookie.</li>
            <li>Den GET-Link anklicken: Jetzt kommt en an.</li>
            <li>Deutsch setzen: eingegangen war en; erst nach dem GET-Link steht de da.</li>
            <li>Löschen: zunächst noch de im aktuellen Request; nach dem GET-Link kein Cookie.</li>
        </ol>
    </details>
    <p><small>Ein gesendeter Set-Cookie-Header beweist noch keine Speicherung im Browser.
    Cookies können blockiert, verändert oder gelöscht werden. Nutze nur harmlose Übungswerte.</small></p>
    <p><small>Technik: <a href="https://www.php.net/manual/de/function.setcookie.php">PHP: setcookie</a>, <a href="https://www.php.net/manual/de/reserved.variables.cookies.php">PHP: $_COOKIE</a> und <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Guides/Cookies">MDN: HTTP-Cookies</a>.
    Diese Datei ist ein neu erstelltes Lehrbeispiel.</small></p>
</body>
</html>
