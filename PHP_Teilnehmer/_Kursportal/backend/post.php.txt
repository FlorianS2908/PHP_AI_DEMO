<?php
declare(strict_types=1);
function output_text(string $text): string {
    return htmlspecialchars($text, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
$goal = ''; $message = 'Bitte ein Reiseziel eingeben.';
if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST') {
    $raw = $_POST['ziel'] ?? null;
    if (!is_string($raw)) {
        $message = 'Bitte genau einen Zieltext übermitteln.';
    } else {
        $goal = trim($raw);
        if ($goal === '') { $message = 'Das Reiseziel fehlt.'; }
        elseif (strlen($goal) > 120) { $message = 'Der Zieltext ist zu lang.'; }
        else { $message = 'Eingabe erhalten: ' . $goal . '. Es wurde nichts gebucht.'; }
    }
}
?>
<!doctype html><html lang="de"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>PHP · PHP-Demo</title><link rel="stylesheet" href="../assets/demo.css"></head><body><p class="notice">Lokale Unterrichtsanwendung · ausschließlich fiktive Angaben · keine Buchung.</p>
<h1>POST-Daten verarbeiten</h1><form method="post">
<label for="ziel">Reiseziel</label><input id="ziel" name="ziel" value="<?= output_text($goal) ?>" maxlength="120" required>
<button type="submit">Eingabe anzeigen</button></form>
<p role="status"><?= output_text($message) ?></p></body></html>
