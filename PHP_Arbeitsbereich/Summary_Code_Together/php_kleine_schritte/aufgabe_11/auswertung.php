<?php
// Aufgabe 11: Mit switch eine Begrüßung wählen
// $ziel ist als Text vorbereitet.
$ausgabe = "";

// VORBEREITET: Eingabewerte für diese einzelne Aufgabe.
$ziel = $_POST["ziel"] ?? "";
if (!is_string($ziel)) {
    $ziel = "";
}

// ===== AB HIER ARBEITEN =====
// TODO: Bearbeite hier die Aufgabe.
// ===== BIS HIER ARBEITEN =====
?>
<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Aufgabe 11 · Auswertung · PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body><main class="wrap">
  <div class="topline"><span class="brand">PHP · PHP-BASIS</span><span class="badge">Aufgabe 11</span></div>
  <header class="hero"><h1>Die PHP-Auswertung</h1><p>Mit switch eine Begrüßung wählen</p></header>
  <section class="card" aria-labelledby="ergebnis">
    <h2 id="ergebnis">Dein Ergebnis</h2>
    <!-- Fertige Textausgabe: nicht ändern. Kein HTML in $ausgabe schreiben. -->
    <pre class="output"><?= htmlspecialchars($ausgabe, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") ?></pre>
    <a class="button" href="formular.html">Zurück zum Formular</a>
    <p class="hint">Zurück öffnet die festen Beispielwerte erneut. Es wird nichts gespeichert.</p>
  </section>
  <footer><a href="../index.html">Zur Aufgabenübersicht</a> · Arbeitsdatei</footer>
</main></body>
</html>
