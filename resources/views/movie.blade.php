@extends('layout.main')

@section('content')
  <div class="container text-center">
    <div class="ds-movie">
      <h2>{{ $movie->title }}</h2>
      <h4>{{ $movie->original_title }}</h4>
      <span>{{ $movie->nationality }}</span>
      <span>{{ $movie->date }}</span>
      <span>{{ $movie->vote}}</span>
    </div>


  </div>
@endsection
