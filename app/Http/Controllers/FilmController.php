<?php

namespace App\Http\Controllers;

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
        $lst_film = Film::paginate(5);

        $this->fixImg($fil);
        return view('admin.index_film',['lst_film' => $lst_film]);
    }
    public function edit(Film $film){
        $this->fixImg($film);
        return view('admin.edit_film',['film'=>$film]);
    }
    public function update(Request $req,Film $film){
        //kiem tra co cap nhat hinh khong
        $path = $film->hinh;

        if($req->hasFile('hinh') && $req->hinh->isValid()){
            $fileName = $req->hinh->getClientOriginalName();
            $path = $fileName;
        }
        $film->fill([
            'tenphim'=>$req->tenphim,
            'hinh'=>$path,
            'noidung'=>$req->noidung,
            'thoiluong'=>$req->thoiluong,
            'daodien'=>$req->daodien,
            'trangthai'=>$req->trangthai,
        ]);
        $film->save();
        return redirect()->route('films.index');
    }
    public function create(){
        return view('admin.create_film');
    }
    public function store(Request $req){

        $validator = Validator::make($req->all(),[
            'tenphim' => 'required',
            'hinh' => 'required',
            'noidung' => 'required',
            'thoiluong' => 'required|numeric',
            'daodien' => 'required',
        ]);

        if($validator->fails()){
            $message = 'Lỗi: dữ liệu trống hoặc có thể thời lượng(only number)';
            return view('admin.create_film',['message'=>$message]);
        }else{
            $fileName = $req->hinh->getClientOriginalName();
            $path = $fileName;
            $req=Film::create([
                'hinh' => $path,
                'tenphim' => $req->tenphim,
                'noidung' => $req->noidung,
                'thoiluong' => $req->thoiluong,
                'daodien' => $req->daodien,
                'trailer' => 'trailer.mp4',
                'trangthai' => $req->trangthai,
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
