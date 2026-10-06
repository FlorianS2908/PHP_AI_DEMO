<?php
require __DIR__ . "/function.php";

$fehler = "";
if (isset($_GET["fehler"]) && is_string($_GET["fehler"])) {
    $fehler = $_GET["fehler"];
}

$hinweise = [];
$cookieAngekommen = false;

$sprache = "de";
if (isset($_COOKIE["PHP_demo_sprache"])) {
    if (is_string($_COOKIE["PHP_demo_sprache"])) {
        $kandidat = $_COOKIE["PHP_demo_sprache"];
        if (in_array($kandidat, ["de", "en"], true)) {
            $sprache = $kandidat;
            $cookieAngekommen = true;
        } else {
            $hinweise[] = "Ungültiges Cookie für sprache: Standard wird verwendet.";
        }
    } else {
        $hinweise[] = "Cookie für sprache ist kein Textwert: Standard wird verwendet.";
    }
}

$form_sprache = $sprache;

// Fehlerformular: KEINE älteren Cookie-Werte in ungültige Felder einsetzen.
// Nur ausdrücklich zurückgegebene, erneut geprüfte Werte bleiben stehen.
if ($fehler !== "") {
    $form_sprache = "";
    if (isset($_GET["sprache"]) && is_string($_GET["sprache"])) {
        $kandidat = $_GET["sprache"];
        if (in_array($kandidat, ["de", "en"], true)) {
            $form_sprache = $kandidat;
        }
    }
}
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo: Sprache merken mit Rückleitung</title>
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
    <h1>Demo: Sprache merken mit Rückleitung</h1>
    <p>POST prüfen → Set-Cookie + 303 → neuer GET mit Cookie</p>
    <?php if ($fehler !== "") : ?>
        <p class="fehler" role="alert"><strong>Fehler:</strong> <?= html($fehler) ?></p>
    <?php endif; ?>
    <?php foreach ($hinweise as $hinweis) : ?>
        <p role="status"><?= html($hinweis) ?></p>
    <?php endforeach; ?>
    <p class="info">Gültiges Cookie im aktuellen Request:
        <strong><?= $cookieAngekommen ? "Ja" : "Nein – Standard wird verwendet" ?></strong>
    </p>
    <p>Sprache aus Cookie oder Standard: <strong><?= html($sprache) ?></strong></p>
    <p><strong>Die Dateien:</strong> index.php liest und zeigt; auswertung.php prüft,
       setzt oder löscht das Cookie und leitet zurück; function.php enthält nur Hilfscode.</p>
    <p><strong>Zum Vorführen:</strong> F12 → Netzwerk → Protokoll beibehalten.
       Bei auswertung.php die Antwort-Header Set-Cookie und Location ansehen;
       beim folgenden index.php-Request den Cookie-Header.</p>
    <form action="auswertung.php" method="post" novalidate autocomplete="off">
        <p>
            <label for="sprache">Sprache</label><br>
            <select id="sprache" name="sprache">
                <option value="">Bitte wählen</option>
                <option value="de" <?= $form_sprache === "de" ? "selected" : "" ?>>Deutsch</option>
                <option value="en" <?= $form_sprache === "en" ? "selected" : "" ?>>Englisch</option>
            </select>
        </p>
        <button type="submit" name="aktion" value="speichern">Speichern</button>
        <button type="submit" name="aktion" value="loeschen">Cookie löschen</button>
    </form>
    <p><a href="index.php">Frisch öffnen – ohne URL-Parameter</a></p>
    <p><a href="../index.html">Zur Einführung</a> · <a href="../demo_kurz.php">Zur Cookie-Lupe ohne Redirect</a></p>
    <p><small>Lokale Übung ohne Login, Sessions oder Datenbank. Cookies enthalten nur Einstellungen.</small></p>
</body>
</html>
