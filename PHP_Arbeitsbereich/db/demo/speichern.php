<?php
declare(strict_types=1);
require_once __DIR__ . "/db.php";
require_once __DIR__ . "/function.php";
starteSession();

// Schreiben nur per POST. Ein direkter GET-Aufruf legt keine Person an.
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php", true, 303);
    exit;
}

// Jeden Formulareintrag prüfen, bevor sein Wert verwendet wird.
$fehler = [];
$werte = ["vorname" => "", "nachname" => ""];
$vorname = "";
$nachname = "";

if (!isset($_POST["vorname"]) || !is_string($_POST["vorname"])) {
    $fehler["vorname"] = "Bitte übermittle einen Vornamen als Text.";
} else {
    $vorname = trim($_POST["vorname"]);
}

if (!isset($_POST["nachname"]) || !is_string($_POST["nachname"])) {
    $fehler["nachname"] = "Bitte übermittle einen Nachnamen als Text.";
} else {
    $nachname = trim($_POST["nachname"]);
}

// Beide Felder vollständig prüfen. Nur gültige Werte werden zurückgegeben.
if (!isset($fehler["vorname"])) {
    if ($vorname === "") {
        $fehler["vorname"] = "Bitte gib einen Vornamen ein.";
    } elseif (!mb_check_encoding($vorname, "UTF-8") || mb_strlen($vorname, "UTF-8") > 50) {
        $fehler["vorname"] = "Der Vorname muss gültiger Text mit höchstens 50 Zeichen sein.";
    } else {
        $werte["vorname"] = $vorname;
    }
}

if (!isset($fehler["nachname"])) {
    if ($nachname === "") {
        $fehler["nachname"] = "Bitte gib einen Nachnamen ein.";
    } elseif (!mb_check_encoding($nachname, "UTF-8") || mb_strlen($nachname, "UTF-8") > 50) {
        $fehler["nachname"] = "Der Nachname muss gültiger Text mit höchstens 50 Zeichen sein.";
    } else {
        $werte["nachname"] = $nachname;
    }
}

// Vorgegebener Rahmen: fremde/veraltete Formulare nicht akzeptieren.
if (!tokenIstGueltig()) {
    $fehler["formular"] = "Das Formular ist abgelaufen oder ungültig. Bitte prüfe die Angaben und sende erneut.";
}

if (!empty($fehler)) {
    $_SESSION["formular"] = ["fehler" => $fehler, "werte" => $werte];
    header("Location: index.php", true, 303);
    exit;
}

// Erst nach allen Prüfungen darf der Schreibzugriff stattfinden.
try {
    $pdo = verbindeDatenbank();
    // Platzhalter statt zusammengesetzter SQL-Zeichenkette.
    $anweisung = $pdo->prepare(
        "INSERT INTO personen (vorname, nachname) VALUES (:vorname, :nachname)"
    );
    $anweisung->execute([
        "vorname" => $werte["vorname"],
        "nachname" => $werte["nachname"]
    ]);
} catch (PDOException $e) {
    // Technische Details gehören ins Serverprotokoll, nicht in die Webseite.
    error_log("PHP Person speichern: " . $e->getMessage());
    $_SESSION["formular"] = [
        "fehler" => ["Speichern nicht möglich. Prüfe den Datenbankdienst und config.php. Die gültigen Eingaben bleiben erhalten."],
        "werte" => $werte
    ];
    header("Location: index.php", true, 303);
    exit;
}

// Das INSERT ist fertig. Der Browser soll jetzt eine neue GET-Anfrage senden.
$_SESSION["erfolg"] = "Die Person wurde gespeichert.";
header("Location: index.php", true, 303);
exit;
