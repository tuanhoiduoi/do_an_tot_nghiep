<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;


class AccountController extends Controller
{


    public function index(){
        if(Auth::user()->is_admin == 1)
        {
            $lst_user = User::paginate(5);// phantrang
            return view('admin.index_taikhoan',['lst_user' => $lst_user]);
        }
        else{
            return redirect()->route('/');
        }
    }
    public function create(){
        return view('admin.create_account_admin');
    }
    public function store(Request $req){
        $validator = Validator::make($req->all(),[
            'sdt' => ['required', 'regex:/^[0-9]{10}$/','numeric'],
            'hoten' => 'required',
            'password' => 'required',
        ]);

        if($validator->fails()){
            $message = 'Lỗi: dữ liệu trống hoặc không hợp lệ';
            return view('admin.create_account_admin',['message'=>$message]);
        }elseif($req->is_admin == null){
            $req=User::create([
                'hoten' => $req->hoten,
                'sdt' => $req->sdt,
                'password' => $req->password,
            ]);
            return redirect()->route('accounts.index');
        }else{
            $req=User::create([
                'hoten' => $req->hoten,
                'sdt' => $req->sdt,
                'password' => $req->password,
                'is_admin' => $req->is_admin
            ]);
            return redirect()->route('accounts.index');
        }

    }
    public function destroy(User $account){
        $account->delete();
        return redirect()->route('accounts.index');
    }
    public function edit(User $account){
        // dd($quanlytaikhoan);
        return view('admin.edit_account_admin',['user' => $account]);
    }
    public function update(Request $req,User $account){

        $validator = Validator::make($req->all(),[
            'sdt' => ['required', 'regex:/^[0-9]{10}$/','numeric'],
            'hoten' => 'required',
            'password' => 'required',
        ]);

        if($req->is_admin == null){
            $admin = 0;
        }else{
            $admin = $req->is_admin;
        }

        if($validator->fails()){
            $message = 'Lỗi: dữ liệu trống hoặc không hợp lệ';
            return view('admin.edit_account_admin',['message'=>$message,'user' => $account]);
        }elseif($account->password != $req->password)
        {
            $account->fill([
                'hoten' => $req->hoten,
                'sdt' => $req->sdt,
                'password' => \Hash::make($req->password),
                'is_admin' => $admin
            ]);
        }
        else{
            $account->fill([
                'hoten' => $req->hoten,
                'sdt' => $req->sdt,
                'is_admin' => $admin
            ]);
        }

        $account->save();

        return redirect()->route('accounts.index');
    }
}
