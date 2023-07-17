<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Cinema;
use App\Models\Chair;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class RoomController extends Controller
{
    public function index(Room $room){
        // $cinema = Cinema::find(2); // lay rap theo id 2

        // $room = $cinema->rooms;
        // dd($room);
        if(Auth::user()->is_admin == 1)
        {
            $room = Room::paginate(5);
            return view('admin.index_room',['lst_room'=> $room]);
        }
        else{
            return redirect()->route('/');
        }

    }
    public function create(){
        $lst = Cinema::all();
        return view('admin.create_room',['lst_cinema'=> $lst]);
    }
    public function store(Request $req){

        $checkboxes = $req->input('ghe');
        if($req->trangthai == null){
            $trangthai = 0;
        }else{
            $trangthai = $req->trangthai;
        }
        if($checkboxes == null){
            $message = 'Lỗi: Bắt buộc phải tạo ghế';
            $lst = Cinema::all();
            return view('admin.create_room',['message'=>$message,'lst_cinema'=>$lst]);
        }

        $validator = Validator::make($req->all(),[
            'dong' => 'required|numeric',
            'cot' => 'required|numeric',
            'sophong' => 'required|numeric',
        ]);

        if($validator->fails()){
            $message = 'Lỗi: dữ liệu trống và số phòng, dòng, cột phải là số';
            $lst = Cinema::all();
            return view('admin.create_room',['message'=>$message,'lst_cinema'=>$lst]);
        }else{
            $dong = $req->input('dong');
            $cot = $req->input('cot');


            $room = Room::create([
                'sophong'=>$req->sophong,
                'dong' => $dong,
                'cot' => $cot,
                'cine_id'=>$req->cine_id,
                'trangthai' => $trangthai,
            ]);

            $latestId = Room::latest()->first()->id;

            for($i =0;$i< count($checkboxes);$i++){
                $value = $checkboxes[$i];
                $part = explode('-',$value);
                $chair = Chair::create([
                    'dong' => $part[1],
                    'cot' => $part[2],
                    'tenghe' => $part[0],
                    'room_id' => $latestId,
                ]);

            }


            return redirect()->route('rooms.index');
        }



    }
    public function edit(Room $room){
        $lst = Cinema::all();
        return view('admin.edit_room',['lst_cinema'=>$lst],['room'=>$room]);
    }
    public function update(Request $req,Room $room){
    }
    public function destroy(Room $room){
        $room->fill(['trangthai'=> 0]);
        $room->save();
        return redirect()->route('rooms.index');
    }
}
