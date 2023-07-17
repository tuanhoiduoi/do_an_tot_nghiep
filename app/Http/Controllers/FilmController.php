<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Film;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FilmController extends Controller
{
    //
    protected function fixImg(Film $fil){
        if($fil->hinh && !Storage::disk('public')->exists($fil->hinh) ){
            $fil->hinh = Storage::url($fil->hinh);
             $kqImg = str_replace('/storage','/images',$fil->hinh);
             $fil->hinh = $kqImg;
        }
        else{
             $fil->hinh = '/images/1.png';
        }
        // dd($fil->hinh);
    }
    public function index(Film $fil){
        // if (!Auth::check()) {
        //     return redirect('/');
        // }
        if(Auth::user()->is_admin == 1)
        {
            $lst_film = Film::paginate(5);

            $this->fixImg($fil);
            return view('admin.index_film',['lst_film' => $lst_film]);
        }
        else{
            return redirect()->route('/');
        }

    }
    public function edit(Film $film){
        $this->fixImg($film);
        return view('admin.edit_film',['film'=>$film]);
    }
    public function update(Request $req,Film $film){


        if($req->trangthai == null){
            $trangthai=0;
        }else{
            $trangthai = $req->trangthai;
        }

        $validator = Validator::make($req->all(),[
            'tenphim' => 'required',
            'noidung' => 'required',
            'thoiluong' => 'required|numeric',
            'daodien' => 'required',
        ]);
        if($validator->fails()){
            $message = 'Lỗi: dữ liệu trống hoặc không hợp lệ';
            $this->fixImg($film);
            return view('admin.edit_film',['message'=>$message,'film'=>$film]);
        }else{
            //kiem tra co cap nhat hinh khong
            $path = $film->hinh;
            $video = $film->trailer;
            if($req->hasFile('trailer') && $req->trailer->isValid()){
                $fileName = $req->trailer->getClientOriginalName();
                $video = $fileName;
            }

            if($req->hasFile('hinh') && $req->hinh->isValid()){
                $fileName = $req->hinh->getClientOriginalName();
                $path = $fileName;
            }
            $film->fill([
                'tenphim'=>$req->tenphim,
                'hinh'=>$path,
                'trailer' => $video,
                'noidung'=>$req->noidung,
                'thoiluong'=>$req->thoiluong,
                'daodien'=>$req->daodien,
                'trangthai'=>$trangthai,
            ]);
            $film->save();
            return redirect()->route('films.index');
        }

    }
    public function create(){
        return view('admin.create_film');
    }
    public function store(Request $req){

        $validator = Validator::make($req->all(),[
            'tenphim' => 'required',
            'noidung' => 'required',
            'thoiluong' => 'required|numeric',
            'daodien' => 'required',
            'trailer' => 'required',
        ]);

        if($req->trangthai == null){
            $trangthai = 0;
        }else{
            $trangthai = $req->trangthai;
        }
        if($validator->fails()){
            $message = 'Lỗi: dữ liệu trống hoặc hợp lệ';
            return view('admin.create_film',['message'=>$message]);
        }else{

            $req=Film::create([
                'hinh' => $req->hinh->getClientOriginalName(),
                'tenphim' => $req->tenphim,
                'noidung' => $req->noidung,
                'thoiluong' => $req->thoiluong,
                'daodien' => $req->daodien,
                'trailer' => $req->trailer->getClientOriginalName(),
                'trangthai' => $trangthai,
            ]);
            return redirect()->route('films.index');
        }


    }
    public function destroy(Film $film){
        $film->fill(['trangthai'=> 0]);
        $film->save();
        return redirect()->route('films.index');
    }
    public function allfilm(){
        // $film = Film :: where('trangthai','1')-> orderBy('films.id','desc')->get();
        $film = Film :: where('trangthai','1')-> orderBy('films.id',)->get();

        return view('user.phimdangchieu')->with('phim',$film);
    }
    public function ct_film($id ){

        $film = Film :: where ('id',$id)->get();
        return view('user.ctphim')->with('phim',$film);
    }
    // public function allfilm2(){
    //     // $film = Film :: where('trangthai','1')-> orderBy('films.id','desc')->get();
    //     $film = Film :: where('trangthai','0')-> orderBy('films.id','desc')->get();

    //     return view('user.phimsapchieu')->with('phim',$film);
    // }
}
