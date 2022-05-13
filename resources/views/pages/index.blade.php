@extends('layout.main')
@section('content')

<main class="site" id="app">
  <div class="configurator">

    <section class="configurator__selector">
      <div>
        <header>
          <h1>Konfigurator für Wand-Stromverteiler</h1>
        </header>
        <figure class="selector-visual">
          <img src="/assets/img/powerbox.png" width="600" height="600" class="is-responsive">
        </figure>
      </div>
    </section>

    <section class="configurator__result">
      <header>
        <h1>Passende Produkte</h1>
      </header>
    </section>

  </div>
</main>

{{-- 
<main class="site" id="app">
  <div>
    <app-component />
  </div>
</main>
--}}
@endsection