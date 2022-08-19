@extends('layout.main')
@section('content')
<main class="site">
  <div>
    <div class="landing">
      <div>
        @include('pages.partials.landing-intro')
        @include('pages.partials.landing-usage')
      </div>
    </div>
  </div>
</main>
@endsection