@extends('layout.main')
@section('content')
@section('seo_title', __('Datenschutzerklärung'))
@section('content')
<main class="site">
  <div>
    <div class="privacy">
      <div>
        <h1>{{ __('Datenschutzerklärung') }}</h1>
        <p>{{ __('Zuletzt aktualisiert am 29. August 2023') }}</p>
        @include('pages.privacy.'. app()->getLocale() .'.privacy')
      </div>
    </div>
  </div>
</main>
@endsection