<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Showtime;
use App\Models\Room;
use App\Models\Cinema;
use App\Models\Film;
use App\Models\Ticket;
use App\Models\Bill;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ShowtimeController extends Controller
{
    //
    public function index(){
        // $lst = Showtime::all();
        if(Auth::user()->is_admin == 1)
        {
            $lst = Showtime::join('films','films.id','=','showtimes.film_id')
        ->join('rooms','rooms.id','=','showtimes.room_id')
        ->join('cinemas','rooms.cine_id','=','cinemas.id')
        ->select('showtimes.*','rooms.sophong','films.tenphim','cinemas.tenrap')
        ->paginate(5);
        return view('admin.index_showtime',['lst_showtime'=>$lst]);
        }
        else{
            return redirect()->route('/');
        }

    }
    public function edit(Showtime $showtime){
        $film = Film::all();
        $room = Room::all();
        $cinema = Cinema::all();
        return view('admin.edit_showtime',['showtime'=>$showtime],['lst_film'=>$film,'lst_room'=>$room,'lst_cinema'=>$cinema]);
    }
    public function update(Request $req,Showtime $showtime){

        if($req->trangthai == null){
            $trangthai = 0;
        }else{
            $trangthai = $req->trangthai;
        }
        $validator = Validator::make($req->all(),[
            'cine_id' => 'required',
            'room_id' => 'required',
            'thoigian' => 'required|date|after:now',
            'tien' => 'required|numeric',
        ]);
        if($validator->fails()){
            $film = Film::all();
            $room = Room::all();
            $cinema = Cinema::all();
            $message = 'Lỗi: dữ liệu trống hoặc có thể do giá(only number) và thời gian(lớn hơn hiện tại)';
            return view('admin.create_showtime',['message'=>$message,'lst_film'=>$film,'lst_room'=>$room,'lst_cinema'=>$cinema]);
        }else{
            $fomat = Carbon::parse($req->thoigian)->format('Y-m-d H:i:s');
            $showtime->fill([
                'film_id'=>$req->film_id,
                'room_id'=>$req->room_id,
                'trangthai' => $trangthai,
                'thoigian'=>$fomat,
                'tien' => $req->tien,
            ]);
            $showtime->save();
            return redirect()->route('showtimes.index');
        }

    }
    public function destroy(Showtime $showtime){
        $showtime->fill(['trangthai'=> 0]);
        $showtime->save();
        return redirect()->route('showtimes.index');
    }
    public function create(){
        $film = Film::all();
        $room = Room::all();
        $cinema = Cinema::all();
        return view('admin.create_showtime',['lst_film'=>$film,'lst_room'=>$room,'lst_cinema'=>$cinema]);
    }
    public function store(Request $req){

        if($req->trangthai == null){
            $trangthai = 0;
        }else{
            $trangthai =$req->trangthai;
        }

        $validator = Validator::make($req->all(),[
            'film_id' => 'required',
            'cine_id' => 'required',
            'room_id' => 'required',
            'thoigian' => 'required|date|after:now',
            'tien' => 'required|numeric',
        ]);

        if($validator->fails()){
            $message = 'Lỗi: dữ liệu trống hoặc có thể do giá(only number) và thời gian(lớn hơn hiện tại)';
            $film = Film::all();
            $room = Room::all();
            $cinema = Cinema::all();
            return view('admin.create_showtime',['message'=>$message,'lst_film'=>$film,'lst_room'=>$room,'lst_cinema'=>$cinema]);
        }else{
            //luu suat chieu
            $fomat = Carbon::parse($req->thoigian)->format('Y-m-d H:i:s');
            $showTime = Showtime::create([
                'film_id'=>$req->film_id,
                'room_id'=>$req->room_id,
                'thoigian'=>$fomat,
                'trangthai' => $trangthai,
                'tien' => $req->tien,
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
    }
    public function schieu(Request $req){


        // dd(Auth::check());
        if (!Auth::check()) {
            return redirect('/dangnhap');
        }
        $id = $req->id;
        // dd($id);
        $date = Carbon::now('Asia/Ho_Chi_Minh');
        $fomat = Carbon::parse($date)->format('Y-m-d H:i:s');

        $tmp = DB::table('showtimes')
        ->join('rooms','rooms.id','=','showtimes.room_id')
        ->join('cinemas','cinemas.id','=','rooms.cine_id')
        ->where ('film_id',$id)

        ->select('showtimes.id','showtimes.thoigian as thoigian','cinemas.tenrap as tenrap')
        ->orderBy('cinemas.tenrap','asc','thoigian','asc')


        // dieu kien thoi gian lon hon thoi gian hien tai
        ->where('thoigian','>',$fomat)
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
    public function test(){

        return('tested');
    }

}
