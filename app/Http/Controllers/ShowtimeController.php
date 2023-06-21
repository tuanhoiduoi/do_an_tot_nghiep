<?php

namespace App\Http\Controllers;

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
            'phim_id'=>$req->phim_id,
            'phong_id'=>$req->phong_id,
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
            'phim_id'=>$req->phim_id,
            'phong_id'=>$req->phong_id,
            'thoigian'=>$fomat,
            'trangthai' => $req->trangthai,
        ]);
        return redirect()->route('showtimes.index');
    }
}