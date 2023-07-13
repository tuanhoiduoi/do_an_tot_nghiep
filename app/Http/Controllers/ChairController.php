<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Chair;
use App\Models\User;
use App\Models\Room;
use App\Models\Film;
use App\Models\Cinema;
use App\Models\Showtime;
use Carbon\Carbon;


class ChairController extends Controller
{
    public function index(){
        if(Auth::user()->is_admin == 1)
        {
            $ghe = Chair::paginate(5);
            return view('admin.index_chair',['lst_ghe'=>$ghe]);
        }
        else{
            return redirect()->route('/');
        }

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
        $totalUsers = User::all();
    $demusers = $totalUsers->count();
    // dd($demusers);
    //tài khoản đăng ký

    $totalTicketall = Ticket::all();
    $demticket = $totalTicketall->count();

    $totalTicketnotnull = Ticket::select('tickets.*')->whereNotNull('bill_id')->count();//số vé đã bán được
    $totalTicketnull = Ticket::select('tickets.*')->whereNull('bill_id')->count();

    //số vé chưa bán deleted_at
    $totalTicketdeleted_at = Ticket::select('tickets.*')->whereNull('deleted_at')->count();
    $totalRooms = Room::all();
    $demroom = $totalRooms->count();
    //tông số phòng hoạt động hiện tại

    $totalFilms  = Film::all();
    $demfilm = $totalFilms ->count();

    //tổng số phim đang có trên web

    $sum=0;
    $totalSums = \DB::table('tickets')
        ->join('showtimes','showtimes.id','=','tickets.show_id')
        ->join('bills','bills.id','=','tickets.bill_id')
        ->whereNotNull('bill_id')->get();

        foreach ($totalSums as $tk) {


         $sum += $tk->tien;
    }
    $totalcinema  = Cinema::all();
    $demcinema = $totalcinema ->count();

    $totalshowtime  = Showtime::all();
    $demshowtime = $totalshowtime ->count();

    // // $totalQuestion = DB::select("select count(*) as 'count' from question");


        $date = Carbon::now('Asia/Ho_Chi_Minh');
        $fomat = Carbon::parse($date)->format('Y');
        $fomat1 = Carbon::parse($date)->format('m');
        // $fomat2 = Carbon::parse($date)->format('d');
         //dd($fomat2);
         $sum1=0;
        $th1 = \DB::table('tickets')
        ->join('showtimes','showtimes.id','=','tickets.show_id')
        ->join('bills','bills.id','=','tickets.bill_id')
        ->whereMonth('thoigian','=',1)
        ->select('*')->get();
        foreach ($th1 as $t1) {

            $sum1 += $t1->tien;
       }
    //    dd($sum1);
       $sum2=0;
        $th2 = \DB::table('tickets')
        ->join('showtimes','showtimes.id','=','tickets.show_id')
        ->join('bills','bills.id','=','tickets.bill_id')
        ->whereMonth('thoigian','=',2)
        ->select('*')->get();
        foreach ($th2 as $t2) {

            $sum2 += $t2->tien;
       }
    //    dd($sum7);
         $sum3=0;
         $th3 = \DB::table('tickets')
        ->join('showtimes','showtimes.id','=','tickets.show_id')
        ->join('bills','bills.id','=','tickets.bill_id')
        ->whereMonth('thoigian','=',3)
        ->select('*')->get();

        foreach ($th3 as $t3) {

            $sum3 += $t3->tien;
       }
    //    dd($sum3);
        $sum4=0;
        $th4 = \DB::table('tickets')
        ->join('showtimes','showtimes.id','=','tickets.show_id')
        ->join('bills','bills.id','=','tickets.bill_id')
        ->whereMonth('thoigian','=',4)
        ->select('*')->get();

        foreach ($th4 as $t4) {

            $sum4 += $t4->tien;
       }
        //    dd($sum4);
        $sum5=0;
        $th5 = \DB::table('tickets')
        ->join('showtimes','showtimes.id','=','tickets.show_id')
        ->join('bills','bills.id','=','tickets.bill_id')
        ->whereMonth('thoigian','=',5)
        ->select('*')->get();
        foreach ($th5 as $t5) {

             $sum5 += $t5->tien;
        }
           // dd($sum5);
           $sum6=0;
           $th6 = \DB::table('tickets')
           ->join('showtimes','showtimes.id','=','tickets.show_id')
           ->join('bills','bills.id','=','tickets.bill_id')
           ->whereMonth('thoigian','=',6)
           ->select('*')->get();
           foreach ($th6 as $t6) {

                $sum6 += $t6->tien;
           }

           $sum7=0;
           $th7 = \DB::table('tickets')
           ->join('showtimes','showtimes.id','=','tickets.show_id')
           ->join('bills','bills.id','=','tickets.bill_id')
           ->whereMonth('thoigian','=',7)
           ->select('*')->get();
           foreach ($th7 as $t7) {

                $sum7 += $t7->tien;
           }
           $sum8=0;
           $th8 = \DB::table('tickets')
           ->join('showtimes','showtimes.id','=','tickets.show_id')
           ->join('bills','bills.id','=','tickets.bill_id')
           ->whereMonth('thoigian','=',8)
           ->select('*')->get();
           foreach ($th8 as $t8) {

                $sum8 += $t8->tien;
           }
           $sum9=0;
           $th9 = \DB::table('tickets')
           ->join('showtimes','showtimes.id','=','tickets.show_id')
           ->join('bills','bills.id','=','tickets.bill_id')
           ->whereMonth('thoigian','=',9)
           ->select('*')->get();
           foreach ($th9 as $t9) {

                $sum9 += $t9->tien;
           }
           $sum10=0;
           $th10 = \DB::table('tickets')
           ->join('showtimes','showtimes.id','=','tickets.show_id')
           ->join('bills','bills.id','=','tickets.bill_id')
           ->whereMonth('thoigian','=',10)
           ->select('*')->get();
           foreach ($th10 as $t10) {

                $sum10 += $t10->tien;
           }
           $sum11=0;
           $th11 = \DB::table('tickets')
           ->join('showtimes','showtimes.id','=','tickets.show_id')
           ->join('bills','bills.id','=','tickets.bill_id')
           ->whereMonth('thoigian','=',11)
           ->select('*')->get();
           foreach ($th11 as $t11) {

                $sum11 += $t11->tien;
           }
           $sum12=0;
           $th12 = \DB::table('tickets')
           ->join('showtimes','showtimes.id','=','tickets.show_id')
           ->join('bills','bills.id','=','tickets.bill_id')
           ->whereMonth('thoigian','=',12)
           ->select('*')->get();
           foreach ($th12 as $t12) {

                $sum12 += $t12->tien;
           }


      return view('admin.doanhthu_index',[
        'tongtien1'=>$sum1,
        'tongtien2'=>$sum2,
        'tongtien3'=>$sum3,
        'tongtien4'=>$sum4,
        'tongtien5'=>$sum5,
        'tongtien6'=>$sum6,
        'tongtien7'=>$sum7,
        'tongtien8'=>$sum8,
        'tongtien9'=>$sum9,
        'tongtien10'=>$sum10,
        'tongtien11'=>$sum11,
        'tongtien12'=>$sum12,
        'demusers' => $demusers,
            'demroom'=>$demroom,
            'demticket'=>$demticket,
            'totalTicketnull'=>$totalTicketnull,
            'totalTicketnotnull'=>$totalTicketnotnull,
            'demfilm'=>$demfilm,
            'sum'=>$sum,
            'demcinema'=>$demcinema,
            'demshowtime'=>$demshowtime,
            'totalTicketdeleted_at'=>$totalTicketdeleted_at,
    ]);
    }



}
