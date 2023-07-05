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
        //them lay gia ve theo phong
        $room = \DB::table('rooms')->where('id',$idPhong)->select('dong','cot')->get()[0];

        $dong = $room->dong;
        $cot = $room->cot;
        //$gia = $room->gia;
        $gia=50000;
        // dd($dong);
        //lay ghe tu id phong
        $ghe = \DB::table('chairs')
        ->leftjoin('tickets','tickets.chair_id','=','chairs.id')
        ->join('showtimes','showtimes.id','=','tickets.show_id')
        ->where('chairs.room_id',$idPhong)
        ->where('showtimes.id', $idSchieu)
        //->where('chairs.id', 1155)
        ->select('chairs.*', 'tickets.bill_id')->get();

        //dd($ghe);

        //  $ves = Ticket::whereNull('bill_id')->get();
        //  dd($ves);


        // $ves = \DB::table('tickets')
        // ->leftJoin('bills','tickets.bill_id','=','bills.id')
        // ->whereNull('bills.id')
        // ->get();
        //  dd($ve);


        // foreach($ves as $ve){
        //     $ve = Ticket::final($ve->id);
        //     $ve -> disabled = true;
        //     $ve -> save();
        // }

        return view('user.chonghe',['dong'=>$dong,'cot'=>$cot,'ghe'=>$ghe, 'gia'=>$gia]);

    }
}
