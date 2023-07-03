<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Showtime;
use App\Models\Room;
use App\Models\Film;
use Carbon\Carbon;

class ShowtimeController extends Controller
{
    //
    public function index(){
        $lst = Showtime::all();
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
        $fomat = Carbon::parse($req->thoigian)->format('Y-m-d H:i:s');
        $req = Showtime::create([
            'film_id'=>$req->film_id,
            'room_id'=>$req->room_id,
            'thoigian'=>$fomat,
            'trangthai' => $req->trangthai,
        ]);
        return redirect()->route('showtimes.index');
    }
    public function schieu(Request $req){


        $id = $req->id;
        $suatchieu = DB::table('showtimes')
        ->where ('film_id',$id)
        ->join('cinemas','cinemas.id','=','showtimes.film_id')
        ->select('showtimes.id','cinemas.tenrap','showtimes.thoigian')
        ->get();


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
