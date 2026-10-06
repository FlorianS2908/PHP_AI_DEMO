window.FACHINFO_DATEN = {
  "info-tag-01-html": {
    "detail": "\n    <h3>&lt;html&gt;</h3>\n    <h4>Bedeutung</h4><p>Das html-Element ist das Wurzelelement einer HTML-Seite.</p>\n    <h4>Typische Verwendung</h4><p>Es umschließt head und body und legt über lang die Sprache fest.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;html lang=&quot;de&quot;&gt;\n  &lt;head&gt;...&lt;/head&gt;\n  &lt;body&gt;...&lt;/body&gt;\n&lt;/html&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><p class=\"selector-note\">Das html-Element wird nur selten direkt gestaltet. Sinnvoller sind globale Regeln wie box-sizing oder sichtbare body- und Layout-Elemente.</p>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-1-html\" id=\"demo-1-html-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-1-html\" id=\"demo-1-html-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-1-html\" id=\"demo-1-html-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-1-html\" id=\"demo-1-html-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-1-html\" id=\"demo-1-html-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-1-html-v1\">Standard</label><label class=\"tab-2\" for=\"demo-1-html-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-1-html-v3\">Layout</label><label class=\"tab-4\" for=\"demo-1-html-v4\">Karte</label><label class=\"tab-5\" for=\"demo-1-html-v5\">Kontrast</label></div>\n    <div class=\"preview\"><article class=\"demo-target demo-card\"><strong>&lt;html&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>html {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.html-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.html-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>html {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>html {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Das lang-Attribut hilft Screenreadern, Suchmaschinen und Übersetzungsfunktionen.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-01-html\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;html&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>Das lang-Attribut ist ein guter Einstieg in Barrierefreiheit.</li><li>html selbst ist nicht sichtbarer Seiteninhalt.</li><li>Globale CSS-Regeln sollten bewusst von sichtbarer Gestaltung getrennt werden.</li><li>Der Unterschied zwischen Dokumentwurzel und body wird hier klar.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;html&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/html\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;html&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 1,
      "tag": "html",
      "title": "Dokumentsprache und Wurzelstruktur untersuchen",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 1 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<article class=\"document-effect\"><h2>Dokumentstruktur</h2><p>Dieses Element ist nicht als gewöhnlicher Seiteninhalt sichtbar. Bearbeiten Sie die Erklärung und vergleichen Sie seine tatsächliche Aufgabe.</p><dl><dt>Element</dt><dd>&lt;html&gt;</dd><dt>Wirkung</dt><dd>Dokumentsprache und Wurzelstruktur untersuchen</dd></dl></article>",
      "css": "html {\n  color: #12324a;\n  margin: 0;\n}",
      "controls": [
        {
          "kind": "select",
          "key": "view",
          "label": "Darstellung",
          "value": "structure",
          "options": [
            [
              "structure",
              "Struktur"
            ],
            [
              "effect",
              "Wirkung"
            ]
          ]
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <html>.",
        "Prüfen Sie die Wirkung der für Tag 1 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-01-head": {
    "detail": "\n    <h3>&lt;head&gt;</h3>\n    <h4>Bedeutung</h4><p>Das head-Element enthält Metadaten der Seite.</p>\n    <h4>Typische Verwendung</h4><p>Hier stehen Zeichensatz, Viewport, Titel und bei Bedarf interne Styles.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;head&gt;\n  &lt;meta charset=&quot;utf-8&quot;&gt;\n  &lt;title&gt;Meine Seite&lt;/title&gt;\n&lt;/head&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><p class=\"selector-note\">Für dieses Element gibt es in der Praxis keine sinnvolle direkte CSS-Gestaltung, da es nicht als sichtbarer Seiteninhalt gerendert wird. Gestaltet werden stattdessen sichtbare Elemente im body-Bereich.</p>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-2-head\" id=\"demo-2-head-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-2-head\" id=\"demo-2-head-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-2-head\" id=\"demo-2-head-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-2-head\" id=\"demo-2-head-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-2-head\" id=\"demo-2-head-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-2-head-v1\">Standard</label><label class=\"tab-2\" for=\"demo-2-head-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-2-head-v3\">Layout</label><label class=\"tab-4\" for=\"demo-2-head-v4\">Karte</label><label class=\"tab-5\" for=\"demo-2-head-v5\">Kontrast</label></div>\n    <div class=\"preview\"><article class=\"demo-target demo-card\"><strong>&lt;head&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>head {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.head-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.head-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>head {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>head {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Im head steht normalerweise kein sichtbarer Seiteninhalt.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-01-head\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;head&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>head sammelt technische Informationen, nicht sichtbare Inhalte.</li><li>Häufige Fehler sind sichtbare Texte oder Layout-Elemente im head.</li><li>Der Unterschied zwischen head und header sollte deutlich gemacht werden.</li><li>Metadaten wirken indirekt auf Darstellung, Suche und mobile Anzeige.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;head&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/head\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;head&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 1,
      "tag": "head",
      "title": "Metadaten von sichtbaren Inhalten unterscheiden",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 1 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<article class=\"document-effect\"><h2>Dokumentstruktur</h2><p>Dieses Element ist nicht als gewöhnlicher Seiteninhalt sichtbar. Bearbeiten Sie die Erklärung und vergleichen Sie seine tatsächliche Aufgabe.</p><dl><dt>Element</dt><dd>&lt;head&gt;</dd><dt>Wirkung</dt><dd>Metadaten von sichtbaren Inhalten unterscheiden</dd></dl></article>",
      "css": "head {\n  color: #12324a;\n  margin: 0;\n}",
      "controls": [
        {
          "kind": "select",
          "key": "view",
          "label": "Darstellung",
          "value": "structure",
          "options": [
            [
              "structure",
              "Struktur"
            ],
            [
              "effect",
              "Wirkung"
            ]
          ]
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <head>.",
        "Prüfen Sie die Wirkung der für Tag 1 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-01-title": {
    "detail": "\n    <h3>&lt;title&gt;</h3>\n    <h4>Bedeutung</h4><p>Das title-Element definiert den Titel im Browser-Tab.</p>\n    <h4>Typische Verwendung</h4><p>Es hilft Orientierung, Lesezeichen und Suchmaschinen.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;title&gt;Übersicht wichtiger HTML-Tags&lt;/title&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><p class=\"selector-note\">Für dieses Element gibt es in der Praxis keine sinnvolle direkte CSS-Gestaltung, da es nicht als sichtbarer Seiteninhalt gerendert wird. Gestaltet werden stattdessen sichtbare Elemente im body-Bereich.</p>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-3-title\" id=\"demo-3-title-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-3-title\" id=\"demo-3-title-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-3-title\" id=\"demo-3-title-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-3-title\" id=\"demo-3-title-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-3-title\" id=\"demo-3-title-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-3-title-v1\">Standard</label><label class=\"tab-2\" for=\"demo-3-title-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-3-title-v3\">Layout</label><label class=\"tab-4\" for=\"demo-3-title-v4\">Karte</label><label class=\"tab-5\" for=\"demo-3-title-v5\">Kontrast</label></div>\n    <div class=\"preview\"><h3 class=\"demo-target demo-heading\">HTML und CSS verstehen</h3><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>title {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.title-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.title-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>title {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>title {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Jede Seite sollte einen eindeutigen title besitzen.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-01-title\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;title&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>title erscheint im Browser-Tab und in Lesezeichen.</li><li>Er ist nicht die sichtbare h1 der Seite.</li><li>Ein fehlender oder generischer title erschwert Orientierung.</li><li>Der Unterschied zwischen Dokumenttitel und Seitenüberschrift ist prüfungsrelevant.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;title&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/title\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;title&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 1,
      "tag": "title",
      "title": "Dokumenttitel und sichtbare Überschrift vergleichen",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 1 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<article class=\"document-effect\"><h2>Titel im Browser-Kontext</h2><p>Dieses Element ist nicht als gewöhnlicher Seiteninhalt sichtbar. Bearbeiten Sie die Erklärung und vergleichen Sie seine tatsächliche Aufgabe.</p><dl><dt>Element</dt><dd>&lt;title&gt;</dd><dt>Wirkung</dt><dd>Dokumenttitel und sichtbare Überschrift vergleichen</dd></dl></article>",
      "css": "title {\n  color: #12324a;\n  margin: 0;\n}",
      "controls": [
        {
          "kind": "select",
          "key": "view",
          "label": "Darstellung",
          "value": "structure",
          "options": [
            [
              "structure",
              "Struktur"
            ],
            [
              "effect",
              "Wirkung"
            ]
          ]
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <title>.",
        "Prüfen Sie die Wirkung der für Tag 1 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-01-meta": {
    "detail": "\n    <h3>&lt;meta&gt;</h3>\n    <h4>Bedeutung</h4><p>Das meta-Element beschreibt technische Metadaten.</p>\n    <h4>Typische Verwendung</h4><p>Typisch sind Zeichensatz und Viewport für responsive Seiten.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;meta charset=&quot;utf-8&quot;&gt;\n&lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><p class=\"selector-note\">Meta-Elemente werden nicht sichtbar gerendert. Sie steuern technische Angaben wie Zeichensatz oder Viewport, werden aber nicht direkt gestaltet.</p>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-4-meta\" id=\"demo-4-meta-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-4-meta\" id=\"demo-4-meta-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-4-meta\" id=\"demo-4-meta-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-4-meta\" id=\"demo-4-meta-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-4-meta\" id=\"demo-4-meta-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-4-meta-v1\">Standard</label><label class=\"tab-2\" for=\"demo-4-meta-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-4-meta-v3\">Layout</label><label class=\"tab-4\" for=\"demo-4-meta-v4\">Karte</label><label class=\"tab-5\" for=\"demo-4-meta-v5\">Kontrast</label></div>\n    <div class=\"preview\"><article class=\"demo-target demo-card\"><strong>&lt;meta&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>meta {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.meta-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.meta-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>meta {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>meta {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Der Viewport-Eintrag ist für mobile Darstellung besonders wichtig.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-01-meta\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;meta&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>meta wirkt technisch, nicht visuell.</li><li>charset und viewport sind moderne Basiseinträge.</li><li>Viewport erklärt gut den Zusammenhang zwischen HTML und Responsive Design.</li><li>Meta-Tags gehören in den head.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;meta&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meta\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;meta&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 1,
      "tag": "meta",
      "title": "technische Metadaten korrekt einordnen",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 1 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<article class=\"document-effect\"><h2>Technische Metadaten</h2><p>Dieses Element ist nicht als gewöhnlicher Seiteninhalt sichtbar. Bearbeiten Sie die Erklärung und vergleichen Sie seine tatsächliche Aufgabe.</p><dl><dt>Element</dt><dd>&lt;meta&gt;</dd><dt>Wirkung</dt><dd>technische Metadaten korrekt einordnen</dd></dl></article>",
      "css": "meta {\n  color: #12324a;\n  margin: 0;\n}",
      "controls": [
        {
          "kind": "select",
          "key": "view",
          "label": "Darstellung",
          "value": "structure",
          "options": [
            [
              "structure",
              "Struktur"
            ],
            [
              "effect",
              "Wirkung"
            ]
          ]
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <meta>.",
        "Prüfen Sie die Wirkung der für Tag 1 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-01-link": {
    "detail": "\n    <h3>&lt;link&gt;</h3>\n    <h4>Bedeutung</h4><p>Das link-Element verknüpft Dokumente mit Ressourcen.</p>\n    <h4>Typische Verwendung</h4><p>In Projekten bindet es häufig CSS ein; in dieser Datei bleibt CSS intern.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;link rel=&quot;stylesheet&quot; href=&quot;styles.css&quot;&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><p class=\"selector-note\">Das link-Element selbst wird nicht sichtbar gestaltet. Es verbindet ein Dokument mit Ressourcen; die Gestaltung betrifft die geladenen oder sichtbaren Inhalte.</p>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-5-link\" id=\"demo-5-link-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-5-link\" id=\"demo-5-link-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-5-link\" id=\"demo-5-link-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-5-link\" id=\"demo-5-link-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-5-link\" id=\"demo-5-link-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-5-link-v1\">Standard</label><label class=\"tab-2\" for=\"demo-5-link-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-5-link-v3\">Layout</label><label class=\"tab-4\" for=\"demo-5-link-v4\">Karte</label><label class=\"tab-5\" for=\"demo-5-link-v5\">Kontrast</label></div>\n    <div class=\"preview\"><article class=\"demo-target demo-card\"><strong>&lt;link&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>link {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.link-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.link-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>link {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>link {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Für diese Übersicht wird kein echtes externes Stylesheet eingebunden.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-01-link\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;link&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>link verbindet Ressourcen mit dem Dokument.</li><li>In dieser Datei wird bewusst kein externes Stylesheet verwendet.</li><li>Der Unterschied zwischen a und link ist wichtig: a ist Navigation, link ist Dokumentbeziehung.</li><li>rel und href müssen zusammen verstanden werden.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;link&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/link\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;link&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 1,
      "tag": "link",
      "title": "lokale Ressourcenbeziehungen nachvollziehen",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 1 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<article class=\"document-effect\"><h2>Lokale Ressourcenbeziehung</h2><p>Dieses Element ist nicht als gewöhnlicher Seiteninhalt sichtbar. Bearbeiten Sie die Erklärung und vergleichen Sie seine tatsächliche Aufgabe.</p><dl><dt>Element</dt><dd>&lt;link&gt;</dd><dt>Wirkung</dt><dd>lokale Ressourcenbeziehungen nachvollziehen</dd></dl></article>",
      "css": "link {\n  color: #12324a;\n  margin: 0;\n}",
      "controls": [
        {
          "kind": "select",
          "key": "view",
          "label": "Darstellung",
          "value": "structure",
          "options": [
            [
              "structure",
              "Struktur"
            ],
            [
              "effect",
              "Wirkung"
            ]
          ]
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <link>.",
        "Prüfen Sie die Wirkung der für Tag 1 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-01-body": {
    "detail": "\n    <h3>&lt;body&gt;</h3>\n    <h4>Bedeutung</h4><p>Das body-Element enthält den sichtbaren Seiteninhalt.</p>\n    <h4>Typische Verwendung</h4><p>Alles, was im Browser angezeigt oder bedient wird, liegt im body.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;body&gt;\n  &lt;header&gt;...&lt;/header&gt;\n  &lt;main&gt;...&lt;/main&gt;\n&lt;/body&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>body\nbody &gt; main</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-6-body\" id=\"demo-6-body-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-6-body\" id=\"demo-6-body-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-6-body\" id=\"demo-6-body-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-6-body\" id=\"demo-6-body-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-6-body\" id=\"demo-6-body-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-6-body-v1\">Standard</label><label class=\"tab-2\" for=\"demo-6-body-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-6-body-v3\">Layout</label><label class=\"tab-4\" for=\"demo-6-body-v4\">Karte</label><label class=\"tab-5\" for=\"demo-6-body-v5\">Kontrast</label></div>\n    <div class=\"preview\"><article class=\"demo-target demo-card\"><strong>&lt;body&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>body {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.body-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.body-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>body {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>body {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Globale Grundgestaltung wie Schrift und Hintergrund wird häufig am body gesetzt.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-01-body\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;body&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>&lt;body&gt; sollte immer über Bedeutung und Zweck verstanden werden, nicht nur über die optische Darstellung.</li><li>Typische Fehler entstehen, wenn semantische Elemente durch allgemeine div-Container ersetzt werden.</li><li>Die CSS-Demo eignet sich gut, um Struktur und Gestaltung getrennt zu erklären.</li><li>Barrierefreiheit wird verständlicher, wenn Bedienung per Tastatur und Screenreader-Perspektive mitgedacht wird.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;body&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/body\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;body&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 1,
      "tag": "body",
      "title": "Grundfarben, Schrift und Seitenabstände erproben",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 1 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<article class=\"demo-target demo-card\"><strong>&lt;body&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article>",
      "css": "body {\n  color: #12324a;\n  margin: 0;\n}",
      "controls": [
        {
          "kind": "range",
          "key": "padding",
          "label": "Innenabstand",
          "min": 4,
          "max": 40,
          "value": 16,
          "unit": "px"
        },
        {
          "kind": "color",
          "key": "border-color",
          "label": "Rahmenfarbe",
          "value": "#00abc7"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <body>.",
        "Prüfen Sie die Wirkung der für Tag 1 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-01-header": {
    "detail": "\n    <h3>&lt;header&gt;</h3>\n    <h4>Bedeutung</h4><p>Das header-Element kennzeichnet einen Kopfbereich.</p>\n    <h4>Typische Verwendung</h4><p>Es enthält häufig Logo, Überschrift, Einleitung oder Navigation.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;header class=&quot;site-header&quot;&gt;\n  &lt;h1&gt;Meine Seite&lt;/h1&gt;\n&lt;/header&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>header\n.site-header\nsection &gt; header</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-7-header\" id=\"demo-7-header-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-7-header\" id=\"demo-7-header-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-7-header\" id=\"demo-7-header-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-7-header\" id=\"demo-7-header-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-7-header\" id=\"demo-7-header-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-7-header-v1\">Standard</label><label class=\"tab-2\" for=\"demo-7-header-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-7-header-v3\">Layout</label><label class=\"tab-4\" for=\"demo-7-header-v4\">Karte</label><label class=\"tab-5\" for=\"demo-7-header-v5\">Kontrast</label></div>\n    <div class=\"preview\"><article class=\"demo-target demo-card\"><strong>&lt;header&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>header {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.header-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.header-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>header {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>header {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Ein header kann für die ganze Seite oder für einen Abschnitt stehen.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-01-header\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;header&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>&lt;header&gt; sollte immer über Bedeutung und Zweck verstanden werden, nicht nur über die optische Darstellung.</li><li>Typische Fehler entstehen, wenn semantische Elemente durch allgemeine div-Container ersetzt werden.</li><li>Die CSS-Demo eignet sich gut, um Struktur und Gestaltung getrennt zu erklären.</li><li>Barrierefreiheit wird verständlicher, wenn Bedienung per Tastatur und Screenreader-Perspektive mitgedacht wird.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;header&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/header\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;header&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 1,
      "tag": "header",
      "title": "einen klaren Kopfbereich gestalten",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 1 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<article class=\"demo-target demo-card\"><strong>&lt;header&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article>",
      "css": "header {\n  color: #12324a;\n  margin: 0;\n}",
      "controls": [
        {
          "kind": "range",
          "key": "padding",
          "label": "Innenabstand",
          "min": 4,
          "max": 40,
          "value": 16,
          "unit": "px"
        },
        {
          "kind": "color",
          "key": "border-color",
          "label": "Rahmenfarbe",
          "value": "#00abc7"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <header>.",
        "Prüfen Sie die Wirkung der für Tag 1 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-01-main": {
    "detail": "\n    <h3>&lt;main&gt;</h3>\n    <h4>Bedeutung</h4><p>Das main-Element enthält den Hauptinhalt der Seite.</p>\n    <h4>Typische Verwendung</h4><p>Es sollte pro Seite nur einmal verwendet werden.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;main&gt;\n  &lt;section&gt;...&lt;/section&gt;\n&lt;/main&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>main\n.page-main</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-8-main\" id=\"demo-8-main-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-8-main\" id=\"demo-8-main-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-8-main\" id=\"demo-8-main-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-8-main\" id=\"demo-8-main-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-8-main\" id=\"demo-8-main-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-8-main-v1\">Standard</label><label class=\"tab-2\" for=\"demo-8-main-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-8-main-v3\">Layout</label><label class=\"tab-4\" for=\"demo-8-main-v4\">Karte</label><label class=\"tab-5\" for=\"demo-8-main-v5\">Kontrast</label></div>\n    <div class=\"preview\"><article class=\"demo-target demo-card\"><strong>&lt;main&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>main {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.main-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.main-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>main {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>main {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>main hilft dabei, Hauptinhalt von Navigation und Fußbereich zu trennen.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-01-main\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;main&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>main sollte pro Seite nur einmal vorkommen.</li><li>Es grenzt Hauptinhalt von Navigation, Header und Footer ab.</li><li>Screenreader können direkt zum Hauptinhalt springen.</li><li>main ist kein Ersatz für jede beliebige Layoutbox.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>Header, Navigation, main und footer farbig markieren, damit die Seitenbereiche sichtbar werden.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/main\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;main&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 1,
      "tag": "main",
      "title": "den Hauptinhalt lesbar begrenzen",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 1 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<article class=\"demo-target demo-card\"><strong>&lt;main&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article>",
      "css": "main {\n  color: #12324a;\n  margin: 0;\n}",
      "controls": [
        {
          "kind": "range",
          "key": "padding",
          "label": "Innenabstand",
          "min": 4,
          "max": 40,
          "value": 16,
          "unit": "px"
        },
        {
          "kind": "color",
          "key": "border-color",
          "label": "Rahmenfarbe",
          "value": "#00abc7"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <main>.",
        "Prüfen Sie die Wirkung der für Tag 1 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-01-section": {
    "detail": "\n    <h3>&lt;section&gt;</h3>\n    <h4>Bedeutung</h4><p>Das section-Element beschreibt einen thematischen Abschnitt.</p>\n    <h4>Typische Verwendung</h4><p>Es eignet sich für Kapitel, Tagesbereiche oder Inhaltsblöcke.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;section&gt;\n  &lt;h2&gt;Thema&lt;/h2&gt;\n  &lt;p&gt;Inhalt&lt;/p&gt;\n&lt;/section&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>section\n.section\n.section.highlight</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-9-section\" id=\"demo-9-section-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-9-section\" id=\"demo-9-section-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-9-section\" id=\"demo-9-section-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-9-section\" id=\"demo-9-section-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-9-section\" id=\"demo-9-section-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-9-section-v1\">Standard</label><label class=\"tab-2\" for=\"demo-9-section-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-9-section-v3\">Layout</label><label class=\"tab-4\" for=\"demo-9-section-v4\">Karte</label><label class=\"tab-5\" for=\"demo-9-section-v5\">Kontrast</label></div>\n    <div class=\"preview\"><section class=\"demo-target demo-section\"><strong>Abschnitt</strong><p>Ein thematischer Bereich.</p></section><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>section {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.section-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.section-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>section {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>section {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Eine section sollte in der Regel eine passende Überschrift besitzen.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-01-section\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;section&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>section braucht eine erkennbare thematische Bedeutung.</li><li>Eine section sollte meistens eine Überschrift besitzen.</li><li>Für rein optische Container ist div oft passender.</li><li>section hilft, lange Seiten fachlich zu gliedern.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;section&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/section\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;section&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 1,
      "tag": "section",
      "title": "einen thematischen Abschnitt gliedern",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 1 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<section class=\"demo-target demo-section\"><strong>Abschnitt</strong><p>Ein thematischer Bereich.</p></section>",
      "css": "section {\n  color: #12324a;\n  margin: 0;\n}",
      "controls": [
        {
          "kind": "range",
          "key": "padding",
          "label": "Innenabstand",
          "min": 4,
          "max": 40,
          "value": 16,
          "unit": "px"
        },
        {
          "kind": "color",
          "key": "border-color",
          "label": "Rahmenfarbe",
          "value": "#00abc7"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <section>.",
        "Prüfen Sie die Wirkung der für Tag 1 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-01-article": {
    "detail": "\n    <h3>&lt;article&gt;</h3>\n    <h4>Bedeutung</h4><p>Das article-Element beschreibt eigenständigen Inhalt.</p>\n    <h4>Typische Verwendung</h4><p>Typisch sind Karten, Beiträge, Meldungen oder Projektblöcke.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;article class=&quot;card&quot;&gt;\n  &lt;h2&gt;Karte&lt;/h2&gt;\n  &lt;p&gt;Text&lt;/p&gt;\n&lt;/article&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>article\n.card\n.card:hover</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-10-article\" id=\"demo-10-article-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-10-article\" id=\"demo-10-article-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-10-article\" id=\"demo-10-article-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-10-article\" id=\"demo-10-article-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-10-article\" id=\"demo-10-article-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-10-article-v1\">Standard</label><label class=\"tab-2\" for=\"demo-10-article-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-10-article-v3\">Layout</label><label class=\"tab-4\" for=\"demo-10-article-v4\">Karte</label><label class=\"tab-5\" for=\"demo-10-article-v5\">Kontrast</label></div>\n    <div class=\"preview\"><article class=\"demo-target demo-card\"><strong>&lt;article&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>article {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.article-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.article-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>article {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>article {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>article eignet sich gut für wiederverwendbare Inhaltskarten.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-01-article\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;article&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>article ist für eigenständige Inhalte gedacht.</li><li>Karten, Beiträge und News sind typische Beispiele.</li><li>Nicht jede Box ist automatisch ein article.</li><li>Hover-Effekte sollten Inhalt und Bedienbarkeit nicht überdecken.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>Eine Karte bauen lassen und fragen, ob sie auch außerhalb der Seite verständlich bleibt.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/article\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;article&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 1,
      "tag": "article",
      "title": "einen eigenständig verständlichen Beitrag gestalten",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 1 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<article class=\"demo-target demo-card\"><strong>&lt;article&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article>",
      "css": "article {\n  color: #12324a;\n  margin: 0;\n}",
      "controls": [
        {
          "kind": "range",
          "key": "padding",
          "label": "Innenabstand",
          "min": 4,
          "max": 40,
          "value": 16,
          "unit": "px"
        },
        {
          "kind": "color",
          "key": "border-color",
          "label": "Rahmenfarbe",
          "value": "#00abc7"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <article>.",
        "Prüfen Sie die Wirkung der für Tag 1 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-01-footer": {
    "detail": "\n    <h3>&lt;footer&gt;</h3>\n    <h4>Bedeutung</h4><p>Das footer-Element kennzeichnet einen Fußbereich.</p>\n    <h4>Typische Verwendung</h4><p>Dort stehen oft Zusatzinfos, Copyright, Kontakt oder Quellenangaben.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;footer&gt;\n  &lt;p&gt;Kontakt und Hinweise&lt;/p&gt;\n&lt;/footer&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>footer\n.site-footer</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-11-footer\" id=\"demo-11-footer-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-11-footer\" id=\"demo-11-footer-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-11-footer\" id=\"demo-11-footer-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-11-footer\" id=\"demo-11-footer-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-11-footer\" id=\"demo-11-footer-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-11-footer-v1\">Standard</label><label class=\"tab-2\" for=\"demo-11-footer-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-11-footer-v3\">Layout</label><label class=\"tab-4\" for=\"demo-11-footer-v4\">Karte</label><label class=\"tab-5\" for=\"demo-11-footer-v5\">Kontrast</label></div>\n    <div class=\"preview\"><article class=\"demo-target demo-card\"><strong>&lt;footer&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>footer {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.footer-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.footer-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>footer {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>footer {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Ein footer kann zur ganzen Seite oder zu einem article gehören.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-01-footer\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;footer&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>&lt;footer&gt; sollte immer über Bedeutung und Zweck verstanden werden, nicht nur über die optische Darstellung.</li><li>Typische Fehler entstehen, wenn semantische Elemente durch allgemeine div-Container ersetzt werden.</li><li>Die CSS-Demo eignet sich gut, um Struktur und Gestaltung getrennt zu erklären.</li><li>Barrierefreiheit wird verständlicher, wenn Bedienung per Tastatur und Screenreader-Perspektive mitgedacht wird.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;footer&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/footer\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;footer&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 1,
      "tag": "footer",
      "title": "Abschlussinformationen und Links strukturieren",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 1 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<article class=\"demo-target demo-card\"><strong>&lt;footer&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article>",
      "css": "footer {\n  color: #12324a;\n  margin: 0;\n}",
      "controls": [
        {
          "kind": "range",
          "key": "padding",
          "label": "Innenabstand",
          "min": 4,
          "max": 40,
          "value": 16,
          "unit": "px"
        },
        {
          "kind": "color",
          "key": "border-color",
          "label": "Rahmenfarbe",
          "value": "#00abc7"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <footer>.",
        "Prüfen Sie die Wirkung der für Tag 1 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-01-h1": {
    "detail": "\n    <h3>&lt;h1&gt;</h3>\n    <h4>Bedeutung</h4><p>Das h1-Element ist die wichtigste Überschrift einer Seite.</p>\n    <h4>Typische Verwendung</h4><p>Es beschreibt das zentrale Thema des Dokuments.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;h1&gt;Übersicht wichtiger HTML-Tags&lt;/h1&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>h1\n.hero-title\nmain h1</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-12-h1\" id=\"demo-12-h1-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-12-h1\" id=\"demo-12-h1-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-12-h1\" id=\"demo-12-h1-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-12-h1\" id=\"demo-12-h1-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-12-h1\" id=\"demo-12-h1-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-12-h1-v1\">Standard</label><label class=\"tab-2\" for=\"demo-12-h1-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-12-h1-v3\">Layout</label><label class=\"tab-4\" for=\"demo-12-h1-v4\">Karte</label><label class=\"tab-5\" for=\"demo-12-h1-v5\">Kontrast</label></div>\n    <div class=\"preview\"><h3 class=\"demo-target demo-heading\">HTML und CSS verstehen</h3><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>h1 {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.h1-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.h1-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>h1 {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>h1 {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Die h1 nicht nur wegen der Schriftgröße wählen, sondern wegen der Bedeutung.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-01-h1\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;h1&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>&lt;h1&gt; sollte immer über Bedeutung und Zweck verstanden werden, nicht nur über die optische Darstellung.</li><li>Typische Fehler entstehen, wenn semantische Elemente durch allgemeine div-Container ersetzt werden.</li><li>Die CSS-Demo eignet sich gut, um Struktur und Gestaltung getrennt zu erklären.</li><li>Barrierefreiheit wird verständlicher, wenn Bedienung per Tastatur und Screenreader-Perspektive mitgedacht wird.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;h1&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/Heading_Elements\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;h1&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 1,
      "tag": "h1",
      "title": "die wichtigste Überschrift gestalten",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 1 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<h3 class=\"demo-target demo-heading\">HTML und CSS verstehen</h3>",
      "css": "h1 {\n  color: #12324a;\n  margin: 0;\n}",
      "controls": [
        {
          "kind": "range",
          "key": "font-size",
          "label": "Schriftgröße",
          "min": 14,
          "max": 42,
          "value": 22,
          "unit": "px"
        },
        {
          "kind": "color",
          "key": "color",
          "label": "Textfarbe",
          "value": "#073f52"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <h1>.",
        "Prüfen Sie die Wirkung der für Tag 1 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-01-h2": {
    "detail": "\n    <h3>&lt;h2&gt;</h3>\n    <h4>Bedeutung</h4><p>Das h2-Element gliedert größere Unterbereiche.</p>\n    <h4>Typische Verwendung</h4><p>Es eignet sich für Kapitel wie Tagesbereiche oder Inhaltsgruppen.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;h2&gt;Tag 1: HTML-Grundstruktur&lt;/h2&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>h2\n.section-title\nsection h2</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-13-h2\" id=\"demo-13-h2-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-13-h2\" id=\"demo-13-h2-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-13-h2\" id=\"demo-13-h2-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-13-h2\" id=\"demo-13-h2-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-13-h2\" id=\"demo-13-h2-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-13-h2-v1\">Standard</label><label class=\"tab-2\" for=\"demo-13-h2-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-13-h2-v3\">Layout</label><label class=\"tab-4\" for=\"demo-13-h2-v4\">Karte</label><label class=\"tab-5\" for=\"demo-13-h2-v5\">Kontrast</label></div>\n    <div class=\"preview\"><h3 class=\"demo-target demo-heading\">HTML und CSS verstehen</h3><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>h2 {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.h2-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.h2-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>h2 {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>h2 {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Überschriften sollten eine nachvollziehbare Reihenfolge behalten.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-01-h2\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;h2&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>&lt;h2&gt; sollte immer über Bedeutung und Zweck verstanden werden, nicht nur über die optische Darstellung.</li><li>Typische Fehler entstehen, wenn semantische Elemente durch allgemeine div-Container ersetzt werden.</li><li>Die CSS-Demo eignet sich gut, um Struktur und Gestaltung getrennt zu erklären.</li><li>Barrierefreiheit wird verständlicher, wenn Bedienung per Tastatur und Screenreader-Perspektive mitgedacht wird.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;h2&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/Heading_Elements\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;h2&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 1,
      "tag": "h2",
      "title": "eine Abschnittsüberschrift hierarchisch gestalten",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 1 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<h3 class=\"demo-target demo-heading\">HTML und CSS verstehen</h3>",
      "css": "h2 {\n  color: #12324a;\n  margin: 0;\n}",
      "controls": [
        {
          "kind": "range",
          "key": "font-size",
          "label": "Schriftgröße",
          "min": 14,
          "max": 42,
          "value": 22,
          "unit": "px"
        },
        {
          "kind": "color",
          "key": "color",
          "label": "Textfarbe",
          "value": "#073f52"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <h2>.",
        "Prüfen Sie die Wirkung der für Tag 1 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-01-p": {
    "detail": "\n    <h3>&lt;p&gt;</h3>\n    <h4>Bedeutung</h4><p>Das p-Element beschreibt einen Textabsatz.</p>\n    <h4>Typische Verwendung</h4><p>Es ist die Standardwahl für zusammenhängenden Fließtext.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;p&gt;Dies ist ein gut lesbarer Absatz.&lt;/p&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>p\n.lead\n.note</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-14-p\" id=\"demo-14-p-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-14-p\" id=\"demo-14-p-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-14-p\" id=\"demo-14-p-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-14-p\" id=\"demo-14-p-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-14-p\" id=\"demo-14-p-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-14-p-v1\">Standard</label><label class=\"tab-2\" for=\"demo-14-p-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-14-p-v3\">Layout</label><label class=\"tab-4\" for=\"demo-14-p-v4\">Karte</label><label class=\"tab-5\" for=\"demo-14-p-v5\">Kontrast</label></div>\n    <div class=\"preview\"><p class=\"demo-target demo-paragraph\">Ein gut lesbarer Absatz braucht ausreichend Zeilenhöhe, sinnvolle Breite und klare Abstände.</p><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>p {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.p-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.p-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>p {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>p {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Lesbarkeit entsteht durch Zeilenhöhe, Breite und ausreichende Abstände.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-01-p\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;p&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>&lt;p&gt; sollte immer über Bedeutung und Zweck verstanden werden, nicht nur über die optische Darstellung.</li><li>Typische Fehler entstehen, wenn semantische Elemente durch allgemeine div-Container ersetzt werden.</li><li>Die CSS-Demo eignet sich gut, um Struktur und Gestaltung getrennt zu erklären.</li><li>Barrierefreiheit wird verständlicher, wenn Bedienung per Tastatur und Screenreader-Perspektive mitgedacht wird.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;p&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/p\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;p&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 1,
      "tag": "p",
      "title": "Textbreite, Zeilenhöhe und Abstände prüfen",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 1 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<p class=\"demo-target demo-paragraph\">Ein gut lesbarer Absatz braucht ausreichend Zeilenhöhe, sinnvolle Breite und klare Abstände.</p>",
      "css": "p {\n  color: #12324a;\n  margin: 0;\n}",
      "controls": [
        {
          "kind": "range",
          "key": "font-size",
          "label": "Schriftgröße",
          "min": 14,
          "max": 42,
          "value": 22,
          "unit": "px"
        },
        {
          "kind": "color",
          "key": "color",
          "label": "Textfarbe",
          "value": "#073f52"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <p>.",
        "Prüfen Sie die Wirkung der für Tag 1 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-01-ul": {
    "detail": "\n    <h3>&lt;ul&gt;</h3>\n    <h4>Bedeutung</h4><p>Das ul-Element erstellt eine ungeordnete Liste.</p>\n    <h4>Typische Verwendung</h4><p>Es eignet sich für Merkmale, Stichpunkte oder Navigationspunkte ohne feste Reihenfolge.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;ul&gt;\n  &lt;li&gt;HTML&lt;/li&gt;\n  &lt;li&gt;CSS&lt;/li&gt;\n&lt;/ul&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>ul\n.feature-list\nul li</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-15-ul\" id=\"demo-15-ul-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-15-ul\" id=\"demo-15-ul-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-15-ul\" id=\"demo-15-ul-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-15-ul\" id=\"demo-15-ul-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-15-ul\" id=\"demo-15-ul-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-15-ul-v1\">Standard</label><label class=\"tab-2\" for=\"demo-15-ul-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-15-ul-v3\">Layout</label><label class=\"tab-4\" for=\"demo-15-ul-v4\">Karte</label><label class=\"tab-5\" for=\"demo-15-ul-v5\">Kontrast</label></div>\n    <div class=\"preview\"><ul class=\"demo-target demo-list\"><li>Struktur</li><li>Style</li><li>Prüfen</li></ul><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>ul {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.ul-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.ul-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>ul {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>ul {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Listen sind semantischer als Absätze mit Bindestrichen.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-01-ul\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;ul&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>&lt;ul&gt; sollte immer über Bedeutung und Zweck verstanden werden, nicht nur über die optische Darstellung.</li><li>Typische Fehler entstehen, wenn semantische Elemente durch allgemeine div-Container ersetzt werden.</li><li>Die CSS-Demo eignet sich gut, um Struktur und Gestaltung getrennt zu erklären.</li><li>Barrierefreiheit wird verständlicher, wenn Bedienung per Tastatur und Screenreader-Perspektive mitgedacht wird.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;ul&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ul\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;ul&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 1,
      "tag": "ul",
      "title": "eine ungeordnete Liste lesbar gestalten",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 1 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<ul class=\"demo-target demo-list\"><li>Struktur</li><li>Style</li><li>Prüfen</li></ul>",
      "css": "ul {\n  color: #12324a;\n  margin: 0;\n}",
      "controls": [
        {
          "kind": "range",
          "key": "padding",
          "label": "Innenabstand",
          "min": 4,
          "max": 40,
          "value": 16,
          "unit": "px"
        },
        {
          "kind": "color",
          "key": "border-color",
          "label": "Rahmenfarbe",
          "value": "#00abc7"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <ul>.",
        "Prüfen Sie die Wirkung der für Tag 1 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-01-ol": {
    "detail": "\n    <h3>&lt;ol&gt;</h3>\n    <h4>Bedeutung</h4><p>Das ol-Element erstellt eine geordnete Liste.</p>\n    <h4>Typische Verwendung</h4><p>Es wird verwendet, wenn Reihenfolge oder Schritte wichtig sind.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;ol&gt;\n  &lt;li&gt;Struktur erstellen&lt;/li&gt;\n  &lt;li&gt;CSS anwenden&lt;/li&gt;\n&lt;/ol&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>ol\n.steps\nol li</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-16-ol\" id=\"demo-16-ol-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-16-ol\" id=\"demo-16-ol-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-16-ol\" id=\"demo-16-ol-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-16-ol\" id=\"demo-16-ol-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-16-ol\" id=\"demo-16-ol-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-16-ol-v1\">Standard</label><label class=\"tab-2\" for=\"demo-16-ol-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-16-ol-v3\">Layout</label><label class=\"tab-4\" for=\"demo-16-ol-v4\">Karte</label><label class=\"tab-5\" for=\"demo-16-ol-v5\">Kontrast</label></div>\n    <div class=\"preview\"><ul class=\"demo-target demo-list\"><li>Struktur</li><li>Style</li><li>Prüfen</li></ul><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>ol {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.ol-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.ol-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>ol {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>ol {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Für Arbeitsabläufe ist ol oft aussagekräftiger als ul.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-01-ol\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;ol&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>&lt;ol&gt; sollte immer über Bedeutung und Zweck verstanden werden, nicht nur über die optische Darstellung.</li><li>Typische Fehler entstehen, wenn semantische Elemente durch allgemeine div-Container ersetzt werden.</li><li>Die CSS-Demo eignet sich gut, um Struktur und Gestaltung getrennt zu erklären.</li><li>Barrierefreiheit wird verständlicher, wenn Bedienung per Tastatur und Screenreader-Perspektive mitgedacht wird.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;ol&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ol\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;ol&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 1,
      "tag": "ol",
      "title": "Reihenfolge und Listendarstellung prüfen",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 1 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<ul class=\"demo-target demo-list\"><li>Struktur</li><li>Style</li><li>Prüfen</li></ul>",
      "css": "ol {\n  color: #12324a;\n  margin: 0;\n}",
      "controls": [
        {
          "kind": "range",
          "key": "padding",
          "label": "Innenabstand",
          "min": 4,
          "max": 40,
          "value": 16,
          "unit": "px"
        },
        {
          "kind": "color",
          "key": "border-color",
          "label": "Rahmenfarbe",
          "value": "#00abc7"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <ol>.",
        "Prüfen Sie die Wirkung der für Tag 1 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-01-li": {
    "detail": "\n    <h3>&lt;li&gt;</h3>\n    <h4>Bedeutung</h4><p>Das li-Element ist ein einzelner Listeneintrag.</p>\n    <h4>Typische Verwendung</h4><p>Es steht innerhalb von ul, ol oder menu.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;li&gt;Responsive Design prüfen&lt;/li&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>li\nul &gt; li\nol &gt; li</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-17-li\" id=\"demo-17-li-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-17-li\" id=\"demo-17-li-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-17-li\" id=\"demo-17-li-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-17-li\" id=\"demo-17-li-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-17-li\" id=\"demo-17-li-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-17-li-v1\">Standard</label><label class=\"tab-2\" for=\"demo-17-li-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-17-li-v3\">Layout</label><label class=\"tab-4\" for=\"demo-17-li-v4\">Karte</label><label class=\"tab-5\" for=\"demo-17-li-v5\">Kontrast</label></div>\n    <div class=\"preview\"><ul class=\"demo-target demo-list\"><li>Struktur</li><li>Style</li><li>Prüfen</li></ul><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>li {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.li-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.li-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>li {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>li {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>li erhält Bedeutung durch den Listentyp, in dem es steht.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-01-li\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;li&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>&lt;li&gt; sollte immer über Bedeutung und Zweck verstanden werden, nicht nur über die optische Darstellung.</li><li>Typische Fehler entstehen, wenn semantische Elemente durch allgemeine div-Container ersetzt werden.</li><li>Die CSS-Demo eignet sich gut, um Struktur und Gestaltung getrennt zu erklären.</li><li>Barrierefreiheit wird verständlicher, wenn Bedienung per Tastatur und Screenreader-Perspektive mitgedacht wird.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;li&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/li\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;li&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 1,
      "tag": "li",
      "title": "einzelne Listeneinträge differenzieren",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 1 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<ul class=\"demo-target demo-list\"><li>Struktur</li><li>Style</li><li>Prüfen</li></ul>",
      "css": "li {\n  color: #12324a;\n  margin: 0;\n}",
      "controls": [
        {
          "kind": "range",
          "key": "padding",
          "label": "Innenabstand",
          "min": 4,
          "max": 40,
          "value": 16,
          "unit": "px"
        },
        {
          "kind": "color",
          "key": "border-color",
          "label": "Rahmenfarbe",
          "value": "#00abc7"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <li>.",
        "Prüfen Sie die Wirkung der für Tag 1 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-01-a": {
    "detail": "\n    <h3>&lt;a&gt;</h3>\n    <h4>Bedeutung</h4><p>Das a-Element erstellt einen Link.</p>\n    <h4>Typische Verwendung</h4><p>Es führt zu einer Stelle auf derselben Seite oder zu einem Ziel.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;a href=&quot;#tag1&quot;&gt;Zu Tag 1 springen&lt;/a&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>a\n.nav-link\n.button-link\na:hover</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-18-a\" id=\"demo-18-a-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-18-a\" id=\"demo-18-a-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-18-a\" id=\"demo-18-a-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-18-a\" id=\"demo-18-a-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-18-a\" id=\"demo-18-a-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-18-a-v1\">Standard</label><label class=\"tab-2\" for=\"demo-18-a-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-18-a-v3\">Layout</label><label class=\"tab-4\" for=\"demo-18-a-v4\">Karte</label><label class=\"tab-5\" for=\"demo-18-a-v5\">Kontrast</label></div>\n    <div class=\"preview\"><a class=\"demo-target demo-link\" href=\"#einfuehrung\" data-course-placeholder=\"true\">Beispiel-Link</a><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>a {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.a-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.a-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>a {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>a {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Ein Linktext sollte sagen, wohin der Link führt.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-01-a\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;a&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>Ein a-Element navigiert zu einem Ziel und braucht ein sinnvolles href.</li><li>Linktexte sollen das Ziel beschreiben, nicht nur „hier“ heißen.</li><li>Buttons dürfen nicht als Links missbraucht werden, wenn eine Aktion ausgelöst wird.</li><li>Hover- und Fokuszustände sollten beide sichtbar gestaltet sein.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;a&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;a&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 1,
      "tag": "a",
      "title": "Linktext, Hover und Fokus sichtbar gestalten",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 1 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<a class=\"demo-target demo-link\" href=\"#einfuehrung\" data-course-placeholder=\"true\">Beispiel-Link</a>",
      "css": "a {\n  color: #12324a;\n  margin: 0;\n}",
      "controls": [
        {
          "kind": "range",
          "key": "font-size",
          "label": "Schriftgröße",
          "min": 14,
          "max": 42,
          "value": 22,
          "unit": "px"
        },
        {
          "kind": "color",
          "key": "color",
          "label": "Textfarbe",
          "value": "#073f52"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <a>.",
        "Prüfen Sie die Wirkung der für Tag 1 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-01-img": {
    "detail": "\n    <h3>&lt;img&gt;</h3>\n    <h4>Bedeutung</h4><p>Das img-Element bindet ein Bild ein.</p>\n    <h4>Typische Verwendung</h4><p>Das alt-Attribut beschreibt Inhalt oder Funktion des Bildes.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;img src=&quot;bild.jpg&quot; alt=&quot;Beispielbild&quot;&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>img\n.card img\nimg.responsive</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-19-img\" id=\"demo-19-img-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-19-img\" id=\"demo-19-img-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-19-img\" id=\"demo-19-img-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-19-img\" id=\"demo-19-img-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-19-img\" id=\"demo-19-img-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-19-img-v1\">Standard</label><label class=\"tab-2\" for=\"demo-19-img-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-19-img-v3\">Layout</label><label class=\"tab-4\" for=\"demo-19-img-v4\">Karte</label><label class=\"tab-5\" for=\"demo-19-img-v5\">Kontrast</label></div>\n    <div class=\"preview\"><div class=\"demo-target demo-image\">Bild</div><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>img {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.img-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.img-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>img {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>img {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Bilder sollten mit max-width:100% und height:auto flexibel bleiben.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-01-img\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;img&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>alt ist fachlich zentral für Barrierefreiheit.</li><li>CSS sollte Bilder responsiv halten: max-width:100% und height:auto.</li><li>width und height können Layout Shift reduzieren.</li><li>Dekorative Bilder können leeren alt-Text erhalten.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>Ein Bild einmal mit gutem alt-Text und einmal ohne sinnvolle Beschreibung vergleichen lassen.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/img\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;img&gt;</a><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Learn/HTML/Multimedia_and_embedding/Responsive_images\" target=\"_blank\" rel=\"noopener noreferrer\">MDN Responsive images</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 1,
      "tag": "img",
      "title": "alternative Beschreibung und responsive Bildfläche prüfen",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 1 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<figure><img class=\"demo-target demo-image\" src=\"data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 640 360%22%3E%3Crect width=%22640%22 height=%22360%22 fill=%22%2300abc7%22/%3E%3Ccircle cx=%22320%22 cy=%22140%22 r=%2270%22 fill=%22%23bdf77a%22/%3E%3Cpath d=%22M80 320l150-130 95 80 90-75 145 125z%22 fill=%22%23073f52%22/%3E%3C/svg%3E\" alt=\"Abstrakte Landschaft aus geometrischen Formen\"><figcaption>Responsives Bild mit Alternativtext</figcaption></figure>",
      "css": "img {\n  color: #12324a;\n  margin: 0;\n}\n\n.demo-image { display:block; width:100%; max-width:420px; height:220px; object-fit:cover; border-radius:12px; }",
      "controls": [
        {
          "kind": "range",
          "key": "padding",
          "label": "Innenabstand",
          "min": 4,
          "max": 40,
          "value": 16,
          "unit": "px"
        },
        {
          "kind": "color",
          "key": "border-color",
          "label": "Rahmenfarbe",
          "value": "#00abc7"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <img>.",
        "Prüfen Sie die Wirkung der für Tag 1 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-01-div": {
    "detail": "\n    <h3>&lt;div&gt;</h3>\n    <h4>Bedeutung</h4><p>Das div-Element ist ein allgemeiner Blockcontainer ohne eigene Bedeutung.</p>\n    <h4>Typische Verwendung</h4><p>Es wird genutzt, wenn kein semantisch passenderes Element existiert.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;div class=&quot;layout-box&quot;&gt;Inhalt&lt;/div&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>div\n.wrapper\n.layout-box</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-20-div\" id=\"demo-20-div-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-20-div\" id=\"demo-20-div-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-20-div\" id=\"demo-20-div-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-20-div\" id=\"demo-20-div-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-20-div\" id=\"demo-20-div-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-20-div-v1\">Standard</label><label class=\"tab-2\" for=\"demo-20-div-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-20-div-v3\">Layout</label><label class=\"tab-4\" for=\"demo-20-div-v4\">Karte</label><label class=\"tab-5\" for=\"demo-20-div-v5\">Kontrast</label></div>\n    <div class=\"preview\"><article class=\"demo-target demo-card\"><strong>&lt;div&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>div {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.div-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.div-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>div {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>div {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>div sollte nicht jedes semantische Element ersetzen.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-01-div\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;div&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>&lt;div&gt; sollte immer über Bedeutung und Zweck verstanden werden, nicht nur über die optische Darstellung.</li><li>Typische Fehler entstehen, wenn semantische Elemente durch allgemeine div-Container ersetzt werden.</li><li>Die CSS-Demo eignet sich gut, um Struktur und Gestaltung getrennt zu erklären.</li><li>Barrierefreiheit wird verständlicher, wenn Bedienung per Tastatur und Screenreader-Perspektive mitgedacht wird.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;div&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/div\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;div&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 1,
      "tag": "div",
      "title": "neutrale Blockcontainer vergleichen",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 1 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<article class=\"demo-target demo-card\"><strong>&lt;div&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article>",
      "css": "div {\n  color: #12324a;\n  margin: 0;\n}",
      "controls": [
        {
          "kind": "range",
          "key": "padding",
          "label": "Innenabstand",
          "min": 4,
          "max": 40,
          "value": 16,
          "unit": "px"
        },
        {
          "kind": "color",
          "key": "border-color",
          "label": "Rahmenfarbe",
          "value": "#00abc7"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <div>.",
        "Prüfen Sie die Wirkung der für Tag 1 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-01-span": {
    "detail": "\n    <h3>&lt;span&gt;</h3>\n    <h4>Bedeutung</h4><p>Das span-Element ist ein allgemeiner Inline-Container.</p>\n    <h4>Typische Verwendung</h4><p>Es markiert kurze Textteile innerhalb einer Zeile.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;p&gt;Ein &lt;span class=&quot;highlight&quot;&gt;wichtiger Begriff&lt;/span&gt;.&lt;/p&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>span\n.highlight\np span</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-21-span\" id=\"demo-21-span-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-21-span\" id=\"demo-21-span-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-21-span\" id=\"demo-21-span-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-21-span\" id=\"demo-21-span-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-21-span\" id=\"demo-21-span-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-21-span-v1\">Standard</label><label class=\"tab-2\" for=\"demo-21-span-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-21-span-v3\">Layout</label><label class=\"tab-4\" for=\"demo-21-span-v4\">Karte</label><label class=\"tab-5\" for=\"demo-21-span-v5\">Kontrast</label></div>\n    <div class=\"preview\"><p>Ein <span class=\"demo-target demo-span\">markierter Begriff</span> im Satz.</p><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>span {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.span-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.span-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>span {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>span {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>span eignet sich für kleine Hervorhebungen ohne Blockumbruch.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-01-span\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;span&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>&lt;span&gt; sollte immer über Bedeutung und Zweck verstanden werden, nicht nur über die optische Darstellung.</li><li>Typische Fehler entstehen, wenn semantische Elemente durch allgemeine div-Container ersetzt werden.</li><li>Die CSS-Demo eignet sich gut, um Struktur und Gestaltung getrennt zu erklären.</li><li>Barrierefreiheit wird verständlicher, wenn Bedienung per Tastatur und Screenreader-Perspektive mitgedacht wird.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;span&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/span\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;span&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 1,
      "tag": "span",
      "title": "Inline-Bereiche gezielt hervorheben",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 1 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<p>Ein <span class=\"demo-target demo-span\">markierter Begriff</span> im Satz.</p>",
      "css": "span {\n  color: #12324a;\n  margin: 0;\n}",
      "controls": [
        {
          "kind": "range",
          "key": "font-size",
          "label": "Schriftgröße",
          "min": 14,
          "max": 42,
          "value": 22,
          "unit": "px"
        },
        {
          "kind": "color",
          "key": "color",
          "label": "Textfarbe",
          "value": "#073f52"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <span>.",
        "Prüfen Sie die Wirkung der für Tag 1 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-02-nav": {
    "detail": "\n    <h3>&lt;nav&gt;</h3>\n    <h4>Bedeutung</h4><p>Das nav-Element kennzeichnet zentrale Navigation.</p>\n    <h4>Typische Verwendung</h4><p>Es enthält wichtige Links zu Bereichen oder Seitenabschnitten.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;nav aria-label=&quot;Tagesnavigation&quot;&gt;\n  &lt;a href=&quot;#tag1&quot;&gt;Tag 1&lt;/a&gt;\n&lt;/nav&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>nav\n.main-nav\nnav a</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-22-nav\" id=\"demo-22-nav-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-22-nav\" id=\"demo-22-nav-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-22-nav\" id=\"demo-22-nav-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-22-nav\" id=\"demo-22-nav-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-22-nav\" id=\"demo-22-nav-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-22-nav-v1\">Standard</label><label class=\"tab-2\" for=\"demo-22-nav-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-22-nav-v3\">Layout</label><label class=\"tab-4\" for=\"demo-22-nav-v4\">Karte</label><label class=\"tab-5\" for=\"demo-22-nav-v5\">Kontrast</label></div>\n    <div class=\"preview\"><nav class=\"demo-target demo-nav\"><a href=\"#einfuehrung\" data-course-placeholder=\"true\">Start</a><a href=\"#einfuehrung\" data-course-placeholder=\"true\">Tags</a><a href=\"#einfuehrung\" data-course-placeholder=\"true\">Kontakt</a></nav><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>nav {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.nav-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.nav-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>nav {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>nav {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Nicht jede Linkliste muss nav sein; nav ist für zentrale Navigation gedacht.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-02-nav\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;nav&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>nav ist für zentrale Navigationsblöcke gedacht.</li><li>Nicht jede Linkliste ist automatisch eine Navigation.</li><li>aria-label hilft, mehrere Navigationen unterscheidbar zu machen.</li><li>Flexbox eignet sich gut zur Darstellung.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>Eine normale Linkliste zeigen und erst danach erklären, wann daraus ein nav-Bereich wird.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/nav\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;nav&gt;</a><a class=\"teacher-link secondary\" href=\"https://www.w3.org/WAI/ARIA/apg/practices/landmark-regions/\" target=\"_blank\" rel=\"noopener noreferrer\">WAI Landmarks</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 2,
      "tag": "nav",
      "title": "eine bedienbare Navigation anordnen",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 2 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<nav class=\"demo-target demo-nav\"><a href=\"#einfuehrung\" data-course-placeholder=\"true\">Start</a><a href=\"#einfuehrung\" data-course-placeholder=\"true\">Tags</a><a href=\"#einfuehrung\" data-course-placeholder=\"true\">Kontakt</a></nav>",
      "css": "nav {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 2: Flexbox-Grundlage */\n.demo-target { display: flex; flex-wrap: wrap; gap: 12px; }",
      "controls": [
        {
          "kind": "select",
          "key": "flex-direction",
          "label": "Flex-Richtung",
          "value": "row",
          "options": [
            [
              "row",
              "Zeile"
            ],
            [
              "column",
              "Spalte"
            ]
          ]
        },
        {
          "kind": "range",
          "key": "gap",
          "label": "Abstand",
          "min": 0,
          "max": 40,
          "value": 12,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <nav>.",
        "Prüfen Sie die Wirkung der für Tag 2 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-02-header": {
    "detail": "\n    <h3>&lt;header&gt;</h3>\n    <h4>Bedeutung</h4><p>Das header-Element kennzeichnet einen Kopfbereich.</p>\n    <h4>Typische Verwendung</h4><p>Es enthält häufig Logo, Überschrift, Einleitung oder Navigation.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;header class=&quot;site-header&quot;&gt;\n  &lt;h1&gt;Meine Seite&lt;/h1&gt;\n&lt;/header&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>header\n.site-header\nsection &gt; header</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-23-header\" id=\"demo-23-header-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-23-header\" id=\"demo-23-header-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-23-header\" id=\"demo-23-header-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-23-header\" id=\"demo-23-header-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-23-header\" id=\"demo-23-header-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-23-header-v1\">Standard</label><label class=\"tab-2\" for=\"demo-23-header-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-23-header-v3\">Layout</label><label class=\"tab-4\" for=\"demo-23-header-v4\">Karte</label><label class=\"tab-5\" for=\"demo-23-header-v5\">Kontrast</label></div>\n    <div class=\"preview\"><article class=\"demo-target demo-card\"><strong>&lt;header&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>header {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.header-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.header-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>header {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>header {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Ein header kann für die ganze Seite oder für einen Abschnitt stehen.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-02-header\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;header&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>&lt;header&gt; sollte immer über Bedeutung und Zweck verstanden werden, nicht nur über die optische Darstellung.</li><li>Typische Fehler entstehen, wenn semantische Elemente durch allgemeine div-Container ersetzt werden.</li><li>Die CSS-Demo eignet sich gut, um Struktur und Gestaltung getrennt zu erklären.</li><li>Barrierefreiheit wird verständlicher, wenn Bedienung per Tastatur und Screenreader-Perspektive mitgedacht wird.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;header&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/header\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;header&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 2,
      "tag": "header",
      "title": "einen klaren Kopfbereich gestalten",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 2 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<article class=\"demo-target demo-card\"><strong>&lt;header&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article>",
      "css": "header {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 2: Flexbox-Grundlage */\n.demo-target { display: flex; flex-wrap: wrap; gap: 12px; }",
      "controls": [
        {
          "kind": "select",
          "key": "flex-direction",
          "label": "Flex-Richtung",
          "value": "row",
          "options": [
            [
              "row",
              "Zeile"
            ],
            [
              "column",
              "Spalte"
            ]
          ]
        },
        {
          "kind": "range",
          "key": "gap",
          "label": "Abstand",
          "min": 0,
          "max": 40,
          "value": 12,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <header>.",
        "Prüfen Sie die Wirkung der für Tag 2 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-02-button": {
    "detail": "\n    <h3>&lt;button&gt;</h3>\n    <h4>Bedeutung</h4><p>Das button-Element beschreibt eine Schaltfläche für eine Aktion.</p>\n    <h4>Typische Verwendung</h4><p>Buttons werden für Formulare und Bedienaktionen verwendet.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;button type=&quot;button&quot;&gt;Mehr erfahren&lt;/button&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>button\n.btn\nbutton:hover\nbutton:focus-visible</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-24-button\" id=\"demo-24-button-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-24-button\" id=\"demo-24-button-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-24-button\" id=\"demo-24-button-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-24-button\" id=\"demo-24-button-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-24-button\" id=\"demo-24-button-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-24-button-v1\">Standard</label><label class=\"tab-2\" for=\"demo-24-button-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-24-button-v3\">Layout</label><label class=\"tab-4\" for=\"demo-24-button-v4\">Karte</label><label class=\"tab-5\" for=\"demo-24-button-v5\">Kontrast</label></div>\n    <div class=\"preview\"><button class=\"demo-target demo-button\" type=\"button\">Mehr erfahren</button><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>button {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.button-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.button-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>button {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>button {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Ein button sollte immer einen passenden type besitzen.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-02-button\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;button&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>Ein button löst eine Aktion aus, während ein a-Element zu einem Ziel navigiert.</li><li>In Formularen ist type wichtig, weil button ohne type im Formular-Kontext submit sein kann.</li><li>Fokuszustände sind wichtig für Tastaturbedienung.</li><li>Hover allein reicht nicht, weil Touchgeräte keinen klassischen Hover besitzen.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>Button und Link direkt gegenüberstellen: Navigieren = a, Aktion auslösen = button.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/button\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;button&gt;</a><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/CSS/:hover\" target=\"_blank\" rel=\"noopener noreferrer\">MDN :hover</a><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/CSS/:focus-visible\" target=\"_blank\" rel=\"noopener noreferrer\">MDN :focus-visible</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 2,
      "tag": "button",
      "title": "Button-Typ, Fokus und Zustände prüfen",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 2 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<button class=\"demo-target demo-button\" type=\"button\">Mehr erfahren</button>",
      "css": "button {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 2: Flexbox-Grundlage */\n.demo-target { display: flex; flex-wrap: wrap; gap: 12px; }",
      "controls": [
        {
          "kind": "color",
          "key": "background-color",
          "label": "Flächenfarbe",
          "value": "#073f52"
        },
        {
          "kind": "range",
          "key": "border-radius",
          "label": "Rundung",
          "min": 0,
          "max": 28,
          "value": 8,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <button>.",
        "Prüfen Sie die Wirkung der für Tag 2 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-02-a": {
    "detail": "\n    <h3>&lt;a&gt;</h3>\n    <h4>Bedeutung</h4><p>Das a-Element erstellt einen Link.</p>\n    <h4>Typische Verwendung</h4><p>Es führt zu einer Stelle auf derselben Seite oder zu einem Ziel.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;a href=&quot;#tag1&quot;&gt;Zu Tag 1 springen&lt;/a&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>a\n.nav-link\n.button-link\na:hover</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-25-a\" id=\"demo-25-a-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-25-a\" id=\"demo-25-a-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-25-a\" id=\"demo-25-a-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-25-a\" id=\"demo-25-a-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-25-a\" id=\"demo-25-a-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-25-a-v1\">Standard</label><label class=\"tab-2\" for=\"demo-25-a-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-25-a-v3\">Layout</label><label class=\"tab-4\" for=\"demo-25-a-v4\">Karte</label><label class=\"tab-5\" for=\"demo-25-a-v5\">Kontrast</label></div>\n    <div class=\"preview\"><a class=\"demo-target demo-link\" href=\"#einfuehrung\" data-course-placeholder=\"true\">Beispiel-Link</a><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>a {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.a-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.a-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>a {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>a {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Ein Linktext sollte sagen, wohin der Link führt.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-02-a\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;a&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>Ein a-Element navigiert zu einem Ziel und braucht ein sinnvolles href.</li><li>Linktexte sollen das Ziel beschreiben, nicht nur „hier“ heißen.</li><li>Buttons dürfen nicht als Links missbraucht werden, wenn eine Aktion ausgelöst wird.</li><li>Hover- und Fokuszustände sollten beide sichtbar gestaltet sein.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;a&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;a&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 2,
      "tag": "a",
      "title": "Linktext, Hover und Fokus sichtbar gestalten",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 2 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<a class=\"demo-target demo-link\" href=\"#einfuehrung\" data-course-placeholder=\"true\">Beispiel-Link</a>",
      "css": "a {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 2: Flexbox-Grundlage */\n.demo-target { display: flex; flex-wrap: wrap; gap: 12px; }",
      "controls": [
        {
          "kind": "color",
          "key": "background-color",
          "label": "Flächenfarbe",
          "value": "#073f52"
        },
        {
          "kind": "range",
          "key": "border-radius",
          "label": "Rundung",
          "min": 0,
          "max": 28,
          "value": 8,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <a>.",
        "Prüfen Sie die Wirkung der für Tag 2 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-02-ul": {
    "detail": "\n    <h3>&lt;ul&gt;</h3>\n    <h4>Bedeutung</h4><p>Das ul-Element erstellt eine ungeordnete Liste.</p>\n    <h4>Typische Verwendung</h4><p>Es eignet sich für Merkmale, Stichpunkte oder Navigationspunkte ohne feste Reihenfolge.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;ul&gt;\n  &lt;li&gt;HTML&lt;/li&gt;\n  &lt;li&gt;CSS&lt;/li&gt;\n&lt;/ul&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>ul\n.feature-list\nul li</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-26-ul\" id=\"demo-26-ul-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-26-ul\" id=\"demo-26-ul-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-26-ul\" id=\"demo-26-ul-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-26-ul\" id=\"demo-26-ul-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-26-ul\" id=\"demo-26-ul-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-26-ul-v1\">Standard</label><label class=\"tab-2\" for=\"demo-26-ul-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-26-ul-v3\">Layout</label><label class=\"tab-4\" for=\"demo-26-ul-v4\">Karte</label><label class=\"tab-5\" for=\"demo-26-ul-v5\">Kontrast</label></div>\n    <div class=\"preview\"><ul class=\"demo-target demo-list\"><li>Struktur</li><li>Style</li><li>Prüfen</li></ul><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>ul {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.ul-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.ul-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>ul {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>ul {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Listen sind semantischer als Absätze mit Bindestrichen.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-02-ul\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;ul&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>&lt;ul&gt; sollte immer über Bedeutung und Zweck verstanden werden, nicht nur über die optische Darstellung.</li><li>Typische Fehler entstehen, wenn semantische Elemente durch allgemeine div-Container ersetzt werden.</li><li>Die CSS-Demo eignet sich gut, um Struktur und Gestaltung getrennt zu erklären.</li><li>Barrierefreiheit wird verständlicher, wenn Bedienung per Tastatur und Screenreader-Perspektive mitgedacht wird.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;ul&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ul\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;ul&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 2,
      "tag": "ul",
      "title": "eine ungeordnete Liste lesbar gestalten",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 2 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<ul class=\"demo-target demo-list\"><li>Struktur</li><li>Style</li><li>Prüfen</li></ul>",
      "css": "ul {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 2: Flexbox-Grundlage */\n.demo-target { display: flex; flex-wrap: wrap; gap: 12px; }",
      "controls": [
        {
          "kind": "select",
          "key": "flex-direction",
          "label": "Flex-Richtung",
          "value": "row",
          "options": [
            [
              "row",
              "Zeile"
            ],
            [
              "column",
              "Spalte"
            ]
          ]
        },
        {
          "kind": "range",
          "key": "gap",
          "label": "Abstand",
          "min": 0,
          "max": 40,
          "value": 12,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <ul>.",
        "Prüfen Sie die Wirkung der für Tag 2 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-02-li": {
    "detail": "\n    <h3>&lt;li&gt;</h3>\n    <h4>Bedeutung</h4><p>Das li-Element ist ein einzelner Listeneintrag.</p>\n    <h4>Typische Verwendung</h4><p>Es steht innerhalb von ul, ol oder menu.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;li&gt;Responsive Design prüfen&lt;/li&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>li\nul &gt; li\nol &gt; li</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-27-li\" id=\"demo-27-li-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-27-li\" id=\"demo-27-li-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-27-li\" id=\"demo-27-li-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-27-li\" id=\"demo-27-li-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-27-li\" id=\"demo-27-li-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-27-li-v1\">Standard</label><label class=\"tab-2\" for=\"demo-27-li-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-27-li-v3\">Layout</label><label class=\"tab-4\" for=\"demo-27-li-v4\">Karte</label><label class=\"tab-5\" for=\"demo-27-li-v5\">Kontrast</label></div>\n    <div class=\"preview\"><ul class=\"demo-target demo-list\"><li>Struktur</li><li>Style</li><li>Prüfen</li></ul><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>li {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.li-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.li-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>li {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>li {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>li erhält Bedeutung durch den Listentyp, in dem es steht.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-02-li\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;li&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>&lt;li&gt; sollte immer über Bedeutung und Zweck verstanden werden, nicht nur über die optische Darstellung.</li><li>Typische Fehler entstehen, wenn semantische Elemente durch allgemeine div-Container ersetzt werden.</li><li>Die CSS-Demo eignet sich gut, um Struktur und Gestaltung getrennt zu erklären.</li><li>Barrierefreiheit wird verständlicher, wenn Bedienung per Tastatur und Screenreader-Perspektive mitgedacht wird.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;li&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/li\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;li&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 2,
      "tag": "li",
      "title": "einzelne Listeneinträge differenzieren",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 2 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<ul class=\"demo-target demo-list\"><li>Struktur</li><li>Style</li><li>Prüfen</li></ul>",
      "css": "li {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 2: Flexbox-Grundlage */\n.demo-target { display: flex; flex-wrap: wrap; gap: 12px; }",
      "controls": [
        {
          "kind": "select",
          "key": "justify-content",
          "label": "Ausrichtung",
          "value": "space-between",
          "options": [
            [
              "flex-start",
              "Start"
            ],
            [
              "center",
              "Mitte"
            ],
            [
              "space-between",
              "Verteilen"
            ]
          ]
        },
        {
          "kind": "range",
          "key": "gap",
          "label": "Abstand",
          "min": 0,
          "max": 40,
          "value": 16,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <li>.",
        "Prüfen Sie die Wirkung der für Tag 2 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-02-div": {
    "detail": "\n    <h3>&lt;div&gt;</h3>\n    <h4>Bedeutung</h4><p>Das div-Element ist ein allgemeiner Blockcontainer ohne eigene Bedeutung.</p>\n    <h4>Typische Verwendung</h4><p>Es wird genutzt, wenn kein semantisch passenderes Element existiert.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;div class=&quot;layout-box&quot;&gt;Inhalt&lt;/div&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>div\n.wrapper\n.layout-box</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-28-div\" id=\"demo-28-div-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-28-div\" id=\"demo-28-div-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-28-div\" id=\"demo-28-div-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-28-div\" id=\"demo-28-div-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-28-div\" id=\"demo-28-div-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-28-div-v1\">Standard</label><label class=\"tab-2\" for=\"demo-28-div-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-28-div-v3\">Layout</label><label class=\"tab-4\" for=\"demo-28-div-v4\">Karte</label><label class=\"tab-5\" for=\"demo-28-div-v5\">Kontrast</label></div>\n    <div class=\"preview\"><article class=\"demo-target demo-card\"><strong>&lt;div&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>div {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.div-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.div-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>div {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>div {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>div sollte nicht jedes semantische Element ersetzen.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-02-div\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;div&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>&lt;div&gt; sollte immer über Bedeutung und Zweck verstanden werden, nicht nur über die optische Darstellung.</li><li>Typische Fehler entstehen, wenn semantische Elemente durch allgemeine div-Container ersetzt werden.</li><li>Die CSS-Demo eignet sich gut, um Struktur und Gestaltung getrennt zu erklären.</li><li>Barrierefreiheit wird verständlicher, wenn Bedienung per Tastatur und Screenreader-Perspektive mitgedacht wird.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;div&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/div\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;div&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 2,
      "tag": "div",
      "title": "neutrale Blockcontainer vergleichen",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 2 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<article class=\"demo-target demo-card\"><strong>&lt;div&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article>",
      "css": "div {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 2: Flexbox-Grundlage */\n.demo-target { display: flex; flex-wrap: wrap; gap: 12px; }",
      "controls": [
        {
          "kind": "select",
          "key": "justify-content",
          "label": "Ausrichtung",
          "value": "space-between",
          "options": [
            [
              "flex-start",
              "Start"
            ],
            [
              "center",
              "Mitte"
            ],
            [
              "space-between",
              "Verteilen"
            ]
          ]
        },
        {
          "kind": "range",
          "key": "gap",
          "label": "Abstand",
          "min": 0,
          "max": 40,
          "value": 16,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <div>.",
        "Prüfen Sie die Wirkung der für Tag 2 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-02-section": {
    "detail": "\n    <h3>&lt;section&gt;</h3>\n    <h4>Bedeutung</h4><p>Das section-Element beschreibt einen thematischen Abschnitt.</p>\n    <h4>Typische Verwendung</h4><p>Es eignet sich für Kapitel, Tagesbereiche oder Inhaltsblöcke.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;section&gt;\n  &lt;h2&gt;Thema&lt;/h2&gt;\n  &lt;p&gt;Inhalt&lt;/p&gt;\n&lt;/section&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>section\n.section\n.section.highlight</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-29-section\" id=\"demo-29-section-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-29-section\" id=\"demo-29-section-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-29-section\" id=\"demo-29-section-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-29-section\" id=\"demo-29-section-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-29-section\" id=\"demo-29-section-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-29-section-v1\">Standard</label><label class=\"tab-2\" for=\"demo-29-section-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-29-section-v3\">Layout</label><label class=\"tab-4\" for=\"demo-29-section-v4\">Karte</label><label class=\"tab-5\" for=\"demo-29-section-v5\">Kontrast</label></div>\n    <div class=\"preview\"><section class=\"demo-target demo-section\"><strong>Abschnitt</strong><p>Ein thematischer Bereich.</p></section><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>section {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.section-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.section-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>section {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>section {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Eine section sollte in der Regel eine passende Überschrift besitzen.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-02-section\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;section&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>section braucht eine erkennbare thematische Bedeutung.</li><li>Eine section sollte meistens eine Überschrift besitzen.</li><li>Für rein optische Container ist div oft passender.</li><li>section hilft, lange Seiten fachlich zu gliedern.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;section&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/section\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;section&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 2,
      "tag": "section",
      "title": "einen thematischen Abschnitt gliedern",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 2 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<section class=\"demo-target demo-section\"><strong>Abschnitt</strong><p>Ein thematischer Bereich.</p></section>",
      "css": "section {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 2: Flexbox-Grundlage */\n.demo-target { display: flex; flex-wrap: wrap; gap: 12px; }",
      "controls": [
        {
          "kind": "select",
          "key": "justify-content",
          "label": "Ausrichtung",
          "value": "space-between",
          "options": [
            [
              "flex-start",
              "Start"
            ],
            [
              "center",
              "Mitte"
            ],
            [
              "space-between",
              "Verteilen"
            ]
          ]
        },
        {
          "kind": "range",
          "key": "gap",
          "label": "Abstand",
          "min": 0,
          "max": 40,
          "value": 16,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <section>.",
        "Prüfen Sie die Wirkung der für Tag 2 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-02-article": {
    "detail": "\n    <h3>&lt;article&gt;</h3>\n    <h4>Bedeutung</h4><p>Das article-Element beschreibt eigenständigen Inhalt.</p>\n    <h4>Typische Verwendung</h4><p>Typisch sind Karten, Beiträge, Meldungen oder Projektblöcke.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;article class=&quot;card&quot;&gt;\n  &lt;h2&gt;Karte&lt;/h2&gt;\n  &lt;p&gt;Text&lt;/p&gt;\n&lt;/article&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>article\n.card\n.card:hover</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-30-article\" id=\"demo-30-article-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-30-article\" id=\"demo-30-article-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-30-article\" id=\"demo-30-article-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-30-article\" id=\"demo-30-article-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-30-article\" id=\"demo-30-article-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-30-article-v1\">Standard</label><label class=\"tab-2\" for=\"demo-30-article-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-30-article-v3\">Layout</label><label class=\"tab-4\" for=\"demo-30-article-v4\">Karte</label><label class=\"tab-5\" for=\"demo-30-article-v5\">Kontrast</label></div>\n    <div class=\"preview\"><article class=\"demo-target demo-card\"><strong>&lt;article&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>article {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.article-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.article-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>article {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>article {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>article eignet sich gut für wiederverwendbare Inhaltskarten.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-02-article\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;article&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>article ist für eigenständige Inhalte gedacht.</li><li>Karten, Beiträge und News sind typische Beispiele.</li><li>Nicht jede Box ist automatisch ein article.</li><li>Hover-Effekte sollten Inhalt und Bedienbarkeit nicht überdecken.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>Eine Karte bauen lassen und fragen, ob sie auch außerhalb der Seite verständlich bleibt.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/article\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;article&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 2,
      "tag": "article",
      "title": "einen eigenständig verständlichen Beitrag gestalten",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 2 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<article class=\"demo-target demo-card\"><strong>&lt;article&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article>",
      "css": "article {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 2: Flexbox-Grundlage */\n.demo-target { display: flex; flex-wrap: wrap; gap: 12px; }",
      "controls": [
        {
          "kind": "select",
          "key": "justify-content",
          "label": "Ausrichtung",
          "value": "space-between",
          "options": [
            [
              "flex-start",
              "Start"
            ],
            [
              "center",
              "Mitte"
            ],
            [
              "space-between",
              "Verteilen"
            ]
          ]
        },
        {
          "kind": "range",
          "key": "gap",
          "label": "Abstand",
          "min": 0,
          "max": 40,
          "value": 16,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <article>.",
        "Prüfen Sie die Wirkung der für Tag 2 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-03-main": {
    "detail": "\n    <h3>&lt;main&gt;</h3>\n    <h4>Bedeutung</h4><p>Das main-Element enthält den Hauptinhalt der Seite.</p>\n    <h4>Typische Verwendung</h4><p>Es sollte pro Seite nur einmal verwendet werden.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;main&gt;\n  &lt;section&gt;...&lt;/section&gt;\n&lt;/main&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>main\n.page-main</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-31-main\" id=\"demo-31-main-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-31-main\" id=\"demo-31-main-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-31-main\" id=\"demo-31-main-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-31-main\" id=\"demo-31-main-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-31-main\" id=\"demo-31-main-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-31-main-v1\">Standard</label><label class=\"tab-2\" for=\"demo-31-main-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-31-main-v3\">Layout</label><label class=\"tab-4\" for=\"demo-31-main-v4\">Karte</label><label class=\"tab-5\" for=\"demo-31-main-v5\">Kontrast</label></div>\n    <div class=\"preview\"><article class=\"demo-target demo-card\"><strong>&lt;main&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>main {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.main-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.main-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>main {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>main {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>main hilft dabei, Hauptinhalt von Navigation und Fußbereich zu trennen.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-03-main\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;main&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>main sollte pro Seite nur einmal vorkommen.</li><li>Es grenzt Hauptinhalt von Navigation, Header und Footer ab.</li><li>Screenreader können direkt zum Hauptinhalt springen.</li><li>main ist kein Ersatz für jede beliebige Layoutbox.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>Header, Navigation, main und footer farbig markieren, damit die Seitenbereiche sichtbar werden.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/main\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;main&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 3,
      "tag": "main",
      "title": "den Hauptinhalt lesbar begrenzen",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 3 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<article class=\"demo-target demo-card\"><strong>&lt;main&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article>",
      "css": "main {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 3: Grid-Grundlage */\n.demo-target { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px; }",
      "controls": [
        {
          "kind": "select",
          "key": "grid-template-columns",
          "label": "Grid-Spalten",
          "value": "repeat(2, minmax(0, 1fr))",
          "options": [
            [
              "1fr",
              "Eine Spalte"
            ],
            [
              "repeat(2, minmax(0, 1fr))",
              "Zwei Spalten"
            ],
            [
              "repeat(3, minmax(0, 1fr))",
              "Drei Spalten"
            ]
          ]
        },
        {
          "kind": "range",
          "key": "gap",
          "label": "Grid-Abstand",
          "min": 0,
          "max": 40,
          "value": 16,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <main>.",
        "Prüfen Sie die Wirkung der für Tag 3 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-03-aside": {
    "detail": "\n    <h3>&lt;aside&gt;</h3>\n    <h4>Bedeutung</h4><p>Das aside-Element enthält ergänzende Inhalte.</p>\n    <h4>Typische Verwendung</h4><p>Typisch sind Sidebar, Infobox oder Zusatzhinweis.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;aside class=&quot;sidebar&quot;&gt;\n  &lt;h2&gt;Hinweis&lt;/h2&gt;\n&lt;/aside&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>aside\n.sidebar\n.info-box</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-32-aside\" id=\"demo-32-aside-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-32-aside\" id=\"demo-32-aside-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-32-aside\" id=\"demo-32-aside-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-32-aside\" id=\"demo-32-aside-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-32-aside\" id=\"demo-32-aside-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-32-aside-v1\">Standard</label><label class=\"tab-2\" for=\"demo-32-aside-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-32-aside-v3\">Layout</label><label class=\"tab-4\" for=\"demo-32-aside-v4\">Karte</label><label class=\"tab-5\" for=\"demo-32-aside-v5\">Kontrast</label></div>\n    <div class=\"preview\"><article class=\"demo-target demo-card\"><strong>&lt;aside&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>aside {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.aside-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.aside-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>aside {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>aside {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>aside ist ergänzend, nicht der zentrale Hauptinhalt.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-03-aside\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;aside&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>&lt;aside&gt; sollte immer über Bedeutung und Zweck verstanden werden, nicht nur über die optische Darstellung.</li><li>Typische Fehler entstehen, wenn semantische Elemente durch allgemeine div-Container ersetzt werden.</li><li>Die CSS-Demo eignet sich gut, um Struktur und Gestaltung getrennt zu erklären.</li><li>Barrierefreiheit wird verständlicher, wenn Bedienung per Tastatur und Screenreader-Perspektive mitgedacht wird.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;aside&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/aside\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;aside&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 3,
      "tag": "aside",
      "title": "ergänzende Inhalte sichtbar abgrenzen",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 3 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<article class=\"demo-target demo-card\"><strong>&lt;aside&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article>",
      "css": "aside {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 3: Grid-Grundlage */\n.demo-target { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px; }",
      "controls": [
        {
          "kind": "select",
          "key": "grid-template-columns",
          "label": "Grid-Spalten",
          "value": "repeat(2, minmax(0, 1fr))",
          "options": [
            [
              "1fr",
              "Eine Spalte"
            ],
            [
              "repeat(2, minmax(0, 1fr))",
              "Zwei Spalten"
            ],
            [
              "repeat(3, minmax(0, 1fr))",
              "Drei Spalten"
            ]
          ]
        },
        {
          "kind": "range",
          "key": "gap",
          "label": "Grid-Abstand",
          "min": 0,
          "max": 40,
          "value": 16,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <aside>.",
        "Prüfen Sie die Wirkung der für Tag 3 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-03-section": {
    "detail": "\n    <h3>&lt;section&gt;</h3>\n    <h4>Bedeutung</h4><p>Das section-Element beschreibt einen thematischen Abschnitt.</p>\n    <h4>Typische Verwendung</h4><p>Es eignet sich für Kapitel, Tagesbereiche oder Inhaltsblöcke.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;section&gt;\n  &lt;h2&gt;Thema&lt;/h2&gt;\n  &lt;p&gt;Inhalt&lt;/p&gt;\n&lt;/section&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>section\n.section\n.section.highlight</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-33-section\" id=\"demo-33-section-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-33-section\" id=\"demo-33-section-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-33-section\" id=\"demo-33-section-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-33-section\" id=\"demo-33-section-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-33-section\" id=\"demo-33-section-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-33-section-v1\">Standard</label><label class=\"tab-2\" for=\"demo-33-section-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-33-section-v3\">Layout</label><label class=\"tab-4\" for=\"demo-33-section-v4\">Karte</label><label class=\"tab-5\" for=\"demo-33-section-v5\">Kontrast</label></div>\n    <div class=\"preview\"><section class=\"demo-target demo-section\"><strong>Abschnitt</strong><p>Ein thematischer Bereich.</p></section><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>section {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.section-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.section-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>section {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>section {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Eine section sollte in der Regel eine passende Überschrift besitzen.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-03-section\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;section&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>section braucht eine erkennbare thematische Bedeutung.</li><li>Eine section sollte meistens eine Überschrift besitzen.</li><li>Für rein optische Container ist div oft passender.</li><li>section hilft, lange Seiten fachlich zu gliedern.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;section&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/section\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;section&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 3,
      "tag": "section",
      "title": "einen thematischen Abschnitt gliedern",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 3 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<section class=\"demo-target demo-section\"><strong>Abschnitt</strong><p>Ein thematischer Bereich.</p></section>",
      "css": "section {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 3: Grid-Grundlage */\n.demo-target { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px; }",
      "controls": [
        {
          "kind": "select",
          "key": "grid-template-columns",
          "label": "Grid-Spalten",
          "value": "repeat(2, minmax(0, 1fr))",
          "options": [
            [
              "1fr",
              "Eine Spalte"
            ],
            [
              "repeat(2, minmax(0, 1fr))",
              "Zwei Spalten"
            ],
            [
              "repeat(3, minmax(0, 1fr))",
              "Drei Spalten"
            ]
          ]
        },
        {
          "kind": "range",
          "key": "gap",
          "label": "Grid-Abstand",
          "min": 0,
          "max": 40,
          "value": 16,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <section>.",
        "Prüfen Sie die Wirkung der für Tag 3 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-03-article": {
    "detail": "\n    <h3>&lt;article&gt;</h3>\n    <h4>Bedeutung</h4><p>Das article-Element beschreibt eigenständigen Inhalt.</p>\n    <h4>Typische Verwendung</h4><p>Typisch sind Karten, Beiträge, Meldungen oder Projektblöcke.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;article class=&quot;card&quot;&gt;\n  &lt;h2&gt;Karte&lt;/h2&gt;\n  &lt;p&gt;Text&lt;/p&gt;\n&lt;/article&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>article\n.card\n.card:hover</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-34-article\" id=\"demo-34-article-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-34-article\" id=\"demo-34-article-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-34-article\" id=\"demo-34-article-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-34-article\" id=\"demo-34-article-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-34-article\" id=\"demo-34-article-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-34-article-v1\">Standard</label><label class=\"tab-2\" for=\"demo-34-article-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-34-article-v3\">Layout</label><label class=\"tab-4\" for=\"demo-34-article-v4\">Karte</label><label class=\"tab-5\" for=\"demo-34-article-v5\">Kontrast</label></div>\n    <div class=\"preview\"><article class=\"demo-target demo-card\"><strong>&lt;article&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>article {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.article-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.article-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>article {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>article {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>article eignet sich gut für wiederverwendbare Inhaltskarten.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-03-article\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;article&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>article ist für eigenständige Inhalte gedacht.</li><li>Karten, Beiträge und News sind typische Beispiele.</li><li>Nicht jede Box ist automatisch ein article.</li><li>Hover-Effekte sollten Inhalt und Bedienbarkeit nicht überdecken.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>Eine Karte bauen lassen und fragen, ob sie auch außerhalb der Seite verständlich bleibt.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/article\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;article&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 3,
      "tag": "article",
      "title": "einen eigenständig verständlichen Beitrag gestalten",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 3 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<article class=\"demo-target demo-card\"><strong>&lt;article&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article>",
      "css": "article {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 3: Grid-Grundlage */\n.demo-target { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px; }",
      "controls": [
        {
          "kind": "select",
          "key": "grid-template-columns",
          "label": "Grid-Spalten",
          "value": "repeat(2, minmax(0, 1fr))",
          "options": [
            [
              "1fr",
              "Eine Spalte"
            ],
            [
              "repeat(2, minmax(0, 1fr))",
              "Zwei Spalten"
            ],
            [
              "repeat(3, minmax(0, 1fr))",
              "Drei Spalten"
            ]
          ]
        },
        {
          "kind": "range",
          "key": "gap",
          "label": "Grid-Abstand",
          "min": 0,
          "max": 40,
          "value": 16,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <article>.",
        "Prüfen Sie die Wirkung der für Tag 3 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-03-div": {
    "detail": "\n    <h3>&lt;div&gt;</h3>\n    <h4>Bedeutung</h4><p>Das div-Element ist ein allgemeiner Blockcontainer ohne eigene Bedeutung.</p>\n    <h4>Typische Verwendung</h4><p>Es wird genutzt, wenn kein semantisch passenderes Element existiert.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;div class=&quot;layout-box&quot;&gt;Inhalt&lt;/div&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>div\n.wrapper\n.layout-box</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-35-div\" id=\"demo-35-div-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-35-div\" id=\"demo-35-div-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-35-div\" id=\"demo-35-div-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-35-div\" id=\"demo-35-div-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-35-div\" id=\"demo-35-div-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-35-div-v1\">Standard</label><label class=\"tab-2\" for=\"demo-35-div-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-35-div-v3\">Layout</label><label class=\"tab-4\" for=\"demo-35-div-v4\">Karte</label><label class=\"tab-5\" for=\"demo-35-div-v5\">Kontrast</label></div>\n    <div class=\"preview\"><article class=\"demo-target demo-card\"><strong>&lt;div&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>div {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.div-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.div-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>div {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>div {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>div sollte nicht jedes semantische Element ersetzen.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-03-div\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;div&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>&lt;div&gt; sollte immer über Bedeutung und Zweck verstanden werden, nicht nur über die optische Darstellung.</li><li>Typische Fehler entstehen, wenn semantische Elemente durch allgemeine div-Container ersetzt werden.</li><li>Die CSS-Demo eignet sich gut, um Struktur und Gestaltung getrennt zu erklären.</li><li>Barrierefreiheit wird verständlicher, wenn Bedienung per Tastatur und Screenreader-Perspektive mitgedacht wird.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;div&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/div\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;div&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 3,
      "tag": "div",
      "title": "neutrale Blockcontainer vergleichen",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 3 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<article class=\"demo-target demo-card\"><strong>&lt;div&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article>",
      "css": "div {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 3: Grid-Grundlage */\n.demo-target { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px; }",
      "controls": [
        {
          "kind": "select",
          "key": "grid-template-columns",
          "label": "Grid-Spalten",
          "value": "repeat(2, minmax(0, 1fr))",
          "options": [
            [
              "1fr",
              "Eine Spalte"
            ],
            [
              "repeat(2, minmax(0, 1fr))",
              "Zwei Spalten"
            ],
            [
              "repeat(3, minmax(0, 1fr))",
              "Drei Spalten"
            ]
          ]
        },
        {
          "kind": "range",
          "key": "gap",
          "label": "Grid-Abstand",
          "min": 0,
          "max": 40,
          "value": 16,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <div>.",
        "Prüfen Sie die Wirkung der für Tag 3 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-03-header": {
    "detail": "\n    <h3>&lt;header&gt;</h3>\n    <h4>Bedeutung</h4><p>Das header-Element kennzeichnet einen Kopfbereich.</p>\n    <h4>Typische Verwendung</h4><p>Es enthält häufig Logo, Überschrift, Einleitung oder Navigation.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;header class=&quot;site-header&quot;&gt;\n  &lt;h1&gt;Meine Seite&lt;/h1&gt;\n&lt;/header&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>header\n.site-header\nsection &gt; header</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-36-header\" id=\"demo-36-header-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-36-header\" id=\"demo-36-header-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-36-header\" id=\"demo-36-header-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-36-header\" id=\"demo-36-header-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-36-header\" id=\"demo-36-header-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-36-header-v1\">Standard</label><label class=\"tab-2\" for=\"demo-36-header-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-36-header-v3\">Layout</label><label class=\"tab-4\" for=\"demo-36-header-v4\">Karte</label><label class=\"tab-5\" for=\"demo-36-header-v5\">Kontrast</label></div>\n    <div class=\"preview\"><article class=\"demo-target demo-card\"><strong>&lt;header&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>header {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.header-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.header-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>header {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>header {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Ein header kann für die ganze Seite oder für einen Abschnitt stehen.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-03-header\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;header&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>&lt;header&gt; sollte immer über Bedeutung und Zweck verstanden werden, nicht nur über die optische Darstellung.</li><li>Typische Fehler entstehen, wenn semantische Elemente durch allgemeine div-Container ersetzt werden.</li><li>Die CSS-Demo eignet sich gut, um Struktur und Gestaltung getrennt zu erklären.</li><li>Barrierefreiheit wird verständlicher, wenn Bedienung per Tastatur und Screenreader-Perspektive mitgedacht wird.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;header&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/header\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;header&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 3,
      "tag": "header",
      "title": "einen klaren Kopfbereich gestalten",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 3 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<article class=\"demo-target demo-card\"><strong>&lt;header&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article>",
      "css": "header {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 3: Grid-Grundlage */\n.demo-target { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px; }",
      "controls": [
        {
          "kind": "select",
          "key": "grid-template-columns",
          "label": "Grid-Spalten",
          "value": "repeat(2, minmax(0, 1fr))",
          "options": [
            [
              "1fr",
              "Eine Spalte"
            ],
            [
              "repeat(2, minmax(0, 1fr))",
              "Zwei Spalten"
            ],
            [
              "repeat(3, minmax(0, 1fr))",
              "Drei Spalten"
            ]
          ]
        },
        {
          "kind": "range",
          "key": "gap",
          "label": "Grid-Abstand",
          "min": 0,
          "max": 40,
          "value": 16,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <header>.",
        "Prüfen Sie die Wirkung der für Tag 3 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-03-footer": {
    "detail": "\n    <h3>&lt;footer&gt;</h3>\n    <h4>Bedeutung</h4><p>Das footer-Element kennzeichnet einen Fußbereich.</p>\n    <h4>Typische Verwendung</h4><p>Dort stehen oft Zusatzinfos, Copyright, Kontakt oder Quellenangaben.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;footer&gt;\n  &lt;p&gt;Kontakt und Hinweise&lt;/p&gt;\n&lt;/footer&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>footer\n.site-footer</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-37-footer\" id=\"demo-37-footer-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-37-footer\" id=\"demo-37-footer-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-37-footer\" id=\"demo-37-footer-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-37-footer\" id=\"demo-37-footer-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-37-footer\" id=\"demo-37-footer-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-37-footer-v1\">Standard</label><label class=\"tab-2\" for=\"demo-37-footer-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-37-footer-v3\">Layout</label><label class=\"tab-4\" for=\"demo-37-footer-v4\">Karte</label><label class=\"tab-5\" for=\"demo-37-footer-v5\">Kontrast</label></div>\n    <div class=\"preview\"><article class=\"demo-target demo-card\"><strong>&lt;footer&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>footer {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.footer-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.footer-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>footer {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>footer {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Ein footer kann zur ganzen Seite oder zu einem article gehören.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-03-footer\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;footer&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>&lt;footer&gt; sollte immer über Bedeutung und Zweck verstanden werden, nicht nur über die optische Darstellung.</li><li>Typische Fehler entstehen, wenn semantische Elemente durch allgemeine div-Container ersetzt werden.</li><li>Die CSS-Demo eignet sich gut, um Struktur und Gestaltung getrennt zu erklären.</li><li>Barrierefreiheit wird verständlicher, wenn Bedienung per Tastatur und Screenreader-Perspektive mitgedacht wird.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;footer&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/footer\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;footer&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 3,
      "tag": "footer",
      "title": "Abschlussinformationen und Links strukturieren",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 3 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<article class=\"demo-target demo-card\"><strong>&lt;footer&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article>",
      "css": "footer {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 3: Grid-Grundlage */\n.demo-target { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px; }",
      "controls": [
        {
          "kind": "select",
          "key": "grid-template-columns",
          "label": "Grid-Spalten",
          "value": "repeat(2, minmax(0, 1fr))",
          "options": [
            [
              "1fr",
              "Eine Spalte"
            ],
            [
              "repeat(2, minmax(0, 1fr))",
              "Zwei Spalten"
            ],
            [
              "repeat(3, minmax(0, 1fr))",
              "Drei Spalten"
            ]
          ]
        },
        {
          "kind": "range",
          "key": "gap",
          "label": "Grid-Abstand",
          "min": 0,
          "max": 40,
          "value": 16,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <footer>.",
        "Prüfen Sie die Wirkung der für Tag 3 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-03-figure": {
    "detail": "\n    <h3>&lt;figure&gt;</h3>\n    <h4>Bedeutung</h4><p>Das figure-Element gruppiert Medien mit optionaler Beschriftung.</p>\n    <h4>Typische Verwendung</h4><p>Es wird für Bilder, Diagramme oder Codeabbildungen genutzt.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;figure&gt;\n  &lt;img src=&quot;bild.jpg&quot; alt=&quot;Beispiel&quot;&gt;\n  &lt;figcaption&gt;Beschreibung&lt;/figcaption&gt;\n&lt;/figure&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>figure\n.media-card\nfigure img</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-38-figure\" id=\"demo-38-figure-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-38-figure\" id=\"demo-38-figure-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-38-figure\" id=\"demo-38-figure-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-38-figure\" id=\"demo-38-figure-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-38-figure\" id=\"demo-38-figure-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-38-figure-v1\">Standard</label><label class=\"tab-2\" for=\"demo-38-figure-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-38-figure-v3\">Layout</label><label class=\"tab-4\" for=\"demo-38-figure-v4\">Karte</label><label class=\"tab-5\" for=\"demo-38-figure-v5\">Kontrast</label></div>\n    <div class=\"preview\"><figure class=\"demo-target demo-figure\"><div class=\"demo-image\">Bild</div><figcaption>Bildbeschreibung</figcaption></figure><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>figure {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.figure-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.figure-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>figure {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>figure {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>figure und figcaption halten Bild und Beschreibung zusammen.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-03-figure\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;figure&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>&lt;figure&gt; sollte immer über Bedeutung und Zweck verstanden werden, nicht nur über die optische Darstellung.</li><li>Typische Fehler entstehen, wenn semantische Elemente durch allgemeine div-Container ersetzt werden.</li><li>Die CSS-Demo eignet sich gut, um Struktur und Gestaltung getrennt zu erklären.</li><li>Barrierefreiheit wird verständlicher, wenn Bedienung per Tastatur und Screenreader-Perspektive mitgedacht wird.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;figure&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/figure\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;figure&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 3,
      "tag": "figure",
      "title": "Medium und Beschriftung zusammenhalten",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 3 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<figure class=\"demo-target demo-figure\"><div class=\"demo-image\">Bild</div><figcaption>Bildbeschreibung</figcaption></figure>",
      "css": "figure {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 3: Grid-Grundlage */\n.demo-target { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px; }",
      "controls": [
        {
          "kind": "select",
          "key": "grid-template-columns",
          "label": "Grid-Spalten",
          "value": "repeat(2, minmax(0, 1fr))",
          "options": [
            [
              "1fr",
              "Eine Spalte"
            ],
            [
              "repeat(2, minmax(0, 1fr))",
              "Zwei Spalten"
            ],
            [
              "repeat(3, minmax(0, 1fr))",
              "Drei Spalten"
            ]
          ]
        },
        {
          "kind": "range",
          "key": "gap",
          "label": "Grid-Abstand",
          "min": 0,
          "max": 40,
          "value": 16,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <figure>.",
        "Prüfen Sie die Wirkung der für Tag 3 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-03-figcaption": {
    "detail": "\n    <h3>&lt;figcaption&gt;</h3>\n    <h4>Bedeutung</h4><p>Das figcaption-Element ist die Beschriftung zu figure.</p>\n    <h4>Typische Verwendung</h4><p>Es erklärt oder benennt den zugehörigen Medieninhalt.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;figcaption&gt;Abbildung: CSS Box-Modell&lt;/figcaption&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>figcaption\nfigure figcaption</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-39-figcaption\" id=\"demo-39-figcaption-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-39-figcaption\" id=\"demo-39-figcaption-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-39-figcaption\" id=\"demo-39-figcaption-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-39-figcaption\" id=\"demo-39-figcaption-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-39-figcaption\" id=\"demo-39-figcaption-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-39-figcaption-v1\">Standard</label><label class=\"tab-2\" for=\"demo-39-figcaption-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-39-figcaption-v3\">Layout</label><label class=\"tab-4\" for=\"demo-39-figcaption-v4\">Karte</label><label class=\"tab-5\" for=\"demo-39-figcaption-v5\">Kontrast</label></div>\n    <div class=\"preview\"><figure class=\"demo-figure\"><div class=\"demo-image\">Bild</div><figcaption class=\"demo-target demo-caption\">Bildbeschreibung</figcaption></figure><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>figcaption {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.figcaption-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.figcaption-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>figcaption {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>figcaption {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Die Beschriftung sollte kurz und hilfreich sein.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-03-figcaption\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;figcaption&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>&lt;figcaption&gt; sollte immer über Bedeutung und Zweck verstanden werden, nicht nur über die optische Darstellung.</li><li>Typische Fehler entstehen, wenn semantische Elemente durch allgemeine div-Container ersetzt werden.</li><li>Die CSS-Demo eignet sich gut, um Struktur und Gestaltung getrennt zu erklären.</li><li>Barrierefreiheit wird verständlicher, wenn Bedienung per Tastatur und Screenreader-Perspektive mitgedacht wird.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;figcaption&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/figcaption\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;figcaption&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 3,
      "tag": "figcaption",
      "title": "eine zugehörige Medienbeschriftung gestalten",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 3 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<figure class=\"demo-figure\"><div class=\"demo-image\">Bild</div><figcaption class=\"demo-target demo-caption\">Bildbeschreibung</figcaption></figure>",
      "css": "figcaption {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 3: Grid-Grundlage */\n.demo-target { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px; }",
      "controls": [
        {
          "kind": "select",
          "key": "grid-template-columns",
          "label": "Grid-Spalten",
          "value": "repeat(2, minmax(0, 1fr))",
          "options": [
            [
              "1fr",
              "Eine Spalte"
            ],
            [
              "repeat(2, minmax(0, 1fr))",
              "Zwei Spalten"
            ],
            [
              "repeat(3, minmax(0, 1fr))",
              "Drei Spalten"
            ]
          ]
        },
        {
          "kind": "range",
          "key": "gap",
          "label": "Grid-Abstand",
          "min": 0,
          "max": 40,
          "value": 16,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <figcaption>.",
        "Prüfen Sie die Wirkung der für Tag 3 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-04-meta-viewport": {
    "detail": "\n    <h3>&lt;meta viewport&gt;</h3>\n    <h4>Bedeutung</h4><p>Der Viewport-Meta-Tag steuert die mobile Skalierung.</p>\n    <h4>Typische Verwendung</h4><p>Er sorgt dafür, dass responsive CSS-Regeln sinnvoll greifen.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><p class=\"selector-note\">Der Viewport-Meta-Tag ist nicht sichtbar. Er ermöglicht responsive Darstellung, die eigentliche Gestaltung erfolgt über CSS-Regeln für sichtbare Elemente.</p>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-40-meta-viewport\" id=\"demo-40-meta-viewport-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-40-meta-viewport\" id=\"demo-40-meta-viewport-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-40-meta-viewport\" id=\"demo-40-meta-viewport-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-40-meta-viewport\" id=\"demo-40-meta-viewport-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-40-meta-viewport\" id=\"demo-40-meta-viewport-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-40-meta-viewport-v1\">Standard</label><label class=\"tab-2\" for=\"demo-40-meta-viewport-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-40-meta-viewport-v3\">Layout</label><label class=\"tab-4\" for=\"demo-40-meta-viewport-v4\">Karte</label><label class=\"tab-5\" for=\"demo-40-meta-viewport-v5\">Kontrast</label></div>\n    <div class=\"preview\"><article class=\"demo-target demo-card\"><strong>&lt;meta viewport&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>meta viewport {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.meta-viewport-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.meta-viewport-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>meta viewport {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>meta viewport {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Ohne Viewport-Meta-Tag wirken mobile Seiten oft künstlich verkleinert.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-04-meta-viewport\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;meta viewport&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>&lt;meta viewport&gt; sollte immer über Bedeutung und Zweck verstanden werden, nicht nur über die optische Darstellung.</li><li>Typische Fehler entstehen, wenn semantische Elemente durch allgemeine div-Container ersetzt werden.</li><li>Die CSS-Demo eignet sich gut, um Struktur und Gestaltung getrennt zu erklären.</li><li>Barrierefreiheit wird verständlicher, wenn Bedienung per Tastatur und Screenreader-Perspektive mitgedacht wird.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;meta viewport&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Viewport_meta_tag\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;meta viewport&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 4,
      "tag": "meta",
      "title": "technische Metadaten korrekt einordnen",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 4 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<article class=\"document-effect\"><h2>Technische Metadaten</h2><p>Dieses Element ist nicht als gewöhnlicher Seiteninhalt sichtbar. Bearbeiten Sie die Erklärung und vergleichen Sie seine tatsächliche Aufgabe.</p><dl><dt>Element</dt><dd>&lt;meta&gt;</dd><dt>Wirkung</dt><dd>technische Metadaten korrekt einordnen</dd></dl></article>",
      "css": "meta viewport {\n  color: #12324a;\n  margin: 0;\n}",
      "controls": [
        {
          "kind": "range",
          "key": "font-size",
          "label": "Flexible Größe",
          "min": 14,
          "max": 38,
          "value": 20,
          "unit": "px"
        },
        {
          "kind": "select",
          "key": "flex-direction",
          "label": "Mobile Anordnung",
          "value": "row",
          "options": [
            [
              "row",
              "Nebeneinander"
            ],
            [
              "column",
              "Untereinander"
            ]
          ]
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <meta>.",
        "Prüfen Sie die Wirkung der für Tag 4 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-04-picture": {
    "detail": "\n    <h3>&lt;picture&gt;</h3>\n    <h4>Bedeutung</h4><p>Das picture-Element bietet alternative Bildquellen.</p>\n    <h4>Typische Verwendung</h4><p>Es wird genutzt, wenn je nach Breite oder Format andere Bilder passend sind.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;picture&gt;\n  &lt;source media=&quot;(min-width: 800px)&quot; srcset=&quot;gross.jpg&quot;&gt;\n  &lt;img src=&quot;klein.jpg&quot; alt=&quot;Beispiel&quot;&gt;\n&lt;/picture&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>picture\npicture img</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-41-picture\" id=\"demo-41-picture-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-41-picture\" id=\"demo-41-picture-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-41-picture\" id=\"demo-41-picture-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-41-picture\" id=\"demo-41-picture-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-41-picture\" id=\"demo-41-picture-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-41-picture-v1\">Standard</label><label class=\"tab-2\" for=\"demo-41-picture-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-41-picture-v3\">Layout</label><label class=\"tab-4\" for=\"demo-41-picture-v4\">Karte</label><label class=\"tab-5\" for=\"demo-41-picture-v5\">Kontrast</label></div>\n    <div class=\"preview\"><div class=\"demo-target demo-image\">Bild</div><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>picture {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.picture-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.picture-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>picture {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>picture {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>picture ersetzt nicht das alt-Attribut am img-Element.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-04-picture\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;picture&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>&lt;picture&gt; sollte immer über Bedeutung und Zweck verstanden werden, nicht nur über die optische Darstellung.</li><li>Typische Fehler entstehen, wenn semantische Elemente durch allgemeine div-Container ersetzt werden.</li><li>Die CSS-Demo eignet sich gut, um Struktur und Gestaltung getrennt zu erklären.</li><li>Barrierefreiheit wird verständlicher, wenn Bedienung per Tastatur und Screenreader-Perspektive mitgedacht wird.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;picture&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/picture\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;picture&gt;</a><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Learn/HTML/Multimedia_and_embedding/Responsive_images\" target=\"_blank\" rel=\"noopener noreferrer\">MDN Responsive images</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 4,
      "tag": "picture",
      "title": "responsive Bildauswahl strukturell nachvollziehen",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 4 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<figure><img class=\"demo-target demo-image\" src=\"data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 640 360%22%3E%3Crect width=%22640%22 height=%22360%22 fill=%22%2300abc7%22/%3E%3Ccircle cx=%22320%22 cy=%22140%22 r=%2270%22 fill=%22%23bdf77a%22/%3E%3Cpath d=%22M80 320l150-130 95 80 90-75 145 125z%22 fill=%22%23073f52%22/%3E%3C/svg%3E\" alt=\"Abstrakte Landschaft aus geometrischen Formen\"><figcaption>Responsives Bild mit Alternativtext</figcaption></figure>",
      "css": "picture {\n  color: #12324a;\n  margin: 0;\n}\n\n.demo-image { display:block; width:100%; max-width:420px; height:220px; object-fit:cover; border-radius:12px; }",
      "controls": [
        {
          "kind": "select",
          "key": "object-fit",
          "label": "Bildanpassung",
          "value": "cover",
          "options": [
            [
              "cover",
              "cover"
            ],
            [
              "contain",
              "contain"
            ],
            [
              "fill",
              "fill"
            ]
          ]
        },
        {
          "kind": "range",
          "key": "max-width",
          "label": "Maximale Breite",
          "min": 180,
          "max": 700,
          "value": 420,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <picture>.",
        "Prüfen Sie die Wirkung der für Tag 4 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-04-source": {
    "detail": "\n    <h3>&lt;source&gt;</h3>\n    <h4>Bedeutung</h4><p>Das source-Element definiert eine Medienquelle.</p>\n    <h4>Typische Verwendung</h4><p>Innerhalb von picture kann es unterschiedliche Bildvarianten anbieten.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;source media=&quot;(min-width: 800px)&quot; srcset=&quot;gross.jpg&quot;&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><p class=\"selector-note\">source ist ein nicht sichtbares Quellen-Element. Gestaltet wird das sichtbare img-, audio- oder video-Element.</p>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-42-source\" id=\"demo-42-source-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-42-source\" id=\"demo-42-source-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-42-source\" id=\"demo-42-source-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-42-source\" id=\"demo-42-source-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-42-source\" id=\"demo-42-source-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-42-source-v1\">Standard</label><label class=\"tab-2\" for=\"demo-42-source-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-42-source-v3\">Layout</label><label class=\"tab-4\" for=\"demo-42-source-v4\">Karte</label><label class=\"tab-5\" for=\"demo-42-source-v5\">Kontrast</label></div>\n    <div class=\"preview\"><article class=\"demo-target demo-card\"><strong>&lt;source&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>source {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.source-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.source-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>source {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>source {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>source selbst ist nicht sichtbar; sichtbar bleibt das img-Element.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-04-source\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;source&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>source ist nur eine Quelle innerhalb von picture, audio oder video.</li><li>Es ist nicht selbst sichtbar.</li><li>Die Reihenfolge der source-Elemente ist didaktisch wichtig.</li><li>Das fallback-img bleibt für Barrierefreiheit zentral.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;source&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/source\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;source&gt;</a><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Learn/HTML/Multimedia_and_embedding/Responsive_images\" target=\"_blank\" rel=\"noopener noreferrer\">MDN Responsive images</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 4,
      "tag": "source",
      "title": "Medienquellen und Bedingungen unterscheiden",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 4 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<figure><img class=\"demo-target demo-image\" src=\"data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 640 360%22%3E%3Crect width=%22640%22 height=%22360%22 fill=%22%2300abc7%22/%3E%3Ccircle cx=%22320%22 cy=%22140%22 r=%2270%22 fill=%22%23bdf77a%22/%3E%3Cpath d=%22M80 320l150-130 95 80 90-75 145 125z%22 fill=%22%23073f52%22/%3E%3C/svg%3E\" alt=\"Abstrakte Landschaft aus geometrischen Formen\"><figcaption>Responsives Bild mit Alternativtext</figcaption></figure>",
      "css": "source {\n  color: #12324a;\n  margin: 0;\n}\n\n.demo-image { display:block; width:100%; max-width:420px; height:220px; object-fit:cover; border-radius:12px; }",
      "controls": [
        {
          "kind": "select",
          "key": "object-fit",
          "label": "Bildanpassung",
          "value": "cover",
          "options": [
            [
              "cover",
              "cover"
            ],
            [
              "contain",
              "contain"
            ],
            [
              "fill",
              "fill"
            ]
          ]
        },
        {
          "kind": "range",
          "key": "max-width",
          "label": "Maximale Breite",
          "min": 180,
          "max": 700,
          "value": 420,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <source>.",
        "Prüfen Sie die Wirkung der für Tag 4 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-04-img": {
    "detail": "\n    <h3>&lt;img&gt;</h3>\n    <h4>Bedeutung</h4><p>Das img-Element bindet ein Bild ein.</p>\n    <h4>Typische Verwendung</h4><p>Das alt-Attribut beschreibt Inhalt oder Funktion des Bildes.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;img src=&quot;bild.jpg&quot; alt=&quot;Beispielbild&quot;&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>img\n.card img\nimg.responsive</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-43-img\" id=\"demo-43-img-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-43-img\" id=\"demo-43-img-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-43-img\" id=\"demo-43-img-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-43-img\" id=\"demo-43-img-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-43-img\" id=\"demo-43-img-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-43-img-v1\">Standard</label><label class=\"tab-2\" for=\"demo-43-img-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-43-img-v3\">Layout</label><label class=\"tab-4\" for=\"demo-43-img-v4\">Karte</label><label class=\"tab-5\" for=\"demo-43-img-v5\">Kontrast</label></div>\n    <div class=\"preview\"><div class=\"demo-target demo-image\">Bild</div><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>img {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.img-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.img-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>img {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>img {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Bilder sollten mit max-width:100% und height:auto flexibel bleiben.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-04-img\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;img&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>alt ist fachlich zentral für Barrierefreiheit.</li><li>CSS sollte Bilder responsiv halten: max-width:100% und height:auto.</li><li>width und height können Layout Shift reduzieren.</li><li>Dekorative Bilder können leeren alt-Text erhalten.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>Ein Bild einmal mit gutem alt-Text und einmal ohne sinnvolle Beschreibung vergleichen lassen.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/img\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;img&gt;</a><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Learn/HTML/Multimedia_and_embedding/Responsive_images\" target=\"_blank\" rel=\"noopener noreferrer\">MDN Responsive images</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 4,
      "tag": "img",
      "title": "alternative Beschreibung und responsive Bildfläche prüfen",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 4 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<figure><img class=\"demo-target demo-image\" src=\"data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 640 360%22%3E%3Crect width=%22640%22 height=%22360%22 fill=%22%2300abc7%22/%3E%3Ccircle cx=%22320%22 cy=%22140%22 r=%2270%22 fill=%22%23bdf77a%22/%3E%3Cpath d=%22M80 320l150-130 95 80 90-75 145 125z%22 fill=%22%23073f52%22/%3E%3C/svg%3E\" alt=\"Abstrakte Landschaft aus geometrischen Formen\"><figcaption>Responsives Bild mit Alternativtext</figcaption></figure>",
      "css": "img {\n  color: #12324a;\n  margin: 0;\n}\n\n.demo-image { display:block; width:100%; max-width:420px; height:220px; object-fit:cover; border-radius:12px; }",
      "controls": [
        {
          "kind": "select",
          "key": "object-fit",
          "label": "Bildanpassung",
          "value": "cover",
          "options": [
            [
              "cover",
              "cover"
            ],
            [
              "contain",
              "contain"
            ],
            [
              "fill",
              "fill"
            ]
          ]
        },
        {
          "kind": "range",
          "key": "max-width",
          "label": "Maximale Breite",
          "min": 180,
          "max": 700,
          "value": 420,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <img>.",
        "Prüfen Sie die Wirkung der für Tag 4 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-04-nav": {
    "detail": "\n    <h3>&lt;nav&gt;</h3>\n    <h4>Bedeutung</h4><p>Das nav-Element kennzeichnet zentrale Navigation.</p>\n    <h4>Typische Verwendung</h4><p>Es enthält wichtige Links zu Bereichen oder Seitenabschnitten.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;nav aria-label=&quot;Tagesnavigation&quot;&gt;\n  &lt;a href=&quot;#tag1&quot;&gt;Tag 1&lt;/a&gt;\n&lt;/nav&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>nav\n.main-nav\nnav a</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-44-nav\" id=\"demo-44-nav-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-44-nav\" id=\"demo-44-nav-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-44-nav\" id=\"demo-44-nav-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-44-nav\" id=\"demo-44-nav-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-44-nav\" id=\"demo-44-nav-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-44-nav-v1\">Standard</label><label class=\"tab-2\" for=\"demo-44-nav-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-44-nav-v3\">Layout</label><label class=\"tab-4\" for=\"demo-44-nav-v4\">Karte</label><label class=\"tab-5\" for=\"demo-44-nav-v5\">Kontrast</label></div>\n    <div class=\"preview\"><nav class=\"demo-target demo-nav\"><a href=\"#einfuehrung\" data-course-placeholder=\"true\">Start</a><a href=\"#einfuehrung\" data-course-placeholder=\"true\">Tags</a><a href=\"#einfuehrung\" data-course-placeholder=\"true\">Kontakt</a></nav><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>nav {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.nav-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.nav-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>nav {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>nav {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Nicht jede Linkliste muss nav sein; nav ist für zentrale Navigation gedacht.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-04-nav\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;nav&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>nav ist für zentrale Navigationsblöcke gedacht.</li><li>Nicht jede Linkliste ist automatisch eine Navigation.</li><li>aria-label hilft, mehrere Navigationen unterscheidbar zu machen.</li><li>Flexbox eignet sich gut zur Darstellung.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>Eine normale Linkliste zeigen und erst danach erklären, wann daraus ein nav-Bereich wird.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/nav\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;nav&gt;</a><a class=\"teacher-link secondary\" href=\"https://www.w3.org/WAI/ARIA/apg/practices/landmark-regions/\" target=\"_blank\" rel=\"noopener noreferrer\">WAI Landmarks</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 4,
      "tag": "nav",
      "title": "eine bedienbare Navigation anordnen",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 4 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<nav class=\"demo-target demo-nav\"><a href=\"#einfuehrung\" data-course-placeholder=\"true\">Start</a><a href=\"#einfuehrung\" data-course-placeholder=\"true\">Tags</a><a href=\"#einfuehrung\" data-course-placeholder=\"true\">Kontakt</a></nav>",
      "css": "nav {\n  color: #12324a;\n  margin: 0;\n}",
      "controls": [
        {
          "kind": "range",
          "key": "font-size",
          "label": "Flexible Größe",
          "min": 14,
          "max": 38,
          "value": 20,
          "unit": "px"
        },
        {
          "kind": "select",
          "key": "flex-direction",
          "label": "Mobile Anordnung",
          "value": "row",
          "options": [
            [
              "row",
              "Nebeneinander"
            ],
            [
              "column",
              "Untereinander"
            ]
          ]
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <nav>.",
        "Prüfen Sie die Wirkung der für Tag 4 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-04-button": {
    "detail": "\n    <h3>&lt;button&gt;</h3>\n    <h4>Bedeutung</h4><p>Das button-Element beschreibt eine Schaltfläche für eine Aktion.</p>\n    <h4>Typische Verwendung</h4><p>Buttons werden für Formulare und Bedienaktionen verwendet.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;button type=&quot;button&quot;&gt;Mehr erfahren&lt;/button&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>button\n.btn\nbutton:hover\nbutton:focus-visible</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-45-button\" id=\"demo-45-button-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-45-button\" id=\"demo-45-button-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-45-button\" id=\"demo-45-button-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-45-button\" id=\"demo-45-button-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-45-button\" id=\"demo-45-button-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-45-button-v1\">Standard</label><label class=\"tab-2\" for=\"demo-45-button-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-45-button-v3\">Layout</label><label class=\"tab-4\" for=\"demo-45-button-v4\">Karte</label><label class=\"tab-5\" for=\"demo-45-button-v5\">Kontrast</label></div>\n    <div class=\"preview\"><button class=\"demo-target demo-button\" type=\"button\">Mehr erfahren</button><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>button {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.button-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.button-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>button {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>button {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Ein button sollte immer einen passenden type besitzen.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-04-button\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;button&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>Ein button löst eine Aktion aus, während ein a-Element zu einem Ziel navigiert.</li><li>In Formularen ist type wichtig, weil button ohne type im Formular-Kontext submit sein kann.</li><li>Fokuszustände sind wichtig für Tastaturbedienung.</li><li>Hover allein reicht nicht, weil Touchgeräte keinen klassischen Hover besitzen.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>Button und Link direkt gegenüberstellen: Navigieren = a, Aktion auslösen = button.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/button\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;button&gt;</a><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/CSS/:hover\" target=\"_blank\" rel=\"noopener noreferrer\">MDN :hover</a><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/CSS/:focus-visible\" target=\"_blank\" rel=\"noopener noreferrer\">MDN :focus-visible</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 4,
      "tag": "button",
      "title": "Button-Typ, Fokus und Zustände prüfen",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 4 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<button class=\"demo-target demo-button\" type=\"button\">Mehr erfahren</button>",
      "css": "button {\n  color: #12324a;\n  margin: 0;\n}",
      "controls": [
        {
          "kind": "range",
          "key": "font-size",
          "label": "Flexible Größe",
          "min": 14,
          "max": 38,
          "value": 20,
          "unit": "px"
        },
        {
          "kind": "select",
          "key": "flex-direction",
          "label": "Mobile Anordnung",
          "value": "row",
          "options": [
            [
              "row",
              "Nebeneinander"
            ],
            [
              "column",
              "Untereinander"
            ]
          ]
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <button>.",
        "Prüfen Sie die Wirkung der für Tag 4 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-04-section": {
    "detail": "\n    <h3>&lt;section&gt;</h3>\n    <h4>Bedeutung</h4><p>Das section-Element beschreibt einen thematischen Abschnitt.</p>\n    <h4>Typische Verwendung</h4><p>Es eignet sich für Kapitel, Tagesbereiche oder Inhaltsblöcke.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;section&gt;\n  &lt;h2&gt;Thema&lt;/h2&gt;\n  &lt;p&gt;Inhalt&lt;/p&gt;\n&lt;/section&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>section\n.section\n.section.highlight</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-46-section\" id=\"demo-46-section-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-46-section\" id=\"demo-46-section-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-46-section\" id=\"demo-46-section-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-46-section\" id=\"demo-46-section-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-46-section\" id=\"demo-46-section-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-46-section-v1\">Standard</label><label class=\"tab-2\" for=\"demo-46-section-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-46-section-v3\">Layout</label><label class=\"tab-4\" for=\"demo-46-section-v4\">Karte</label><label class=\"tab-5\" for=\"demo-46-section-v5\">Kontrast</label></div>\n    <div class=\"preview\"><section class=\"demo-target demo-section\"><strong>Abschnitt</strong><p>Ein thematischer Bereich.</p></section><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>section {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.section-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.section-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>section {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>section {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Eine section sollte in der Regel eine passende Überschrift besitzen.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-04-section\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;section&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>section braucht eine erkennbare thematische Bedeutung.</li><li>Eine section sollte meistens eine Überschrift besitzen.</li><li>Für rein optische Container ist div oft passender.</li><li>section hilft, lange Seiten fachlich zu gliedern.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;section&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/section\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;section&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 4,
      "tag": "section",
      "title": "einen thematischen Abschnitt gliedern",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 4 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<section class=\"demo-target demo-section\"><strong>Abschnitt</strong><p>Ein thematischer Bereich.</p></section>",
      "css": "section {\n  color: #12324a;\n  margin: 0;\n}",
      "controls": [
        {
          "kind": "range",
          "key": "font-size",
          "label": "Flexible Größe",
          "min": 14,
          "max": 38,
          "value": 20,
          "unit": "px"
        },
        {
          "kind": "select",
          "key": "flex-direction",
          "label": "Mobile Anordnung",
          "value": "row",
          "options": [
            [
              "row",
              "Nebeneinander"
            ],
            [
              "column",
              "Untereinander"
            ]
          ]
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <section>.",
        "Prüfen Sie die Wirkung der für Tag 4 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-04-main": {
    "detail": "\n    <h3>&lt;main&gt;</h3>\n    <h4>Bedeutung</h4><p>Das main-Element enthält den Hauptinhalt der Seite.</p>\n    <h4>Typische Verwendung</h4><p>Es sollte pro Seite nur einmal verwendet werden.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;main&gt;\n  &lt;section&gt;...&lt;/section&gt;\n&lt;/main&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>main\n.page-main</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-47-main\" id=\"demo-47-main-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-47-main\" id=\"demo-47-main-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-47-main\" id=\"demo-47-main-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-47-main\" id=\"demo-47-main-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-47-main\" id=\"demo-47-main-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-47-main-v1\">Standard</label><label class=\"tab-2\" for=\"demo-47-main-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-47-main-v3\">Layout</label><label class=\"tab-4\" for=\"demo-47-main-v4\">Karte</label><label class=\"tab-5\" for=\"demo-47-main-v5\">Kontrast</label></div>\n    <div class=\"preview\"><article class=\"demo-target demo-card\"><strong>&lt;main&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>main {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.main-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.main-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>main {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>main {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>main hilft dabei, Hauptinhalt von Navigation und Fußbereich zu trennen.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-04-main\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;main&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>main sollte pro Seite nur einmal vorkommen.</li><li>Es grenzt Hauptinhalt von Navigation, Header und Footer ab.</li><li>Screenreader können direkt zum Hauptinhalt springen.</li><li>main ist kein Ersatz für jede beliebige Layoutbox.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>Header, Navigation, main und footer farbig markieren, damit die Seitenbereiche sichtbar werden.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/main\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;main&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 4,
      "tag": "main",
      "title": "den Hauptinhalt lesbar begrenzen",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 4 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<article class=\"demo-target demo-card\"><strong>&lt;main&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article>",
      "css": "main {\n  color: #12324a;\n  margin: 0;\n}",
      "controls": [
        {
          "kind": "range",
          "key": "font-size",
          "label": "Flexible Größe",
          "min": 14,
          "max": 38,
          "value": 20,
          "unit": "px"
        },
        {
          "kind": "select",
          "key": "flex-direction",
          "label": "Mobile Anordnung",
          "value": "row",
          "options": [
            [
              "row",
              "Nebeneinander"
            ],
            [
              "column",
              "Untereinander"
            ]
          ]
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <main>.",
        "Prüfen Sie die Wirkung der für Tag 4 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-05-style": {
    "detail": "\n    <h3>&lt;style&gt;</h3>\n    <h4>Bedeutung</h4><p>Das style-Element enthält CSS direkt im HTML-Dokument.</p>\n    <h4>Typische Verwendung</h4><p>Für diese eigenständige Datei liegt das CSS im style-Bereich.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;style&gt;\n  body { font-family: Arial, sans-serif; }\n&lt;/style&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><p class=\"selector-note\">Das style-Element enthält CSS-Regeln, wird aber nicht als sichtbarer Seiteninhalt gerendert und deshalb nicht direkt gestaltet.</p>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-48-style\" id=\"demo-48-style-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-48-style\" id=\"demo-48-style-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-48-style\" id=\"demo-48-style-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-48-style\" id=\"demo-48-style-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-48-style\" id=\"demo-48-style-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-48-style-v1\">Standard</label><label class=\"tab-2\" for=\"demo-48-style-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-48-style-v3\">Layout</label><label class=\"tab-4\" for=\"demo-48-style-v4\">Karte</label><label class=\"tab-5\" for=\"demo-48-style-v5\">Kontrast</label></div>\n    <div class=\"preview\"><article class=\"demo-target demo-card\"><strong>&lt;style&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>style {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.style-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.style-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>style {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>style {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Für große Projekte ist externe CSS-Struktur oft übersichtlicher.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-05-style\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;style&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>style enthält interne CSS-Regeln.</li><li>Für kleine Demos ist intern sinnvoll, für Projekte oft externe Struktur.</li><li>Das Element selbst wird nicht gestaltet, sondern enthält Gestaltung.</li><li>Hier lässt sich CSS-Spezifität direkt zeigen.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;style&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/style\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;style&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 5,
      "tag": "style",
      "title": "lokale CSS-Regeln und Kaskade nachvollziehen",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 5 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<article class=\"demo-target demo-card\"><strong>&lt;style&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article>",
      "css": "style {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 5: zentrale Variablen */\n:root { --lab-accent: #006f85; --lab-space: 14px; }\n.demo-target, input, textarea, select, button, fieldset { border-color: var(--lab-accent); padding: var(--lab-space); }",
      "controls": [
        {
          "kind": "select",
          "key": "font-family",
          "label": "Fallback-Kette",
          "value": "Arial, sans-serif",
          "options": [
            [
              "Arial, sans-serif",
              "System Sans"
            ],
            [
              "Georgia, serif",
              "Serif"
            ],
            [
              "Consolas, monospace",
              "Monospace"
            ]
          ]
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <style>.",
        "Prüfen Sie die Wirkung der für Tag 5 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-05-link": {
    "detail": "\n    <h3>&lt;link&gt;</h3>\n    <h4>Bedeutung</h4><p>Das link-Element verknüpft Dokumente mit Ressourcen.</p>\n    <h4>Typische Verwendung</h4><p>In Projekten bindet es häufig CSS ein; in dieser Datei bleibt CSS intern.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;link rel=&quot;stylesheet&quot; href=&quot;styles.css&quot;&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><p class=\"selector-note\">Das link-Element selbst wird nicht sichtbar gestaltet. Es verbindet ein Dokument mit Ressourcen; die Gestaltung betrifft die geladenen oder sichtbaren Inhalte.</p>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-49-link\" id=\"demo-49-link-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-49-link\" id=\"demo-49-link-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-49-link\" id=\"demo-49-link-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-49-link\" id=\"demo-49-link-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-49-link\" id=\"demo-49-link-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-49-link-v1\">Standard</label><label class=\"tab-2\" for=\"demo-49-link-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-49-link-v3\">Layout</label><label class=\"tab-4\" for=\"demo-49-link-v4\">Karte</label><label class=\"tab-5\" for=\"demo-49-link-v5\">Kontrast</label></div>\n    <div class=\"preview\"><article class=\"demo-target demo-card\"><strong>&lt;link&gt;</strong><p>Beispielinhalt für Gestaltung.</p></article><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>link {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.link-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.link-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>link {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>link {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Für diese Übersicht wird kein echtes externes Stylesheet eingebunden.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-05-link\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;link&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>link verbindet Ressourcen mit dem Dokument.</li><li>In dieser Datei wird bewusst kein externes Stylesheet verwendet.</li><li>Der Unterschied zwischen a und link ist wichtig: a ist Navigation, link ist Dokumentbeziehung.</li><li>rel und href müssen zusammen verstanden werden.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;link&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/link\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;link&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 5,
      "tag": "link",
      "title": "lokale Ressourcenbeziehungen nachvollziehen",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 5 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<article class=\"document-effect\"><h2>Lokale Ressourcenbeziehung</h2><p>Dieses Element ist nicht als gewöhnlicher Seiteninhalt sichtbar. Bearbeiten Sie die Erklärung und vergleichen Sie seine tatsächliche Aufgabe.</p><dl><dt>Element</dt><dd>&lt;link&gt;</dd><dt>Wirkung</dt><dd>lokale Ressourcenbeziehungen nachvollziehen</dd></dl></article>",
      "css": "link {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 5: zentrale Variablen */\n:root { --lab-accent: #006f85; --lab-space: 14px; }\n.demo-target, input, textarea, select, button, fieldset { border-color: var(--lab-accent); padding: var(--lab-space); }",
      "controls": [
        {
          "kind": "select",
          "key": "font-family",
          "label": "Fallback-Kette",
          "value": "Arial, sans-serif",
          "options": [
            [
              "Arial, sans-serif",
              "System Sans"
            ],
            [
              "Georgia, serif",
              "Serif"
            ],
            [
              "Consolas, monospace",
              "Monospace"
            ]
          ]
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <link>.",
        "Prüfen Sie die Wirkung der für Tag 5 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-05-form": {
    "detail": "\n    <h3>&lt;form&gt;</h3>\n    <h4>Bedeutung</h4><p>Das form-Element gruppiert Formularfelder.</p>\n    <h4>Typische Verwendung</h4><p>Es bildet den Rahmen für Eingaben und Absenden von Daten.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;form&gt;\n  &lt;label for=&quot;name&quot;&gt;Name&lt;/label&gt;\n  &lt;input id=&quot;name&quot; name=&quot;name&quot;&gt;\n&lt;/form&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>form\n.contact-form\nform input</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-50-form\" id=\"demo-50-form-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-50-form\" id=\"demo-50-form-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-50-form\" id=\"demo-50-form-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-50-form\" id=\"demo-50-form-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-50-form\" id=\"demo-50-form-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-50-form-v1\">Standard</label><label class=\"tab-2\" for=\"demo-50-form-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-50-form-v3\">Layout</label><label class=\"tab-4\" for=\"demo-50-form-v4\">Karte</label><label class=\"tab-5\" for=\"demo-50-form-v5\">Kontrast</label></div>\n    <div class=\"preview\"><form class=\"demo-target demo-form\"><label>Name</label><input placeholder=\"Max\"><button type=\"button\">Senden</button></form><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>form {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.form-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.form-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>form {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>form {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Formulare brauchen klare Labels und sichtbare Fokuszustände.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-05-form\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;form&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>Formulare brauchen klare Labels.</li><li>input-Felder sollten passende type-Werte erhalten.</li><li>Fokuszustände müssen sichtbar sein.</li><li>fieldset und legend helfen bei gruppierten Feldern.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>Ein Feld ohne Label öffnen lassen und anschließend Bedienbarkeit mit Label vergleichen.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/form\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;form&gt;</a><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/label\" target=\"_blank\" rel=\"noopener noreferrer\">MDN label</a><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input\" target=\"_blank\" rel=\"noopener noreferrer\">MDN input</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 5,
      "tag": "form",
      "title": "ein Formular semantisch und lesbar strukturieren",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 5 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<form class=\"demo-target demo-form\"><label>Name</label><input placeholder=\"Max\"><button type=\"button\">Senden</button></form>",
      "css": "form {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 5: zentrale Variablen */\n:root { --lab-accent: #006f85; --lab-space: 14px; }\n.demo-target, input, textarea, select, button, fieldset { border-color: var(--lab-accent); padding: var(--lab-space); }",
      "controls": [
        {
          "kind": "color",
          "key": "--lab-accent",
          "label": "Akzentvariable",
          "value": "#006f85"
        },
        {
          "kind": "range",
          "key": "--lab-space",
          "label": "Abstandsvariable",
          "min": 6,
          "max": 32,
          "value": 14,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <form>.",
        "Prüfen Sie die Wirkung der für Tag 5 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-05-label": {
    "detail": "\n    <h3>&lt;label&gt;</h3>\n    <h4>Bedeutung</h4><p>Das label-Element beschriftet ein Formularfeld.</p>\n    <h4>Typische Verwendung</h4><p>Über for wird es mit einer id verbunden.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;label for=&quot;email&quot;&gt;E-Mail&lt;/label&gt;\n&lt;input id=&quot;email&quot; type=&quot;email&quot;&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>label\n.form-label\nlabel.required</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-51-label\" id=\"demo-51-label-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-51-label\" id=\"demo-51-label-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-51-label\" id=\"demo-51-label-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-51-label\" id=\"demo-51-label-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-51-label\" id=\"demo-51-label-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-51-label-v1\">Standard</label><label class=\"tab-2\" for=\"demo-51-label-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-51-label-v3\">Layout</label><label class=\"tab-4\" for=\"demo-51-label-v4\">Karte</label><label class=\"tab-5\" for=\"demo-51-label-v5\">Kontrast</label></div>\n    <div class=\"preview\"><div class=\"demo-form\"><label class=\"demo-target demo-label\">E-Mail</label><input placeholder=\"name@example.de\"></div><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>label {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.label-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.label-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>label {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>label {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Ein Klick auf das Label fokussiert das passende Feld.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-05-label\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;label&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>Labels verbinden sichtbare Beschriftung mit Formularfeldern.</li><li>for und id müssen zusammenpassen.</li><li>Pflichtfelder sollten verständlich gekennzeichnet werden.</li><li>Labels verbessern Maus-, Touch- und Tastaturbedienung.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;label&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/label\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;label&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 5,
      "tag": "label",
      "title": "for und id korrekt miteinander verbinden",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 5 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<div class=\"demo-form\"><label class=\"demo-target demo-label\">E-Mail</label><input placeholder=\"name@example.de\"></div>",
      "css": "label {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 5: zentrale Variablen */\n:root { --lab-accent: #006f85; --lab-space: 14px; }\n.demo-target, input, textarea, select, button, fieldset { border-color: var(--lab-accent); padding: var(--lab-space); }",
      "controls": [
        {
          "kind": "color",
          "key": "--lab-accent",
          "label": "Akzentvariable",
          "value": "#006f85"
        },
        {
          "kind": "range",
          "key": "--lab-space",
          "label": "Abstandsvariable",
          "min": 6,
          "max": 32,
          "value": 14,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <label>.",
        "Prüfen Sie die Wirkung der für Tag 5 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-05-input": {
    "detail": "\n    <h3>&lt;input&gt;</h3>\n    <h4>Bedeutung</h4><p>Das input-Element nimmt kurze Eingaben auf.</p>\n    <h4>Typische Verwendung</h4><p>Der type bestimmt Art und Verhalten des Feldes.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;input type=&quot;email&quot; placeholder=&quot;name@example.de&quot;&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>input\ninput:focus\ninput[aria-invalid=&quot;true&quot;]</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-52-input\" id=\"demo-52-input-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-52-input\" id=\"demo-52-input-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-52-input\" id=\"demo-52-input-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-52-input\" id=\"demo-52-input-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-52-input\" id=\"demo-52-input-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-52-input-v1\">Standard</label><label class=\"tab-2\" for=\"demo-52-input-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-52-input-v3\">Layout</label><label class=\"tab-4\" for=\"demo-52-input-v4\">Karte</label><label class=\"tab-5\" for=\"demo-52-input-v5\">Kontrast</label></div>\n    <div class=\"preview\"><input class=\"demo-target demo-input\" placeholder=\"Eingabe\"><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>input {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.input-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.input-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>input {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>input {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Passende Typen verbessern Bedienbarkeit und Validierung.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-05-input\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;input&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>Passende input-Typen verbessern Bedienbarkeit und Validierung.</li><li>Ein input braucht ein zugeordnetes label.</li><li>Fehlerzustände sollten nicht nur über Farbe kommuniziert werden.</li><li>Fokuszustände müssen klar sichtbar sein.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>Verschiedene type-Werte im Browser testen: text, email, number und checkbox.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;input&gt;</a><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/CSS/:focus-visible\" target=\"_blank\" rel=\"noopener noreferrer\">MDN :focus-visible</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 5,
      "tag": "input",
      "title": "Eingabetypen und Fokuszustände vergleichen",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 5 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<input class=\"demo-target demo-input\" placeholder=\"Eingabe\">",
      "css": "input {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 5: zentrale Variablen */\n:root { --lab-accent: #006f85; --lab-space: 14px; }\n.demo-target, input, textarea, select, button, fieldset { border-color: var(--lab-accent); padding: var(--lab-space); }",
      "controls": [
        {
          "kind": "color",
          "key": "--lab-accent",
          "label": "Akzentvariable",
          "value": "#006f85"
        },
        {
          "kind": "range",
          "key": "--lab-space",
          "label": "Abstandsvariable",
          "min": 6,
          "max": 32,
          "value": 14,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <input>.",
        "Prüfen Sie die Wirkung der für Tag 5 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-05-textarea": {
    "detail": "\n    <h3>&lt;textarea&gt;</h3>\n    <h4>Bedeutung</h4><p>Das textarea-Element nimmt mehrzeiligen Text auf.</p>\n    <h4>Typische Verwendung</h4><p>Es eignet sich für Nachrichten, Notizen und Kommentare.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;textarea rows=&quot;4&quot;&gt;Nachricht&lt;/textarea&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>textarea\ntextarea:focus</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-53-textarea\" id=\"demo-53-textarea-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-53-textarea\" id=\"demo-53-textarea-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-53-textarea\" id=\"demo-53-textarea-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-53-textarea\" id=\"demo-53-textarea-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-53-textarea\" id=\"demo-53-textarea-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-53-textarea-v1\">Standard</label><label class=\"tab-2\" for=\"demo-53-textarea-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-53-textarea-v3\">Layout</label><label class=\"tab-4\" for=\"demo-53-textarea-v4\">Karte</label><label class=\"tab-5\" for=\"demo-53-textarea-v5\">Kontrast</label></div>\n    <div class=\"preview\"><textarea class=\"demo-target demo-textarea\" rows=\"3\">Mehrzeiliger Text</textarea><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>textarea {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.textarea-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.textarea-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>textarea {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>textarea {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Die Höhe sollte zur erwarteten Eingabe passen.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-05-textarea\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;textarea&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>&lt;textarea&gt; sollte immer über Bedeutung und Zweck verstanden werden, nicht nur über die optische Darstellung.</li><li>Typische Fehler entstehen, wenn semantische Elemente durch allgemeine div-Container ersetzt werden.</li><li>Die CSS-Demo eignet sich gut, um Struktur und Gestaltung getrennt zu erklären.</li><li>Barrierefreiheit wird verständlicher, wenn Bedienung per Tastatur und Screenreader-Perspektive mitgedacht wird.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;textarea&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/textarea\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;textarea&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 5,
      "tag": "textarea",
      "title": "mehrzeilige Eingabe und Größenverhalten prüfen",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 5 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<textarea class=\"demo-target demo-textarea\" rows=\"3\">Mehrzeiliger Text</textarea>",
      "css": "textarea {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 5: zentrale Variablen */\n:root { --lab-accent: #006f85; --lab-space: 14px; }\n.demo-target, input, textarea, select, button, fieldset { border-color: var(--lab-accent); padding: var(--lab-space); }",
      "controls": [
        {
          "kind": "color",
          "key": "--lab-accent",
          "label": "Akzentvariable",
          "value": "#006f85"
        },
        {
          "kind": "range",
          "key": "--lab-space",
          "label": "Abstandsvariable",
          "min": 6,
          "max": 32,
          "value": 14,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <textarea>.",
        "Prüfen Sie die Wirkung der für Tag 5 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-05-select": {
    "detail": "\n    <h3>&lt;select&gt;</h3>\n    <h4>Bedeutung</h4><p>Das select-Element erstellt eine Auswahlliste.</p>\n    <h4>Typische Verwendung</h4><p>Es wird verwendet, wenn aus mehreren Optionen gewählt werden soll.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;select&gt;\n  &lt;option&gt;Tag 1&lt;/option&gt;\n&lt;/select&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>select\nselect:focus</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-54-select\" id=\"demo-54-select-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-54-select\" id=\"demo-54-select-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-54-select\" id=\"demo-54-select-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-54-select\" id=\"demo-54-select-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-54-select\" id=\"demo-54-select-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-54-select-v1\">Standard</label><label class=\"tab-2\" for=\"demo-54-select-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-54-select-v3\">Layout</label><label class=\"tab-4\" for=\"demo-54-select-v4\">Karte</label><label class=\"tab-5\" for=\"demo-54-select-v5\">Kontrast</label></div>\n    <div class=\"preview\"><select class=\"demo-target demo-select\"><option>Tag 1</option><option>Tag 2</option></select><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>select {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.select-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.select-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>select {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>select {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Bei sehr wenigen Optionen können Radio-Buttons übersichtlicher sein.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-05-select\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;select&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>&lt;select&gt; sollte immer über Bedeutung und Zweck verstanden werden, nicht nur über die optische Darstellung.</li><li>Typische Fehler entstehen, wenn semantische Elemente durch allgemeine div-Container ersetzt werden.</li><li>Die CSS-Demo eignet sich gut, um Struktur und Gestaltung getrennt zu erklären.</li><li>Barrierefreiheit wird verständlicher, wenn Bedienung per Tastatur und Screenreader-Perspektive mitgedacht wird.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;select&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/select\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;select&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 5,
      "tag": "select",
      "title": "beschriftete Auswahlmöglichkeiten gestalten",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 5 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<select class=\"demo-target demo-select\"><option>Tag 1</option><option>Tag 2</option></select>",
      "css": "select {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 5: zentrale Variablen */\n:root { --lab-accent: #006f85; --lab-space: 14px; }\n.demo-target, input, textarea, select, button, fieldset { border-color: var(--lab-accent); padding: var(--lab-space); }",
      "controls": [
        {
          "kind": "color",
          "key": "--lab-accent",
          "label": "Akzentvariable",
          "value": "#006f85"
        },
        {
          "kind": "range",
          "key": "--lab-space",
          "label": "Abstandsvariable",
          "min": 6,
          "max": 32,
          "value": 14,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <select>.",
        "Prüfen Sie die Wirkung der für Tag 5 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-05-option": {
    "detail": "\n    <h3>&lt;option&gt;</h3>\n    <h4>Bedeutung</h4><p>Das option-Element ist ein Eintrag innerhalb einer select-Auswahl.</p>\n    <h4>Typische Verwendung</h4><p>Es enthält den sichtbaren Text einer auswählbaren Option.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;option value=&quot;tag1&quot;&gt;Tag 1&lt;/option&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><p class=\"selector-note\">option-Elemente sind nur eingeschränkt und je nach Browser unterschiedlich gestaltbar. In der Praxis wird meist das select-Element oder ein eigenes UI-Muster gestaltet.</p>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-55-option\" id=\"demo-55-option-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-55-option\" id=\"demo-55-option-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-55-option\" id=\"demo-55-option-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-55-option\" id=\"demo-55-option-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-55-option\" id=\"demo-55-option-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-55-option-v1\">Standard</label><label class=\"tab-2\" for=\"demo-55-option-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-55-option-v3\">Layout</label><label class=\"tab-4\" for=\"demo-55-option-v4\">Karte</label><label class=\"tab-5\" for=\"demo-55-option-v5\">Kontrast</label></div>\n    <div class=\"preview\"><select class=\"demo-target demo-select\"><option>Tag 1</option><option>Tag 2</option></select><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>option {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.option-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.option-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>option {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>option {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>option wird zusammen mit select verwendet.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-05-option\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;option&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>option ist browserabhängig schwer konsistent zu gestalten.</li><li>Die Gestaltung sollte am select erklärt werden.</li><li>value und sichtbarer Text können unterschiedlich sein.</li><li>Bei wenigen Optionen können Alternativen verständlicher sein.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;option&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/option\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;option&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 5,
      "tag": "option",
      "title": "verständliche Auswahltexte strukturieren",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 5 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<select class=\"demo-target demo-select\"><option>Tag 1</option><option>Tag 2</option></select>",
      "css": "option {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 5: zentrale Variablen */\n:root { --lab-accent: #006f85; --lab-space: 14px; }\n.demo-target, input, textarea, select, button, fieldset { border-color: var(--lab-accent); padding: var(--lab-space); }",
      "controls": [
        {
          "kind": "color",
          "key": "--lab-accent",
          "label": "Akzentvariable",
          "value": "#006f85"
        },
        {
          "kind": "range",
          "key": "--lab-space",
          "label": "Abstandsvariable",
          "min": 6,
          "max": 32,
          "value": 14,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <option>.",
        "Prüfen Sie die Wirkung der für Tag 5 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-05-button": {
    "detail": "\n    <h3>&lt;button&gt;</h3>\n    <h4>Bedeutung</h4><p>Das button-Element beschreibt eine Schaltfläche für eine Aktion.</p>\n    <h4>Typische Verwendung</h4><p>Buttons werden für Formulare und Bedienaktionen verwendet.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;button type=&quot;button&quot;&gt;Mehr erfahren&lt;/button&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>button\n.btn\nbutton:hover\nbutton:focus-visible</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-56-button\" id=\"demo-56-button-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-56-button\" id=\"demo-56-button-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-56-button\" id=\"demo-56-button-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-56-button\" id=\"demo-56-button-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-56-button\" id=\"demo-56-button-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-56-button-v1\">Standard</label><label class=\"tab-2\" for=\"demo-56-button-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-56-button-v3\">Layout</label><label class=\"tab-4\" for=\"demo-56-button-v4\">Karte</label><label class=\"tab-5\" for=\"demo-56-button-v5\">Kontrast</label></div>\n    <div class=\"preview\"><button class=\"demo-target demo-button\" type=\"button\">Mehr erfahren</button><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>button {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.button-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.button-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>button {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>button {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>Ein button sollte immer einen passenden type besitzen.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-05-button\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;button&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>Ein button löst eine Aktion aus, während ein a-Element zu einem Ziel navigiert.</li><li>In Formularen ist type wichtig, weil button ohne type im Formular-Kontext submit sein kann.</li><li>Fokuszustände sind wichtig für Tastaturbedienung.</li><li>Hover allein reicht nicht, weil Touchgeräte keinen klassischen Hover besitzen.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>Button und Link direkt gegenüberstellen: Navigieren = a, Aktion auslösen = button.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/button\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;button&gt;</a><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/CSS/:hover\" target=\"_blank\" rel=\"noopener noreferrer\">MDN :hover</a><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/CSS/:focus-visible\" target=\"_blank\" rel=\"noopener noreferrer\">MDN :focus-visible</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 5,
      "tag": "button",
      "title": "Button-Typ, Fokus und Zustände prüfen",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 5 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<button class=\"demo-target demo-button\" type=\"button\">Mehr erfahren</button>",
      "css": "button {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 5: zentrale Variablen */\n:root { --lab-accent: #006f85; --lab-space: 14px; }\n.demo-target, input, textarea, select, button, fieldset { border-color: var(--lab-accent); padding: var(--lab-space); }",
      "controls": [
        {
          "kind": "color",
          "key": "--lab-accent",
          "label": "Akzentvariable",
          "value": "#006f85"
        },
        {
          "kind": "range",
          "key": "--lab-space",
          "label": "Abstandsvariable",
          "min": 6,
          "max": 32,
          "value": 14,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <button>.",
        "Prüfen Sie die Wirkung der für Tag 5 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-05-fieldset": {
    "detail": "\n    <h3>&lt;fieldset&gt;</h3>\n    <h4>Bedeutung</h4><p>Das fieldset-Element gruppiert zusammengehörige Formularfelder.</p>\n    <h4>Typische Verwendung</h4><p>Es macht Formularbereiche semantisch verständlicher.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;fieldset&gt;\n  &lt;legend&gt;Kontakt&lt;/legend&gt;\n  ...\n&lt;/fieldset&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>fieldset\n.form-group</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-57-fieldset\" id=\"demo-57-fieldset-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-57-fieldset\" id=\"demo-57-fieldset-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-57-fieldset\" id=\"demo-57-fieldset-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-57-fieldset\" id=\"demo-57-fieldset-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-57-fieldset\" id=\"demo-57-fieldset-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-57-fieldset-v1\">Standard</label><label class=\"tab-2\" for=\"demo-57-fieldset-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-57-fieldset-v3\">Layout</label><label class=\"tab-4\" for=\"demo-57-fieldset-v4\">Karte</label><label class=\"tab-5\" for=\"demo-57-fieldset-v5\">Kontrast</label></div>\n    <div class=\"preview\"><fieldset class=\"demo-target demo-fieldset\"><legend>Kontakt</legend><label>Name</label><input placeholder=\"Max\"></fieldset><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>fieldset {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.fieldset-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.fieldset-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>fieldset {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>fieldset {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>fieldset eignet sich gut für thematische Formulargruppen.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-05-fieldset\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;fieldset&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>&lt;fieldset&gt; sollte immer über Bedeutung und Zweck verstanden werden, nicht nur über die optische Darstellung.</li><li>Typische Fehler entstehen, wenn semantische Elemente durch allgemeine div-Container ersetzt werden.</li><li>Die CSS-Demo eignet sich gut, um Struktur und Gestaltung getrennt zu erklären.</li><li>Barrierefreiheit wird verständlicher, wenn Bedienung per Tastatur und Screenreader-Perspektive mitgedacht wird.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;fieldset&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/fieldset\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;fieldset&gt;</a><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/legend\" target=\"_blank\" rel=\"noopener noreferrer\">MDN legend</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 5,
      "tag": "fieldset",
      "title": "zusammengehörige Felder semantisch gruppieren",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 5 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<fieldset class=\"demo-target demo-fieldset\"><legend>Kontakt</legend><label>Name</label><input placeholder=\"Max\"></fieldset>",
      "css": "fieldset {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 5: zentrale Variablen */\n:root { --lab-accent: #006f85; --lab-space: 14px; }\n.demo-target, input, textarea, select, button, fieldset { border-color: var(--lab-accent); padding: var(--lab-space); }",
      "controls": [
        {
          "kind": "color",
          "key": "--lab-accent",
          "label": "Akzentvariable",
          "value": "#006f85"
        },
        {
          "kind": "range",
          "key": "--lab-space",
          "label": "Abstandsvariable",
          "min": 6,
          "max": 32,
          "value": 14,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <fieldset>.",
        "Prüfen Sie die Wirkung der für Tag 5 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  },
  "info-tag-05-legend": {
    "detail": "\n    <h3>&lt;legend&gt;</h3>\n    <h4>Bedeutung</h4><p>Das legend-Element benennt eine fieldset-Gruppe.</p>\n    <h4>Typische Verwendung</h4><p>Es erklärt, worum es in der Feldgruppe geht.</p>\n    <h4>HTML-Syntax</h4><pre><code>&lt;legend&gt;Persönliche Daten&lt;/legend&gt;</code></pre>\n    <h4>Passende CSS-Selektoren</h4><pre><code>legend\nfieldset legend</code></pre>\n    <h4>CSS-Varianten in Aktion</h4>\n    <input class=\"variant-input v1\" type=\"radio\" name=\"demo-58-legend\" id=\"demo-58-legend-v1\" checked>\n    <input class=\"variant-input v2\" type=\"radio\" name=\"demo-58-legend\" id=\"demo-58-legend-v2\">\n    <input class=\"variant-input v3\" type=\"radio\" name=\"demo-58-legend\" id=\"demo-58-legend-v3\">\n    <input class=\"variant-input v4\" type=\"radio\" name=\"demo-58-legend\" id=\"demo-58-legend-v4\">\n    <input class=\"variant-input v5\" type=\"radio\" name=\"demo-58-legend\" id=\"demo-58-legend-v5\">\n    <div class=\"variant-tabs\"><label class=\"tab-1\" for=\"demo-58-legend-v1\">Standard</label><label class=\"tab-2\" for=\"demo-58-legend-v2\">Akzent</label><label class=\"tab-3\" for=\"demo-58-legend-v3\">Layout</label><label class=\"tab-4\" for=\"demo-58-legend-v4\">Karte</label><label class=\"tab-5\" for=\"demo-58-legend-v5\">Kontrast</label></div>\n    <div class=\"preview\"><fieldset class=\"demo-target demo-fieldset\"><legend>Kontakt</legend><label>Name</label><input placeholder=\"Max\"></fieldset><div class=\"demo-context\"><strong>Mehr Kontext fuer die Variante</strong><ul><li>Abstaende, Rahmen, Farben und Typografie vergleichen.</li><li>Responsive Wirkung, Fokus und Lesbarkeit gemeinsam bewerten.</li></ul></div></div>\n    <div class=\"code-variants\"><pre class=\"code code-1\"><code>legend {\n  color: #12324a;\n  margin: 0;\n}</code></pre><pre class=\"code code-2\"><code>.legend-demo {\n  padding: 1rem;\n  border: 2px solid #00abc7;\n  background-color: #e9fbff;\n}</code></pre><pre class=\"code code-3\"><code>.legend-demo {\n  max-width: 100%;\n  border-radius: .75rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-4\"><code>legend {\n  display: grid;\n  gap: .75rem;\n  max-width: 42rem;\n  padding: 1.25rem;\n  margin: 0 auto;\n  color: #173248;\n  background-color: #ffffff;\n  border: 2px solid #00abc7;\n  border-radius: .85rem;\n  box-shadow: 0 14px 30px rgba(0,57,100,.14);\n}</code></pre><pre class=\"code code-5\"><code>legend {\n  display: flex;\n  flex-wrap: wrap;\n  align-items: center;\n  justify-content: space-between;\n  gap: 1rem;\n  width: min(100%, 48rem);\n  padding: 1.5rem;\n  color: #f6fbff;\n  background: linear-gradient(135deg, #0b1725, #20344f);\n  border: 1px solid #6ee7f9;\n  border-radius: .35rem;\n  box-shadow: inset 0 0 0 4px rgba(110,231,249,.12);\n}</code></pre></div>\n    <h4>Praxishinweis</h4><p>legend sollte kurz und eindeutig sein.</p>\n    <button class=\"teacher-open\" type=\"button\" data-fachinfo-id=\"info-tag-05-legend\">Fachinfo im zweiten Fenster öffnen</button>\n  ",
    "extra": "\n  <div class=\"teacher-panel\">\n    <div class=\"teacher-hero\"><h2>Fachinfo zu &lt;legend&gt;</h2><p>Kurzüberblick: Dieses Tag ist in diesem Material relevant, um Struktur, Bedeutung und passende CSS-Gestaltung sauber voneinander zu trennen.</p></div>\n    <div class=\"teacher-content\">\n      <div class=\"teacher-grid\">\n        <article class=\"info-card\"><h3>Zusatzinformationen</h3><ul><li>&lt;legend&gt; sollte immer über Bedeutung und Zweck verstanden werden, nicht nur über die optische Darstellung.</li><li>Typische Fehler entstehen, wenn semantische Elemente durch allgemeine div-Container ersetzt werden.</li><li>Die CSS-Demo eignet sich gut, um Struktur und Gestaltung getrennt zu erklären.</li><li>Barrierefreiheit wird verständlicher, wenn Bedienung per Tastatur und Screenreader-Perspektive mitgedacht wird.</li></ul></article>\n        <article class=\"info-card\"><h3>Hinweis</h3><p>&lt;legend&gt; zuerst im HTML-Kontext zeigen und danach nur die sichtbare Wirkung über CSS variieren.</p></article>\n        <article class=\"info-card\"><h3>Recherche und Dokumentation</h3><div class=\"teacher-links\"><a class=\"teacher-link secondary\" href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element/legend\" target=\"_blank\" rel=\"noopener noreferrer\">MDN &lt;legend&gt;</a></div></article>\n        \n      </div>\n      \n    </div>\n  </div>\n",
    "lab": {
      "day": 5,
      "tag": "legend",
      "title": "eine Formulargruppe eindeutig benennen",
      "description": "Dieses Labor nutzt ausschließlich Techniken aus Tag 5 und die vorhandene Vorschau dieser Tag-Karte.",
      "html": "<fieldset class=\"demo-target demo-fieldset\"><legend>Kontakt</legend><label>Name</label><input placeholder=\"Max\"></fieldset>",
      "css": "legend {\n  color: #12324a;\n  margin: 0;\n}\n\n/* Tag 5: zentrale Variablen */\n:root { --lab-accent: #006f85; --lab-space: 14px; }\n.demo-target, input, textarea, select, button, fieldset { border-color: var(--lab-accent); padding: var(--lab-space); }",
      "controls": [
        {
          "kind": "color",
          "key": "--lab-accent",
          "label": "Akzentvariable",
          "value": "#006f85"
        },
        {
          "kind": "range",
          "key": "--lab-space",
          "label": "Abstandsvariable",
          "min": 6,
          "max": 32,
          "value": 14,
          "unit": "px"
        }
      ],
      "hints": [
        "Verändern Sie gezielt die Struktur oder Inhalte von <legend>.",
        "Prüfen Sie die Wirkung der für Tag 5 passenden CSS-Regeln.",
        "Vergleichen Sie Desktop-, Tablet- und Mobilbreite und setzen Sie das Beispiel anschließend zurück."
      ]
    }
  }
};
