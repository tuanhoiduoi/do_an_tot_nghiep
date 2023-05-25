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
    public function index(){
        $lst_user = User::all();
        return view('trangchu_admin',['lst_user' => $lst_user]);
    }
    public function create(){
        return view('create_account_admin');
    }
    public function store(Request $req){
        $req=User::create([
            'hoten' => $req->hoten,
            'sdt' => $req->sdt,
            'password' => $req->password,
            'is_admin' => $req->is_admin
        ]);
        return redirect()->route('trangchu.index');
    }
}
