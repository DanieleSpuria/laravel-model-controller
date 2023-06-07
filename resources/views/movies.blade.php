@extends('layout.main')

@section('content')
  <div class="container">
    <h1 class="text-center">Movies</h1>
    <div class="row row-cols-2 text-center">
      @foreach ($movies as $movie)
        <div class="col my-2">
          <div class="card">
            <div class="card-body">
              <h2 class="card-text">{{ $movie->title }}</h2>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
