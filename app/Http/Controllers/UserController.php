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
            \Session::put('id',$user->password);
            \Session::put('sdt',$user->sdt);
            \Session::put('hoten',$user->hoten);
            return view('trangchu_admin');
        }
        else
        {
            return view('dangnhap');

        }
    }
    public function logout(){
        Session::flush();
        return view('dangnhap');
    }
}
