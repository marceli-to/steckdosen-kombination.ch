@extends('layout.main')
@section('content')
<main class="site">
  <div>
    <div class="landing">
      <div>
        @include('pages.steckdosen-kombination.partials.landing-intro')
        @include('pages.steckdosen-kombination.partials.landing-usage')
        @include('pages.steckdosen-kombination.partials.landing-product')
        @include('pages.steckdosen-kombination.partials.landing-help')
        @include('pages.steckdosen-kombination.partials.landing-form')
      </div>
    </div>
  </div>
</main>
@endsection