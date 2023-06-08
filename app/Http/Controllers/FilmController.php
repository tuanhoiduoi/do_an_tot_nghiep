<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use Illuminate\Support\Facades\Storage;

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
        $lst_film = Film::all();
        $this->fixImg($fil);
        return view('index_film',['lst_film' => $lst_film]);
    }
    public function edit(Film $film){
        $this->fixImg($film);
        return view('edit_film',['film'=>$film]);
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
        return view('create_film');
    }
    public function store(Request $req){
        $fileName = $req->hinh->getClientOriginalName();
        $path = $fileName;
        $req=Film::create([
            'hinh' => $path,
            'tenphim' => $req->tenphim,
            'noidung' => $req->noidung,
            'thoiluong' => $req->thoiluong,
            'daodien' => $req->daodien,
            'trangthai' => $req->trangthai
        ]);
        return redirect()->route('films.index');
    }
    public function destroy(Film $film){
        $film->fill(['trangthai'=> 0]);
        $film->save();
        return redirect()->route('films.index');
    }
}
