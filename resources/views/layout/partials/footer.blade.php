<footer class="site-footer">
  <div>
    <div class="sm:flex justify-between md:grid-cols-12">
      <div class="site-footer__item md:span-4">
        <h3>FERRATEC TECHNICS AG</h3>
        <p>Grossmattstrasse 19<br>8964 Rudolfstetten<br>{{ __('Telefon') }} +41 56 649 21 21<br>{{ __('Fax') }} +41 56 649 21 41</p>
        <p><a href="mailto:info@ferratec.ch" target="_blank" title="Get in touch info@ferratec.ch">info@ferratec.ch</a></p>
      </div>
      <div class="site-footer__item md:span-6">
        <h3>{{ __('Öffnungszeiten') }}</h3>
        <p>{{ __('Montag bis Freitag') }}<br>{{ __('07.30 – 12.00 Uhr') }}<br>{{ __('13.00 – 17.00 Uhr') }}</p>
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
  window.intercomSettings = {
    api_base: "https://api-iam.intercom.io",
    app_id: "wnq5c6hr",
    custom_launcher_selector: ".js-btn-livechat"
  };
</script>
<script>
(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/wnq5c6hr';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(document.readyState==='complete'){l();}else if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
</script>
<!-- made with ❤ by marceli.to -->