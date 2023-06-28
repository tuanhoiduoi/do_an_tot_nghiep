<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Cinema;
use App\Models\Chair;

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
        $dong = $req->input('dong');
        $cot = $req->input('cot');

        $room = Room::create([
            'sophong'=>$req->sophong,
            'dong' => $dong,
            'cot' => $cot,
            'cine_id'=>$req->cine_id,
            'trangthai' => $req->trangthai,
        ]);

        $latestId = Room::latest()->first()->id;

        $checkboxes = $req->input('ghe');
        // $value = $checkboxes[0];
        // $part = explode('-',$value);
        // dd($part[0]);
        $sl=0;
        for($i = 1;$i <= $dong;$i++){
            for($j=1;$j<=$cot;$j++){
                $value = $checkboxes[$sl];
                $part = explode('-',$value);
                $chair = Chair::create([
                    'dong' => $part[1],
                    'cot' => $part[2],
                    'tenghe' => $part[0],
                    'room_id' => $latestId,
                ]);
                $sl++;
            }
        }

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
