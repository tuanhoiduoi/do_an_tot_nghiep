<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Chair;
use Carbon\Carbon;

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
          $schieu =\DB::table('showtimes')->where('id',$idSchieu)->select('tien')->get()[0];
        //   dd($schieu->tien);

         $gia=$schieu->tien;
        //   $gia=50000;


        // dd($dong);
        //lay ghe tu id phong

        $ghe = \DB::table('chairs')
        ->leftjoin('tickets','tickets.chair_id','=','chairs.id')
        ->join('showtimes','showtimes.id','=','tickets.show_id')
        ->where('chairs.room_id',$idPhong)
        ->where('showtimes.id', $idSchieu)
        //->where('chairs.id', 1155)
        ->select('chairs.*', 'tickets.bill_id')->get();

        // dd($ghe);

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

        // $ghe = \DB::table('chairs')->where('room_id',$idPhong)->select('*')->get();
//todo: ket bang ve, suat chieu, lay them cot id hoa don de biet ghe nao co nguoi khac dat roi
        // $tick = Ticket::join('showtimes','showtimes.id','=','tickets.show_id')
        // ->join('bills','bills.id','=','tickets.bill_id')->get();

        // dd($tick);


        return view('user.chonghe',['dong'=>$dong,'cot'=>$cot,'ghe'=>$ghe, 'gia'=>$gia,'suat'=>$idSchieu]);

    }

    public function tke(Request $req){
        // $id = $req->id;
        //   $sum = 0;
        // //lay all schieu co trong thang
        // $tks = \DB::table('showtimes')
        // ->whereMonth('thoigian','=','7')
        // ->whereYear('thoigian','=','2023')
        // ->select('*')->get();
        //  //dd($tks);
        // //lay vs tu schieu tong so ve trong schieu do
        // foreach ($tks as $tk) {
        //     $sl = \DB::table('tickets')
        //     ->where('show_id',$tk->id)
        //     ->whereNotNull("bill_id")
        //     ->get();
        //  $sum += $sl*$tk->tien;
        // }
        // // dd($sum);
        // //tien ,ve, hd.
        // //fiml,suatchieu,ve
        // //dd($sl);

            //Suatchieu,tickets,
            //lay gia tien phu thuoc showtimes
            //suatchieu co bao nhieu ve phu thuoc bang ve,lay bill_id lay ve ban dc

        $date = Carbon::now('Asia/Ho_Chi_Minh');
        $fomat = Carbon::parse($date)->format('Y');
        $fomat1 = Carbon::parse($date)->format('m');
        // $fomat2 = Carbon::parse($date)->format('d');
         //dd($fomat2);
        $tke = \DB::table('tickets')
        ->join('showtimes','showtimes.id','=','tickets.show_id')
        ->join('bills','bills.id','=','tickets.bill_id')
        // ->whereNotNull('tickets.bill_id')
        // ->whereDay('thoigian','>',$fomat2)
        ->whereMonth('thoigian','=',$fomat1)
        ->whereYear('thoigian','=',$fomat)
        ->select('*')->get();


        //  dd($tke);


      //return view('admin.doanhthu_index',['tongtien'=>$sum]);
    }
}
