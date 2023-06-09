<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AccountController extends Controller
{
    // public function Authlogin(){
    //     $admin_id = Session::get('admin_id');
    //     if($admin_id){
    //         return Redirect::to('dashboard');
    //     }else{
    //         return Redirect::to('admin')->send();
    //     }
    // }

    public function index(){
        $lst_user = User::all();
        return view('index_taikhoan',['lst_user' => $lst_user]);
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
        return redirect()->route('accounts.index');
    }
    public function destroy(User $account){
        $account->delete();
        return redirect()->route('accounts.index');
    }
    public function edit(User $account){
        // dd($quanlytaikhoan);
        return view('edit_account_admin',['user' => $account]);
    }
    public function update(Request $req,User $account){
        if($account->password != $req->password)
        {
            $account->fill([
                'hoten' => $req->hoten,
                'sdt' => $req->sdt,
                'password' => \Hash::make($req->password),
                'is_admin' => $req->is_admin
            ]);
        }
        else{
            $account->fill([
                'hoten' => $req->hoten,
                'sdt' => $req->sdt,
                'is_admin' => $req->is_admin
            ]);
        }


        $account->save();

        return redirect()->route('accounts.index');
    }
}
