<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Cinema;
use Illuminate\Support\Facades\Validator;

class CinemaController extends Controller
{
    public function index(){
        if(Auth::user()->is_admin == 1)
        {
            $lst_cinema = Cinema::all();
            return view('admin.index_cinema',['lst_cinema'=>$lst_cinema]);
        }
        else{
            return redirect()->route('/');
        }

    }
    public function edit(Cinema $cinema){
        return view('admin.edit_cinema',['cinema'=>$cinema]);
    }
    public function update(Request $req,Cinema $cinema){

        if($req->trangthai == null){
            $trangthai = 0;
        }else{
            $trangthai = $req->trangthai;
        }
        $validator = Validator::make($req->all(),[
            'tenrap' => 'required',
            'diachi' => 'required',
        ]);
        if($validator->fails()){
            $message = 'Lỗi: dữ liệu trống hoặc không hợp lệ';
            return view('admin.edit_cinema',['message'=>$message,'cinema'=>$cinema]);
        }else{
            $cinema->fill([
                'tenrap' => $req->tenrap,
                'diachi' => $req->diachi,
                'trangthai' =>$trangthai,
            ]);
            $cinema->save();
            return redirect()->route('cinemas.index');
        }

    }
    public function create(){
        return view('admin.create_cinema');
    }
    public function store(Request $req){


        if($req->trangthai == null){
            $trangthai =0;
        }else{
            $trangthai = $req->trangthai;
        }

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
                'trangthai' => $trangthai,
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
