<?php
declare(strict_types=1);

function html(string $text): string
{
    return htmlspecialchars($text, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}

// Vorgegebener Rahmen: Sessions kennt ihr bereits.
// Die Personendaten liegen in der DB, nicht dauerhaft in dieser Session.
function starteSession(): void
{
    $pfad = rtrim(str_replace("\\", "/", dirname($_SERVER["SCRIPT_NAME"])), "/") . "/";
    session_name("PHPPersonen");
    session_start([
        "use_strict_mode" => 1,
        "use_only_cookies" => 1,
        "cookie_path" => $pfad,
        "cookie_httponly" => true,
        "cookie_samesite" => "Lax",
        "cookie_secure" => isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] !== "off"
    ]);
}

// Vorgegebener Zusatzschutz: Ein versteckter Token gehört zu diesem Formular.
// Er ist kein Personendatum und kein neues Lernziel dieser Übung.
function formularToken(): string
{
    if (!isset($_SESSION["csrf"]) || !is_string($_SESSION["csrf"])) {
        $_SESSION["csrf"] = bin2hex(random_bytes(32));
    }
    return $_SESSION["csrf"];
}

function tokenIstGueltig(): bool
{
    return isset($_POST["csrf"], $_SESSION["csrf"])
        && is_string($_POST["csrf"])
        && is_string($_SESSION["csrf"])
        && hash_equals($_SESSION["csrf"], $_POST["csrf"]);
}
