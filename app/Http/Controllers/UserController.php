<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

     // public function Authlogin(){
    //     $admin_id = Session::get('admin_id');
    //     if($admin_id){
    //         return Redirect::to('dashboard');
    //     }else{
    //         return Redirect::to('admin')->send();
    //     }
    // }
    //
    // public function login(Request $req){
    //     $req->validate([
    //         'sdt' => 'required',
    //         'password' => 'required',
    //     ]);

    //     $user = User::where('sdt', $req->sdt)->first();

    //     if($user && \Hash::check($req->password, $user->password)){
    //         if($user->is_admin == 1){
    //             return view('trangchu_admin',['user'=>$user]);
    //         }
    //         else{
    //             return view('user.trangchu_user',['user'=>$user]);
    //         }
    //     }
    //     else{
    //         return view('dangnhap');
    //     }
    // }

    // public function logout(){

    // }
}
