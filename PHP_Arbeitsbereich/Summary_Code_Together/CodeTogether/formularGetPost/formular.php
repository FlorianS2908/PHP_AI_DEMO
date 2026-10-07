<?php
declare(strict_types=1);
require_once __DIR__ . '/funktionen.php';

// Query-Werte bleiben nicht vertrauenswürdig, auch nach unserer Weiterleitung.
$fehler = is_string($_GET['fehler'] ?? null) ? $_GET['fehler'] : '';
$name = is_string($_GET['name'] ?? null) ? $_GET['name'] : '';
$alter = is_string($_GET['alter'] ?? null) ? $_GET['alter'] : '';
?>
<!doctype html>
<html lang="de">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>GET und POST – Formulardaten prüfen</title></head>
<body style="font-family:Arial,sans-serif;max-width:42rem;margin:2rem auto;padding:1rem">
<h1>GET und POST vergleichen</h1>
<p>Verwende fiktive Daten. Beide Methoden werden auf dem Server nach denselben Regeln geprüft.
Bei Fehlern folgt ein GET-Aufruf des Formulars mit den bisherigen Angaben in der URL.</p>
<?php if ($fehler !== ''): ?><p role="alert"><?= html($fehler) ?></p><?php endif; ?>
<form action="auswerten.php" method="post" style="display:grid;gap:1rem" novalidate>
    <label for="name">Name (Pflichtfeld)</label>
    <input type="text" id="name" name="name" required value="<?= html($name) ?>">
    <label for="alter">Alter (ganze Zahl von 0 bis 120)</label>
    <input type="number" id="alter" name="alter" required min="0" max="120" step="1" value="<?= html($alter) ?>">
    <button type="submit" formmethod="get">Mit GET senden</button>
    <button type="submit" formmethod="post">Mit POST senden</button>
</form>
<p><code>novalidate</code> schaltet die Browserprüfung für diese Demo aus, damit sich die Serverprüfung testen lässt.
POST verschlüsselt die Daten nicht; dafür ist HTTPS zuständig.</p>
</body></html>
