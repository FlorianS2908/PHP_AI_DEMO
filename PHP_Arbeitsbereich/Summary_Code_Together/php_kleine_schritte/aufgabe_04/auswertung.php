<?php
// Aufgabe 04: Fehlend, leer oder ausgefüllt?
// Ein kleiner Typcheck ist fertig. Die Prüfung auf fehlend und leer ergänzt du.
$ausgabe = "";

// VORBEREITET: Eingabewerte für diese einzelne Aufgabe.

// ===== AB HIER ARBEITEN =====
if (isset($_GET["vorname"]) && !is_string($_GET["vorname"])) {
    $ausgabe = "Ungültiger Vorname.";
} else {
    // TODO: Hier die drei Situationen unterscheiden.
}
// ===== BIS HIER ARBEITEN =====
?>
<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Aufgabe 04 · Auswertung · PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body><main class="wrap">
  <div class="topline"><span class="brand">PHP · PHP-BASIS</span><span class="badge">Aufgabe 04</span></div>
  <header class="hero"><h1>Die PHP-Auswertung</h1><p>Fehlend, leer oder ausgefüllt?</p></header>
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
