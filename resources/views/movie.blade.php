@extends('layout.main')

@section('content')
  <div class="container text-center my-5">
    <div class="ds-movie  py-5">
      <h2>{{ $movie->title }}</h2>
      <h4>{{ $movie->original_title }}</h4>
      <span>{{ $movie->nationality }}</span>
      <span>{{ $movie->date }}</span>
      <span>{{ $movie->vote}}</span>
    </div>

    <a href="{{ route('movies') }}">
      <button type="button" class="btn btn-primary">Indietro</button>
    </a>
  </div>
@endsection
