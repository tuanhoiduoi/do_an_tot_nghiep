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
        $ghe = \DB::table('chairs')->where('room_id',$idPhong)->select('*')->get();
//todo: ket bang ve, suat chieu, lay them cot id hoa don de biet ghe nao co nguoi khac dat roi
        $tick = Ticket::join('showtimes','showtimes.id','=','tickets.show_id')
        ->join('bills','bills.id','=','tickets.bill_id')->get();

        dd($tick);

        return view('user.chonghe',['dong'=>$dong,'cot'=>$cot,'ghe'=>$ghe, 'gia'=>$gia]);

    }
}
