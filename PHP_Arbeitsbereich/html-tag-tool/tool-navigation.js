
    document.addEventListener('DOMContentLoaded', function() {
      var dayLinks = Array.prototype.slice.call(document.querySelectorAll('.tag-tool-navigation a[href^="#"]'));
      var manualNavigationUntil = 0;
      function hashId(value) {
        try { return decodeURIComponent(value); } catch (error) { return value; }
      }
      function updateHash(hash, replace) {
        try { history[replace ? 'replaceState' : 'pushState'](null, '', hash); }
        catch (error) { if (window.location.hash !== hash) window.location.hash = hash; }
      }

      function setActiveDay(day) {
        dayLinks.forEach(function(link) {
          var active = day && link.getAttribute('href') === '#' + day.id;
          link.classList.toggle('is-active', active);
          if (active) link.setAttribute('aria-current', 'location');
          else link.removeAttribute('aria-current');
        });
      }

      function revealHashTarget(options) {
        if (!window.location.hash) {
          setActiveDay(document.getElementById('einfuehrung'));
          return;
        }
        var target = document.getElementById(hashId(window.location.hash.slice(1)));
        if (!target) return;
        var parent = target;
        while (parent) {
          if (parent.tagName === 'DETAILS') parent.open = true;
          parent = parent.parentElement;
        }
        var day = target.matches('.day-disclosure, #einfuehrung') ? target : target.closest('.day-disclosure');
        setActiveDay(day);
        if (options && options.focus) {
          var focusTarget = target.matches('details') ? target.querySelector(':scope > summary') : target;
          if (focusTarget && !focusTarget.hasAttribute('tabindex') && !focusTarget.matches('summary, a, button, input, select, textarea')) focusTarget.setAttribute('tabindex', '-1');
          if (focusTarget) window.setTimeout(function() { focusTarget.focus({ preventScroll: true }); }, 0);
        }
      }

      dayLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
          var target = document.getElementById(hashId(link.hash.slice(1)));
          if (!target) return;
          event.preventDefault();
          manualNavigationUntil = Date.now() + 1200;
          if (target.tagName === 'DETAILS') target.open = true;
          updateHash(link.hash, false);
          setActiveDay(target);
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
          var focusTarget = target.tagName === 'DETAILS' ? target.querySelector(':scope > summary') : target;
          if (focusTarget && !focusTarget.hasAttribute('tabindex')) focusTarget.setAttribute('tabindex', '-1');
          if (focusTarget) focusTarget.focus({ preventScroll: true });
        });
      });

      if ('IntersectionObserver' in window) {
        var observedTargets = [document.getElementById('einfuehrung')]
          .concat(Array.prototype.slice.call(document.querySelectorAll('.day-disclosure > .day-summary')))
          .filter(function(target) { return target; });
        var observer = new IntersectionObserver(function() {
          if (Date.now() < manualNavigationUntil) return;
          var threshold = window.innerHeight * .25;
          var current = observedTargets[0];
          observedTargets.forEach(function(target) { if (target.getBoundingClientRect().top <= threshold) current = target; });
          var day = current.closest('.day-disclosure') || current;
          setActiveDay(day);
        }, { rootMargin: '-10% 0px -75% 0px', threshold: [0, .25, .75] });
        observedTargets.forEach(function(target) { observer.observe(target); });
      }

      document.querySelectorAll('.tag-card').forEach(function(card) {
        card.addEventListener('toggle', function() {
          if (card.open && card.id) updateHash('#' + card.id, true);
        });
      });

      document.querySelectorAll('.day-disclosure').forEach(function(day) {
        day.addEventListener('toggle', function() {
          if (!day.open) return;
          var hashTarget = window.location.hash && document.getElementById(hashId(window.location.hash.slice(1)));
          if (!hashTarget || !day.contains(hashTarget)) updateHash('#' + day.id, false);
          setActiveDay(day);
        });
      });

      window.addEventListener('hashchange', function() { revealHashTarget({ focus: true }); });
      revealHashTarget({ focus: false });
    });
  

(function () {
  'use strict';
  document.documentElement.classList.add('tool-js');
  var config = window.HTML_TAG_TOOL_CONFIG || {};
  var back = document.querySelector('[data-course-backlink]');
  if (back && typeof config.courseOverviewUrl === 'string' && config.courseOverviewUrl.trim()) {
    var url;
    try { url = new URL(config.courseOverviewUrl, document.baseURI); } catch (error) { return; }
    if (['http:', 'https:', 'file:'].indexOf(url.protocol) !== -1) {
      back.href = url.href;
      back.textContent = 'Zur Lernübersicht';
    }
  }
  var toggle = document.querySelector('[data-course-menu-toggle]');
  var nav = document.querySelector('[data-course-navigation]');
  if (!toggle || !nav) return;
  function setMenu(open) {
    nav.classList.toggle('is-open', open);
    toggle.setAttribute('aria-expanded', String(open));
    toggle.textContent = open ? 'Seitennavigation schließen' : 'Seitennavigation öffnen';
  }
  toggle.addEventListener('click', function () {
    setMenu(toggle.getAttribute('aria-expanded') !== 'true');
  });
  nav.addEventListener('click', function (event) {
    if (event.target.closest('a')) setMenu(false);
  });
  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape' && toggle.getAttribute('aria-expanded') === 'true') {
      setMenu(false);
      toggle.focus();
    }
  });
  setMenu(false);
}());
