<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function register(Request $request){

            $validator = Validator::make($request->all(),[
                'sdt' => ['required','numeric','regex:/^[0-9]{10}$/'],
                'password' => 'required',
                'name' => 'required',
            ]);


            if($validator->fails()){
                return back();
            }

            $name=$request->input('name');
            $sdt=$request->input('sdt');
            $password=$request->input('password');
            $req=User::create([
                'hoten' => $name,
                'sdt' =>$sdt,
                'password' => $password,
            ]);
            // $result = (new AccountController)->store($request->all());
            return back();

    }

    public function login(Request $req){

        $validator = Validator::make($req->all(),[
            'sdt' => ['required','numeric','regex:/^[0-9]{10}$/'],
            'password' => 'required',
        ]);


        if($validator->fails()){
            return back();
            // $message = 'Lỗi: Số điện thoại hoặc mật khẩu không hợp lệ';
            // return redirect()->back()->with('message', $message);
        }

        $user = User::where('sdt', $req->sdt,)->first();

        if($user == null){
            return view('dangnhap');
        }elseif(\Hash::check($req->password, $user->password)){
                Auth::login($user);
                return back();
            }
            else{
                return back();
            }

    }
    public function logout(){
        Auth::logout();
        return redirect()->route('/');
    }


}
