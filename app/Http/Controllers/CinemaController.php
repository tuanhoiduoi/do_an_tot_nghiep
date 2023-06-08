<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cinema;

class CinemaController extends Controller
{
    public function index(){
        $lst_cinema = Cinema::all();
        return view('index_cinema',['lst_cinema'=>$lst_cinema]);
    }
    public function edit(Cinema $cinema){
        return view('edit_cinema',['cinema'=>$cinema]);
    }
    public function update(Request $req,Cinema $cinema){
        $cinema->fill([
            'tenrap' => $req->tenrap,
            'diachi' => $req->diachi
        ]);
        $cinema->save();
        return redirect()->route('cinemas.index');
    }
    public function create(){
        return view('create_cinema');
    }
    public function store(Request $req){
        $req=Cinema::create([
            'tenrap' => $req->tenrap,
            'diachi' => $req->diachi
        ]);
        return redirect()->route('cinemas.index');
    }
}
