<?php
// Aufgabe 10: Mit if / elseif einordnen
// $personen ist bereits als ganze Zahl vorbereitet; 0 bedeutet fehlend oder ungültig.
$ausgabe = "";

// VORBEREITET: Eingabewerte für diese einzelne Aufgabe.
$personen = $_GET["personen"] ?? "";
// Vorbereitet: nur die vier Werte aus dem Dropdown erlauben.
if (in_array($personen, ["1", "2", "3", "4"], true)) {
    $personen = (int) $personen;
} else {
    $personen = 0;
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
  <title>Aufgabe 10 · Auswertung · PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body><main class="wrap">
  <div class="topline"><span class="brand">PHP · PHP-BASIS</span><span class="badge">Aufgabe 10</span></div>
  <header class="hero"><h1>Die PHP-Auswertung</h1><p>Mit if / elseif einordnen</p></header>
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
