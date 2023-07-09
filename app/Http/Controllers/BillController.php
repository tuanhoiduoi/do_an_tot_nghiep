<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Bill;
use App\Models\User;

class BillController extends Controller
{
    public function index(){

        // $bill = Bill::join('users','bills.kh_id','=','users.id')->get();

        // $mana = view('admin.index_bill')->with('bill',$bill);
        // return view('trangchu_admin')->with('admin.index_bill',$mana);

         $bill = Bill::all();

        return view('admin.index_bill',['lst_bill'=> $bill]);
    }
    public function edit(Bill $bill){
        $kh = User::all();
        return view('admin.edit_bill',['bill'=>$bill,'lst_kh'=>$kh]);
    }
    public function update(Request $req,Bill $bill){
        $bill->fill([
            'kh_id'=>$req->kh_id,
            'ngaylap'=>$req->ngaylap,
            'veri' => $req->veri,
            'trangthai' => $req->trangthai,
        ]);
        $bill->save();
        return redirect()->route('bills.index');
    }
    public function create(){
        $lst = User::all();
        return view('admin.create_bill',['lst_kh'=> $lst]);
    }
    public function store(Request $req){
        do {
            $randomString = Str::random(8);
        } while (Bill::where('veri', $randomString)->exists());
        $req = Bill::create([
            'kh_id'=>$req->kh_id,
            'ngaylap'=>$req->ngaylap,
            'veri'=> $randomString,
            'trangthai' => $req->trangthai,
        ]);
        return redirect()->route('bills.index');
    }

    public function gdich(Request $req){

        //dd($req->id);
          //$idusers = $req->(Auth::user()->id);
         //dd(Auth::user()->id);

       $data = \DB::table('tickets')
       ->join('showtimes','showtimes.id','=','tickets.show_id')
       ->join('bills','bills.id','=','tickets.bill_id')
      ->join('users','bills.kh_id','=','users.id')
      ->join('films','showtimes.film_id','=','films.id')
      ->join('chairs','tickets.chair_id','=','chairs.id')
    //    ->join('films','films.id','=','showtimes.films_id')
    //    ->where('film_id','=' ,'tenphim')

        ->where('users.id',Auth::user()->id)


        ->select('users.*','showtimes.*','bills.ngaylap','films.tenphim','chairs.tenghe')->get();

        // dd($req->concac) ;
         //dd($data);
     //dd(Auth::user()->id);

       return view('user.gdich')->with('data',$data);
    }






}
