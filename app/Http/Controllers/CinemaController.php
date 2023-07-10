<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cinema;
use Illuminate\Support\Facades\Validator;

class CinemaController extends Controller
{
    public function index(){
        $lst_cinema = Cinema::all();
        return view('admin.index_cinema',['lst_cinema'=>$lst_cinema]);
    }
    public function edit(Cinema $cinema){
        return view('admin.edit_cinema',['cinema'=>$cinema]);
    }
    public function update(Request $req,Cinema $cinema){
        $cinema->fill([
            'tenrap' => $req->tenrap,
            'diachi' => $req->diachi,
            'trangthai' => $req->trangthai,
        ]);
        $cinema->save();
        return redirect()->route('cinemas.index');
    }
    public function create(){
        return view('admin.create_cinema');
    }
    public function store(Request $req){

        $validator = Validator::make($req->all(),[
            'tenrap' => 'required',
            'diachi' => 'required',
        ]);

        if($validator->fails()){
            $message = 'Lỗi: dữ liệu trống';
            return view('admin.create_cinema',['message'=>$message]);
        }else{
            $req=Cinema::create([
                'tenrap' => $req->tenrap,
                'diachi' => $req->diachi,
                'trangthai' => $req->trangthai,
            ]);
            return redirect()->route('cinemas.index');
        }

    }
    public function destroy(Cinema $cinema){
        $cinema->fill(['trangthai'=> 0]);
        $cinema->save();
        return redirect()->route('cinemas.index');
    }
}
