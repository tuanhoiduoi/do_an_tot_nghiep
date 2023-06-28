<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChairController extends Controller
{
    public function show(Request $req){

        $idSchieu = $req->id;

        //lay id phong
        $idPhong = \DB::table('showtimes')->where('id',$idSchieu)->select('room_id')->get()[0]->room_id;
        // dd($idPhong);

        // lay dong va cot theo id phong
        $kichThuoc = \DB::table('rooms')->where('id',2)->select('dong','cot')->get()[0];

        $dong = $kichThuoc->dong;
        $cot = $kichThuoc->cot;
        // dd($dong);
        //lay ghe tu id phong
        $ghe = \DB::table('chairs')->where('room_id',2)->select('*')->get();



        return view('user.chonghe',['dong'=>$dong,'cot'=>$cot,'ghe'=>$ghe]);
    }
}
