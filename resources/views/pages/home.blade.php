@extends('layout.main')
@section('content')
<main class="site">
  <div>
    <div class="home">
      <div class="home__intro">
        <h1>{{ __('MENNEKES Produktkonfigurator') }}</h1>
        <p>{{ __('Wählen Sie eine Produktkategorie, um den passenden Konfigurator zu starten.') }}</p>
      </div>
      <div class="home__products">
        <a href="{{ route(app()->getLocale() . '.page.steckdosen-kombination') }}" class="home__product-card">
          <figure>
            <img src="/assets/img/powerbox-v2.png" width="300" height="300" alt="Steckdosen-Kombination">
          </figure>
          <h2>{{ __('Steckdosen-Kombination') }}</h2>
          <p>{{ __('Wand- und Stromverteiler AMAXX® und EverGUM konfigurieren.') }}</p>
          <span class="btn-cta">{{ __('Produkt auswählen') }}</span>
        </a>
        <a href="{{ route(app()->getLocale() . '.page.wandsteckdose-duoi') }}" class="home__product-card">
          <figure>
            <img src="/assets/img/wandsteckdose-duoi.png" width="300" height="300" alt="Wandsteckdose DUOi">
          </figure>
          <h2>{{ __('Wandsteckdose DUOi') }}</h2>
          <p>{{ __('Wandsteckdosen DUOi nach Ihren Anforderungen filtern.') }}</p>
          <span class="btn-cta">{{ __('Produkt auswählen') }}</span>
        </a>
      </div>
    </div>
  </div>
</main>
@endsection