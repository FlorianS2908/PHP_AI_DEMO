<?php
// Vorgegeben: gleicher Session-Name und Cookie-Pfad auf allen Seiten dieser Übung.
// Diese Datei STARTET noch keine Session. session_start() bleibt in jeder PHP-Seite sichtbar.
session_name("PHPSLUPE");
ini_set("session.use_cookies", "1");
ini_set("session.use_only_cookies", "1");
ini_set("session.use_strict_mode", "1");
ini_set("session.use_trans_sid", "0");
$cookiePfad = rtrim(dirname($_SERVER["SCRIPT_NAME"]), "/\\") . "/";
session_set_cookie_params([
    "lifetime" => 0, // Browser-Sitzung; KEIN fester serverseitiger Timeout.
    "path" => $cookiePfad,
    "secure" => false, // Nur lokale HTTP-Übung. Für HTTPS auf true setzen.
    "httponly" => true,
    "samesite" => "Lax"
]);
header("Cache-Control: no-store");

function html(string $text): string
{
    return htmlspecialchars($text, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}

if (!session_start()) {
    http_response_code(500);
    exit("Die Session konnte nicht gestartet werden. Prüfe die PHP-Konfiguration.");
}
// Nur Existenz anzeigen, niemals eine echte Session-ID ins HTML kopieren.
$cookieAngekommen = isset($_COOKIE[session_name()]) && is_string($_COOKIE[session_name()]);
$vorher = $_SESSION;
$fehler = [];
$hinweis = "GET-Aufruf: Die Session wurde nur gelesen.";
$beendet = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $aktion = "";
    if (isset($_POST["aktion"]) && is_string($_POST["aktion"])) {
        $aktion = $_POST["aktion"];
    }
    if ($aktion === "speichern") {
        $alias = "";
        if (isset($_POST["alias"]) && is_string($_POST["alias"])) {
            $alias = trim($_POST["alias"]);
        }
        if ($alias === "") {
            $fehler[] = "Bitte einen Alias eingeben. Die Session-Daten bleiben unverändert.";
        } else {
            // Anders als bei setcookie(): $_SESSION ist sofort in diesem Aufruf geändert.
            $_SESSION["alias"] = $alias;
            $hinweis = "Alias zugewiesen: Der neue Wert ist in diesem PHP-Aufruf schon lesbar.";
        }
    } elseif ($aktion === "zaehlen") {
        if (!isset($_SESSION["klicks"]) || !is_int($_SESSION["klicks"])) {
            $_SESSION["klicks"] = 0;
        }
        $_SESSION["klicks"]++;
        $hinweis = "Der serverseitige Zähler wurde um eins erhöht.";
    } elseif ($aktion === "entfernen") {
        unset($_SESSION["alias"]);
        $hinweis = "Nur der Alias wurde entfernt. Ein vorhandener Zähler bleibt erhalten.";
    } elseif ($aktion === "leeren") {
        $_SESSION = [];
        $hinweis = "Alle Werte sind leer. Die Session und ihr ID-Cookie bestehen weiterhin.";
    } elseif ($aktion === "beenden") {
        // Lokaler, sequenzieller Lehrablauf ohne parallele Hintergrundanfragen.
        $_SESSION = [];
        $params = session_get_cookie_params();
        setcookie(session_name(), "", [
            "expires" => time() - 3600,
            "path" => $params["path"],
            "domain" => $params["domain"],
            "secure" => $params["secure"],
            "httponly" => $params["httponly"],
            "samesite" => $params["samesite"]
        ]);
        if (!session_destroy()) {
            http_response_code(500);
            exit("Die Session konnte nicht vollständig beendet werden.");
        }
$beendet = true;
        $hinweis = "Daten entfernt und Cookie-Löschung gesendet. Erst der nächste GET startet wieder eine neue Session.";
    } else {
        $fehler[] = "Bitte eine der vorgesehenen Aktionen verwenden.";
    }
}

$nachher = $_SESSION;
$form_alias = "";
if (isset($_SESSION["alias"]) && is_string($_SESSION["alias"])) {
    $form_alias = $_SESSION["alias"];
}
if (!empty($fehler)) { $form_alias = ""; }

