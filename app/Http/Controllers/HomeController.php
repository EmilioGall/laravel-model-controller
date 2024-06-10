<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $moviesArray = Movie::all();

        // dd($moviesArray);

        return view('home', compact('moviesArray'));
    }
}
