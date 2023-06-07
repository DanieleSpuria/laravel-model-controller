@extends('layout.main')

@section('content')
<div class="container">
  <h1 class="text-center my-5">Movies</h1>

  <div class="row row-cols-2 text-center">
    @foreach ($movies as $movie)
        <div class="col my-2">
          <a href="{{ route('movie', ['id' => $movie->id]) }}">
            @include('partials.card')
          </a>
        </div>
      @endforeach
    </div>
  </div>
@endsection