// Zusatzbaustein: explizit speichern und die Session freigeben.
// Ohne diesen Aufruf geschieht das regulär am Skriptende. Kein Logout!
if (!$beendet) {
    session_write_close();
}
$self = basename($_SERVER["SCRIPT_NAME"]);
?>
<!doctype html>
<html lang="de">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sessions sichtbar machen</title><style>body { font-family: Arial, sans-serif; max-width: 880px; margin: 28px auto; padding: 0 18px; line-height: 1.55; }
input, select, button { font: inherit; padding: 6px 9px; } button { cursor: pointer; margin: 4px 6px 4px 0; }
label { font-weight: bold; } code { overflow-wrap: anywhere; } pre { padding: 14px; background: #f2f5f7; overflow: auto; }
a { text-underline-offset: 3px; } a:focus-visible, button:focus-visible, input:focus-visible, select:focus-visible { outline: 3px solid #b46c00; outline-offset: 3px; }
.fehler { border-left: 4px solid #9b2626; padding-left: 12px; } .info { background: #f2f5f7; padding: 12px; }
table { border-collapse: collapse; margin: 14px 0; } th, td { border: 1px solid #ccd5dd; padding: 8px 12px; text-align: left; }
small { color: #45576b; } .panels { display: grid; grid-template-columns: repeat(2,minmax(0,1fr)); gap: 14px; }
@media(max-width:650px) { .panels { display: block; } h1 { font-size: 26px; } }
</style></head>
<body>
<h1>Sessions sichtbar machen</h1>
<p>Eine Datei · aktueller Request und gespeicherter Zustand</p>

<?php foreach ($fehler as $meldung) : ?>
    <p class="fehler" role="alert"><strong>Fehler:</strong> <?= html($meldung) ?></p>
<?php endforeach; ?>
<p class="info"><strong>Session-Lupe:</strong> Der Browser merkt sich die Session-ID. Die folgenden Nutzdaten verwaltet PHP auf dem Server.</p>
<p><?= html($hinweis) ?></p>
<div class="panels"><section><h2>Nach session_start()</h2><pre><?= html(print_r($vorher, true)) ?></pre></section>
<section><h2>Nach der Aktion</h2><pre><?= html(print_r($nachher, true)) ?></pre></section></div>
<p>ID-Cookie mit <em>dieser Anfrage</em> angekommen: <strong><?= $cookieAngekommen ? "Ja" : "Nein" ?></strong>.
Cookie-Name: <code><?= html(session_name()) ?></code>. Die echte ID wird nicht ausgegeben.</p>
<form method="post" novalidate autocomplete="off">
<p><label for="alias">Erfundener Alias</label><br>
<input type="text" id="alias" name="alias" value="<?= html($form_alias) ?>"></p>
<button name="aktion" value="speichern">Alias speichern / ändern</button>
<button name="aktion" value="zaehlen">Zähler +1</button>
<button name="aktion" value="entfernen">Nur Alias entfernen</button>
<button name="aktion" value="leeren">Alle Werte leeren</button>
<button name="aktion" value="beenden">Session vollständig beenden</button>
</form>
<p><a href="<?= html($self) ?>"><strong>Neuen GET-Aufruf auslösen</strong></a></p>
<p><strong>Hier absichtlich kein Redirect:</strong> Nach POST den GET-Link benutzen. F5 könnte den POST erneut senden. Die Formular-Demo und alle Lösungen verwenden stattdessen 303-Rückleitungen.</p>
<details><summary>Vorführung in fünf Schritten</summary><ol>
<li>Alias speichern: Die rechte Ansicht enthält ihn sofort.</li>
<li>GET-Link anklicken: Derselbe Wert steht jetzt bereits links.</li>
<li>Zähler erhöhen und nur Alias entfernen: Zähler bleibt.</li>
<li>Alle Werte leeren: Cookie bleibt, Nutzdaten sind leer.</li>
<li>Session beenden: Cookie in den Browserwerkzeugen prüfen; erst der GET-Link startet neu.</li>
</ol><p>Ein weiterer Tab desselben Browserprofils teilt diesen Cookie-Kontext. Zum Vergleich ein getrenntes Profil oder einen anderen Browser verwenden.</p></details>

<p><small>Lokale Session-Übung: nur erfundene Daten, keine Datenbank und keine echte Anmeldung.</small></p>
</body></html>
