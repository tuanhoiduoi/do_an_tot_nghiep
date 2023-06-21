<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Cinema;

class RoomController extends Controller
{
    public function index(Room $room){
        $room = Room::all();
        return view('admin.index_room',['lst_room'=> $room]);
    }
    public function create(){
        $lst = Cinema::all();
        return view('admin.create_room',['lst_cinema'=> $lst]);
    }
    public function store(Request $req){
        $req = Room::create([
            'sophong'=>$req->sophong,
            'cine_id'=>$req->cine_id,
            'trangthai' => $req->trangthai,
        ]);
        return redirect()->route('rooms.index');
    }
    public function edit(Room $room){
        $lst = Cinema::all();
        return view('admin.edit_room',['lst_cinema'=>$lst],['room'=>$room]);
    }
    public function update(Request $req,Room $room){
        $room->fill([
            'sophong'=>$req->sophong,
            'cine_id'=>$req->cine_id,
            'trangthai' => $req->trangthai,
        ]);
        $room->save();
        return redirect()->route('rooms.index');
    }
    public function destroy(Room $room){
        $room->fill(['trangthai'=> 0]);
        $room->save();
        return redirect()->route('rooms.index');
    }
}
