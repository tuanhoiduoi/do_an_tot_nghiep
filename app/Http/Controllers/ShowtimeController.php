<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Showtime;
use App\Models\Room;
use App\Models\Film;
use App\Models\Ticket;
use Carbon\Carbon;


class ShowtimeController extends Controller
{
    //
    public function index(){
        // $lst = Showtime::all();
        $lst = Showtime::join('films','films.id','=','showtimes.film_id')
        ->join('rooms','rooms.id','=','showtimes.room_id')
        ->join('cinemas','cinemas.id','=','rooms.cine_id')
        ->select('showtimes.id','showtimes.thoigian','films.tenphim','cinemas.tenrap','rooms.sophong','showtimes.trangthai','showtimes.tien')
        ->get();
        // dd($lst);
        return view('admin.index_showtime',['lst_showtime'=>$lst]);
    }
    public function edit(Showtime $showtime){
        $film = Film::all();
        $room = Room::all();
        return view('admin.edit_showtime',['showtime'=>$showtime],['lst_film'=>$film,'lst_room'=>$room]);
    }
    public function update(Request $req,Showtime $showtime){
        $fomat = Carbon::parse($req->thoigian)->format('Y-m-d H:i:s');
        $showtime->fill([
            'film_id'=>$req->film_id,
            'room_id'=>$req->room_id,
            'trangthai' => $req->trangthai,
            'thoigian'=>$fomat,
        ]);
        $showtime->save();
        return redirect()->route('showtimes.index');
    }
    public function destroy(Showtime $showtime){
        $showtime->fill(['trangthai'=> 0]);
        $showtime->save();
        return redirect()->route('showtimes.index');
    }
    public function create(){
        $film = Film::all();
        $room = Room::all();
        return view('admin.create_showtime',['lst_film'=>$film,'lst_room'=>$room]);
    }
    public function store(Request $req){
        // so ve 25 chair bat dau tu 2


        //luu suat chieu
        $fomat = Carbon::parse($req->thoigian)->format('Y-m-d H:i:s');
        $showTime = Showtime::create([
            'film_id'=>$req->film_id,
            'room_id'=>$req->room_id,
            'thoigian'=>$fomat,
            'trangthai' => $req->trangthai,
            'tien' =>$req->tien,
        ]);


        //tao ve theo so luong ghe sau khi them suat chieu
        $numberChair = \DB::table('chairs')->where('room_id',$req->room_id)->count();

        $latestId = Showtime::latest()->first()->id;

        $layGhe = \DB::table('chairs')->where('room_id',$req->room_id)->select('*')->get();
        // dd($layGhe[$i]->id);

        for($i = 0; $i < $numberChair;$i++){
            $tick = Ticket::create([
                'show_id'=> $latestId,
                'chair_id'=> $layGhe[$i]->id,
                'bill_id'=> null,
            ]);
        }


        return redirect()->route('showtimes.index');
    }
    public function schieu(Request $req){


        $id = $req->id;

        $tmp = DB::table('showtimes')
        ->join('rooms','rooms.id','=','showtimes.room_id')
        ->join('cinemas','cinemas.id','=','rooms.cine_id')
        ->where ('film_id',$id)
        // dieu kien thoi gian lon hon thoi gian hien tai
        ->select('showtimes.id','showtimes.thoigian as thoigian','cinemas.tenrap as tenrap')
        ->orderBy('cinemas.tenrap','asc','thoigian','asc')
        ->get();
        $suatchieu=[];
        foreach ($tmp as $suat) {
            $suatchieu[$suat->tenrap][]=$suat;
        }

         //dd($suatchieu);
            return view('user.suatchieu')->with('schieu',$suatchieu);

    }
    public function timkiem(Request $req ){
        $dl = $req->input('timkiem');

        // $film = Film :: where('trangthai','1')-> orderBy('films.id','desc')->get();
        $film = Film::where("tenphim","like","%$dl%")->get();

        return view('user.phimdangchieu')->with('phim',$film);
    }
    // public function timkiem2(Request $req ){
    //     $dl2 = $req->input('timkiem2');
    //     dd($dl2);
    //     // $film = Film :: where('trangthai','1')-> orderBy('films.id','desc')->get();
    //     $film2 = Film::where("tenphim","like","%$dl%")->get();

    //     return view('user.phimsapchieu')->with('phim',$film2);
    // }

}
