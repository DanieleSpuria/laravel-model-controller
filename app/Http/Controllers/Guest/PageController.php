<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Movies;

class PageController extends Controller
{
    public function index() {
      $movies = Movies::all();
      return view('movies', compact('movies'));
    }

    public function movie($title) {
      $movie = Movies::where('id', $title)->first();
      return view('movie', compact('movie'));
    }
}
