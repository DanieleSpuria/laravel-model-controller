<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Movies;

class PageController extends Controller
{
    public function index() {
      $movies = Movies::all();
      dump($movies);
      return view('movies');
    }
}
