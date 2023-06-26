<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChairController extends Controller
{
    public function index(){
        $checkboxValues = session('checkboxes');
        return view('admin.sodo_chair', ['checkboxValues' => $checkboxValues]);
    }

    public function save(Request $req){
        $checkboxValue = $req->input('checkboxes');

        session(['selectedCheckbox' => $checkboxValue]);
        return view('admin.sodo_chair');
    }
}
