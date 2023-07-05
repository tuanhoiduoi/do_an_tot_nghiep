<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Chair;

class ChairController extends Controller
{
    public function index(){
        $ghe = Chair::all();
        return view('admin.index_chair',['lst_ghe'=>$ghe]);
    }

    public function show(Request $req){

        $idSchieu = $req->id;

        //lay id phong
        $idPhong = \DB::table('showtimes')->where('id',$idSchieu)->select('room_id')->get()[0]->room_id;
        // dd($idPhong);

        // lay dong va cot theo id phong

        $room = \DB::table('rooms')->where('id',$idPhong)->select('dong','cot')->get()[0];

        $dong = $room->dong;
        $cot = $room->cot;
        //$gia = $room->gia;
        //lay gia theo schieu
        $gia=50000;
        // dd($dong);
        //lay ghe tu id phong


        return view('user.chonghe',['dong'=>$dong,'cot'=>$cot,'ghe'=>$ghe, 'gia'=>$gia]);

    }
}
