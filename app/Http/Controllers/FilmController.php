<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    //
    public function index(){
        $lst_film = Film::all();
        return view('index_film',['lst_film' => $lst_film]);
    }
}
