@extends('layout.main')
@section('seo_title', __('Cookies'))
@section('content')
<main class="site">
  <div>
    <div class="privacy">
      <div>
        <h1>{{ __('Cookies') }}</h1>
        <p>{{ __('Zuletzt aktualisiert am 29. August 2023') }}</p>
        @include('pages.privacy.'. app()->getLocale() .'.cookies')
      </div>
    </div>
  </div>
</main>
@endsection