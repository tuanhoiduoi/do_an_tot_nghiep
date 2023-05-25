<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function login(Request $req){
        $req->validate([
            'sdt' => 'required',
            'password' => 'required',
        ]);
        $user = User::where('sdt', $req->sdt)->first();
        if($user && \Hash::check($req->password, $user->password)){
            return view('welcome');
        }
        else
        {
            return view('dangnhap');

        }
    }

}
