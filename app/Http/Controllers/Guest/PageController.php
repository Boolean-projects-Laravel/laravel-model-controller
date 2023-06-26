<?php

namespace App\Http\Controllers\Guest;


use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {

        return view('homepage');
    }

    public function movies()
    {
        // il controller chiama il Model per recuperare i dati dal database
        $arrMovies = Movie::all();


        return view('movies', compact('arrMovies'));
    }
}