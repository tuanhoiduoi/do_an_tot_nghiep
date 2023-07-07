<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\AccountController;

class AuthController extends Controller
{
    //
    public function register(Request $request){

            $name=$request->input('name');
            $email=$request->input('email');
            $password=$request->input('password');
            $result = (new AccountController)->store($name,$email,$password);
             return view('dangnhap');

    }

    public function login(Request $req){


        if($req->sdt == null or $req->password == null){
            return view('dangnhap');
        }

        $user = User::where('sdt', $req->sdt,)->first();

        if($user == null){
            return view('dangnhap');
        }elseif(\Hash::check($req->password, $user->password)){
            if($user->is_admin == 1){
                Auth::login($user);
                //Auth::user() là lấy thông tin người đang đăng nhập
                return view('trangchu_admin');
            }
            else{
                Auth::login($user);
                return view('user.trangchu_user');
            }
        }else{
            return view('dangnhap');
        }



    }
    public function logout(){
        Auth::logout();
        return view('dangnhap');
    }


}
