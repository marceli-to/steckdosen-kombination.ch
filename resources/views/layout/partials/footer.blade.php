<footer class="site-footer">
  <div>
    <div class="sm:flex justify-between md:grid-cols-12">
      <div class="site-footer__item md:span-3">
        <h3>FERRATEC TECHNICS AG</h3>
        <p>Grossmattstrasse 19<br>8964 Rudolfstetten<br>{{ __('Telefon') }} +41 56 649 21 21<br>{{ __('Fax') }} +41 56 649 21 41</p>
        <p><a href="mailto:info@ferratec.ch" target="_blank" title="Get in touch info@ferratec.ch">info@ferratec.ch</a></p>
      </div>
      <div class="site-footer__item md:span-3">
        <h3>{{ __('Öffnungszeiten') }}</h3>
        <p>{{ __('Montag bis Freitag') }}<br>{{ __('07.30 – 12.00 Uhr') }}<br>{{ __('13.00 – 17.00 Uhr') }}</p>
      </div>
      <div class="site-footer__item md:span-4">
        <h3>{{ __('Datenschutz & Cookies') }}</h3>
        <nav class="meta">
          <ul>
            <li>
              <a href="{{localized_route('page.privacy')}}" title="{{ __('Datenschutzerklärung') }}">{{ __('Datenschutzerklärung') }}</a>
            </li>
            <li>
              <a href="{{localized_route('page.cookies')}}" title="{{ __('Cookies') }}">{{ __('Cookies') }}</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="site-footer__item md:span-2">
        <h3>{{ __('Unternehmen') }}</h3>
        <nav class="meta">
          <ul>
            <li><a href="https://www.ferratec-technics.ch/de/unternehmen/anfahrt/" target="_blank">{{ __('Anfahrt') }}</a></li>
            <li><a href="https://www.ferratec-technics.ch/de/kontakt/" target="_blank">{{ __('Kontakt') }}</a></li>
            <li><a href="https://www.ferratec-technics.ch/de/unternehmen/offene-stellen/" target="_blank">{{ __('Offene Stellen') }}</a></li>
            <li><a href="https://www.ferratec-technics.ch/de/unternehmen/agb/" target="_blank">{{ __('AGB') }}</a></li>
            <li><a href="https://www.ferratec-technics.ch/de/impressum/" target="_blank">{{ __('Impressum') }}</a></li>
            <li><a href="https://www.ferratec-technics.ch/de/newsletter/" target="_blank">{{ __('Newsletter') }}</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div>
    <div class="site-footer__copy">
      Copyright &copy; {{date('Y', time())}} Ferratec Technics AG Rudolfstetten. {{ __('Alle Rechte vorbehalten.') }}</div>
    </div>
  </div>
</footer>
<script src="{{ mix('assets/js/language.js') }}" type="text/javascript"></script>
<script src="{{ mix('assets/js/form.js') }}"></script>
<script src="{{ mix('assets/js/app.js') }}" defer></script>
<script>
  var _paq = window._paq = window._paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="https://stat.ferratec.ch/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '10']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- made with ❤ by marceli.to -->