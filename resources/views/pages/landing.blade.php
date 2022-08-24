@extends('layout.main')
@section('content')
<main class="site">
  <div>
    <div class="landing">
      <div>
        @include('pages.partials.landing-intro')
        @include('pages.partials.landing-usage')
        @include('pages.partials.landing-product')
        @include('pages.partials.landing-help')
        @include('pages.partials.landing-form')
      </div>
    </div>
  </div>
</main>
@endsection