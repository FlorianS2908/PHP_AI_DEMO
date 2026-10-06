<?php
// PHP: neue PHP-Demo zu den OOP-Grundbegriffen. Kein Formular, keine Speicherung.
// 1. Bauplan: Attribut und Methoden gehören zusammen.
class Tasse
{
    public $farbe = "";

    // 2. PHP ruft den Konstruktor beim Erzeugen automatisch auf.
    public function __construct($farbe)
    {
        $this->farbe = $farbe;
    }

    public function getText()
    {
        return "Tasse: " . $this->farbe;
    }

    public function setFarbe($farbe)
    {
        // Hier nur feste Demonstrationswerte, keine ungeprüften Formulardaten.
        $this->farbe = $farbe;
        return $this->farbe;
    }
}

// 3. Zwei new-Aufrufe erzeugen zwei getrennte Objekte.
$tasse1 = new Tasse("rot");
$tasse2 = new Tasse("blau");
$vorher1 = $tasse1->getText();
$vorher2 = $tasse2->getText();

// 4. $this meint beim Aufruf von $tasse1 nur diese erste Tasse.
$tasse1->setFarbe("gruen");
$nachher1 = $tasse1->getText();
$nachher2 = $tasse2->getText();

// 5. Erst hier werden die Rückgabewerte als HTML ausgegeben.
function html($text)
{
    return htmlspecialchars((string) $text, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
?>
<!doctype html><html lang="de"><head><meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1"><title>PHP · OOP-Lupe</title>
<style>
:root{--ink:#153249;--muted:#526577;--accent:#007e85;--line:#d6e1e8;--soft:#edf6f6;--bg:#f5f7fa}
*{box-sizing:border-box}body{margin:0;background:var(--bg);color:var(--ink);font:17px/1.55 system-ui,-apple-system,"Segoe UI",sans-serif}main{max-width:1000px;margin:auto;padding:32px 24px 64px}h1{font-size:clamp(30px,5vw,46px);line-height:1.12;letter-spacing:-.035em;margin:12px 0 20px}h2{font-size:25px;line-height:1.25;margin:0 0 16px}h3{font-size:19px;margin:0 0 10px}p{margin:10px 0 16px}a{color:#006f79;text-underline-offset:3px}.eyebrow{font-size:12px;font-weight:750;letter-spacing:.09em;text-transform:uppercase;color:var(--accent)}.lead{font-size:20px;color:var(--muted);max-width:820px}.muted{color:var(--muted)}.small{font-size:14px}.card,section{background:white;border:1px solid var(--line);padding:25px;border-radius:8px;margin:20px 0}.grid{display:grid;grid-template-columns:1fr 1fr;gap:18px}.grid>.card{margin:0}code,pre{font-family:Consolas,"DejaVu Sans Mono",monospace}code{font-size:.9em;overflow-wrap:anywhere}pre{background:#152b3c;color:#f3f7fa;border-radius:6px;overflow:auto;padding:18px;font-size:14px;line-height:1.55}pre code{font-size:inherit;white-space:pre;overflow-wrap:normal}.note{border-left:4px solid var(--accent);background:var(--soft);padding:13px 17px;margin:17px 0}.error{border-left-color:#a92727;background:#fff0ee}.tablewrap{overflow:auto}table{border-collapse:collapse;width:100%;font-size:15px}th,td{padding:10px;text-align:left;vertical-align:top;border-bottom:1px solid var(--line)}th{background:#edf3f7}label{display:block;font-weight:650;margin:16px 0 6px}input{max-width:100%;width:320px;padding:9px;border:1px solid #8a9ead;border-radius:4px;font:inherit}button,.button{display:inline-block;background:var(--ink);color:white;border:0;border-radius:4px;padding:10px 16px;margin:14px 8px 0 0;font:inherit;font-size:15px;text-decoration:none;cursor:pointer}button:disabled{opacity:.4;cursor:default}button:focus-visible,a:focus-visible,input:focus-visible,summary:focus-visible{outline:3px solid #c57700;outline-offset:3px}.top{background:white;border-bottom:1px solid var(--line)}.top>div{max-width:1000px;margin:auto;padding:14px 24px;display:flex;flex-wrap:wrap;gap:12px 24px;align-items:center}.top nav{display:flex;flex-wrap:wrap;gap:12px;font-size:14px}.top strong{margin-right:auto}details{padding:12px 0;border-bottom:1px solid var(--line)}summary{cursor:pointer;font-weight:650}footer{margin-top:28px;font-size:13px;color:var(--muted)}.output{white-space:pre-wrap;background:#edf6f6;color:var(--ink)}.step{font-weight:700;color:var(--accent);font-size:13px}.skip{position:absolute;left:-9999px}.skip:focus{left:12px;top:12px;background:white;padding:12px}.tag{display:inline-block;border:1px solid var(--line);padding:3px 9px;border-radius:4px;font-size:13px;margin:4px 5px 4px 0}.actions{display:flex;flex-wrap:wrap;gap:8px}ul,ol{padding-left:23px}li{margin-bottom:5px}
@media(max-width:650px){main{padding:24px 16px 45px}.grid{grid-template-columns:1fr}.card,section{padding:19px}pre{font-size:12px;padding:13px}.lead{font-size:18px}}
@media print{body{background:white;font-size:11pt}.top,.actions,.no-print{display:none}main{padding:0;max-width:none}section,.card{break-inside:avoid;border:0;padding:12px 0}pre{background:#f1f4f7;color:black;font-size:9pt;white-space:pre-wrap}.grid{display:block}h1{font-size:27pt}}
</style></head><body><main>
<div class="eyebrow">PHP / PHP · Kommentierte Demo</div><h1>Eine Klasse. Zwei Objekte.</h1>
<p class="lead">Zwei Tassen entstehen aus demselben Bauplan. Nur die erste wird verändert.</p>
<section><h2>Vorher und nachher</h2><table><thead><tr><th>Objekt</th><th>Vorher</th><th>Nach setFarbe()</th></tr></thead><tbody>
<tr><th scope="row">$tasse1</th><td><?= html($vorher1) ?></td><td><?= html($nachher1) ?></td></tr>
<tr><th scope="row">$tasse2</th><td><?= html($vorher2) ?></td><td><?= html($nachher2) ?></td></tr>
</tbody></table></section>
<section><h2>Die entscheidenden Aufrufe</h2><pre><code>$tasse1 = new Tasse("rot");
$tasse2 = new Tasse("blau");
$tasse1-&gt;setFarbe("gruen");
echo $tasse1-&gt;getText();</code></pre>
<p>Öffne die PHP-Datei in VS Code. Lies erst die Klasse und danach die Aufrufe unterhalb der Klasse.</p></section>
<p class="note">Die öffentliche Eigenschaft vereinfacht den Einstieg. Ab Aufgabe 7 kapselst du Attribute mit private und greifst über Methoden darauf zu.</p>
<p>Ändere nur einen Startwert im Code und lade neu. Ohne Session oder Datenbank beginnt jeder Aufruf wieder am Anfang dieses Skripts.</p>
<p class="small muted">Neu erstellte PHP-Übertragung der Begriffe Klasse, Objekt, Attribut, Methode und Konstruktor. Grundlagen: PHP-BigPicture und vorhandene Java-Grundlagen-Java-OO-Unterlage; PHP-Syntax: offizielles PHP-Handbuch.</p>
</main></body></html>
