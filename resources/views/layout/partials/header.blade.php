<header class="site-header">
  <div>
    <div>
    <a href="https://www.ferratec-technics.ch/" class="logo logo--ferratec" target="_blank" title="Visit Ferratec Technics AG">
      <img src="/assets/img/logo-ferratec.svg" height="37" width="132" alt="Ferratec Technics AG">
    </a>
    <a href="https://www.mennekes.de/" class="logo logo--mennekes"target="_blank" title="Visit Ferratec Technics AG">
      <img src="/assets/img/logo-mennekes.svg" height="36" width="148" alt="Mennekes">
    </a>
    </div>
    <nav class="language-switcher">
      <a href="javascript:;" class="btn-language js-language-menu-show-btn">
        <img src="/assets/img/flag-{{ app()->getLocale() == 'de' ? 'ch' : app()->getLocale() }}.svg" height="12" width="16">
        @if (app()->getLocale() == 'de')<span>de</span>@endif
        @if (app()->getLocale() == 'en')<span>en</span>@endif
        @if (app()->getLocale() == 'fr')<span>fr</span>@endif
        @if (app()->getLocale() == 'it')<span>it</span>@endif
      </a>
    </nav>
  </div>
</header>
<nav class="language-menu js-language-menu">
  <div>
    <div>
      <a href="javascript:;" class="btn-cross js-language-menu-hide-btn" title="{{ __('Menu verbergen') }}"></a>
      <h2>{{ __('Sprache wählen') }}</h2>
      <ul>
        <li>
          <a href="{{ request()->routeIs('*.page.app') ? '/de/app' : '/de' }}" class="{{ app()->getLocale() == 'de' ? 'is-active' : '' }}">
            <img src="/assets/img/flag-ch.svg" height="12" width="16">
            <span>{{ __('Deutsch') }}</span>
          </a>
        </li>
        <li>
          <a href="{{ request()->routeIs('*.page.app') ? '/en/app' : '/en' }}" class="{{ app()->getLocale() == 'en' ? 'is-active' : '' }}">
            <img src="/assets/img/flag-en.svg" height="12" width="16">
            <span>{{ __('English') }}</span>
          </a>
        </li>
        <li>
          <a href="{{ request()->routeIs('*.page.app') ? '/fr/app' : '/fr' }}" class="{{ app()->getLocale() == 'fr' ? 'is-active' : '' }}">
            <img src="/assets/img/flag-fr.svg" height="12" width="16">
            <span>{{ __('Français') }}</span>
          </a>
        </li>
        <li>
          <a href="{{ request()->routeIs('*.page.app') ? '/it/app' : '/it' }}" class="{{ app()->getLocale() == 'it' ? 'is-active' : '' }}">
            <img src="/assets/img/flag-it.svg" height="12" width="16">
            <span>{{ __('Italiano') }}</span>
          </a>
        </li>
      </ul>
      </div>
  </div>
</nav>