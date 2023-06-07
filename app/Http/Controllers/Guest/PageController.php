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

    public function movie($id) {
      $movie = Movies::where('id', $id)->first();
      return view('movie', compact('movie'));
    }
}
