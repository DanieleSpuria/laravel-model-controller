@extends('layout.main')

@section('content')
  <div class="container">
    <h1 class="text-center">Movies</h1>
    <div class="row row-cols-2 text-center">
      @foreach ($movies as $movie)
        <div class="col my-2">
          @include('partials.card')
        </div>
      @endforeach
    </div>
  </div>
@endsection
