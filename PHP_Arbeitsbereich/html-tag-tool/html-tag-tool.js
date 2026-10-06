(function () {
  'use strict';

  var fachinfoWindow = null;
  var fallback = null;

  function fachinfoUrl(id) {
    return 'fachinfo.html?id=' + encodeURIComponent(id);
  }

  function showFallback(id, trigger) {
    if (!fallback) {
      fallback = document.createElement('aside');
      fallback.className = 'fachinfo-fallback';
      fallback.setAttribute('role', 'status');
      fallback.setAttribute('aria-live', 'polite');
      document.body.appendChild(fallback);
    }
    fallback.innerHTML = '<strong>Das Fachinfofenster wurde vom Browser blockiert.</strong><span>Erlauben Sie Popups für diese lokale Seite oder öffnen Sie die Fachinformation über den folgenden Link.</span><a target="fachinfo_screen" rel="noopener">Fachinformation in neuem Fenster öffnen</a><a>Fachinformation auf dieser Seite öffnen</a><button type="button">Hinweis schließen</button>';
    var link = fallback.querySelector('a');
    fallback.querySelectorAll('a').forEach(function (item) { item.href = fachinfoUrl(id); });
    fallback.querySelector('button').addEventListener('click', function () {
      fallback.remove();
      fallback = null;
      trigger.focus();
    });
    link.focus();
  }

  function openFachinfo(id, trigger) {
    var url = fachinfoUrl(id);
    try {
      // Derselbe Fenstername verwendet ein vorhandenes Fachinfo-Fenster erneut.
      // Kein direkter Location-Zugriff auf ein zuvor geöffnetes file://-Fenster.
      fachinfoWindow = window.open(url, 'fachinfo_screen', 'popup=yes,width=1080,height=820,resizable=yes,scrollbars=yes');
      if (!fachinfoWindow) {
        showFallback(id, trigger);
        return;
      }
      if (fallback) { fallback.remove(); fallback = null; }
      fachinfoWindow.focus();
    } catch (error) {
      showFallback(id, trigger);
    }
  }

  document.addEventListener('click', function (event) {
    var trigger = event.target.closest('[data-fachinfo-id]');
    if (!trigger) return;
    event.preventDefault();
    openFachinfo(trigger.dataset.fachinfoId, trigger);
  });
}());
