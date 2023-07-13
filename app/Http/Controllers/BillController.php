<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Bill;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class BillController extends Controller
{
    public function index(){

        // $bill = Bill::join('users','bills.kh_id','=','users.id')->get();

        // $mana = view('admin.index_bill')->with('bill',$bill);
        // return view('trangchu_admin')->with('admin.index_bill',$mana);
        if(Auth::user()->is_admin == 1)
        {
            $bill = Bill::paginate(5);
            return view('admin.index_bill',['lst_bill'=> $bill]);
        }
        else{
            return redirect()->route('/');
        }

    }
    public function edit(Bill $bill){
        $kh = User::all();
        return view('admin.edit_bill',['bill'=>$bill,'lst_kh'=>$kh]);
    }
    public function update(Request $req,Bill $bill){

        $validator = Validator::make($req->all(),[
            'veri' => 'required|min:8|max:8',
            'trangthai' => 'required',
        ]);

        if($validator->fails()){
            $message = 'Lỗi: dữ liệu trống hoặc mã veri không đúng (veri phải có 8 ký tự)';
            $kh = User::all();
            return view('admin.edit_bill',['message'=>$message,'bill' => $bill,'lst_kh'=>$kh]);
        }else{
            $bill->fill([
                'kh_id'=>$req->kh_id,
                'ngaylap'=>$req->ngaylap,
                'veri' => $req->veri,
                'trangthai' => $req->trangthai,
            ]);
        }
        $bill->save();
        return redirect()->route('bills.index');
    }
    public function create(){
        $lst = User::all();
        return view('admin.create_bill',['lst_kh'=> $lst]);
    }
    public function store(Request $req){



        if($req->trangthai == null){
            $trangthai = 'chưa thanh toán';
        }else{
            $trangthai = $req->trangthai;
        }

            do {
                $randomString = Str::random(8);
            } while (Bill::where('veri', $randomString)->exists());
            $req = Bill::create([
                'kh_id'=>$req->kh_id,
                'ngaylap'=>$req->ngaylap,
                'veri'=> $randomString,
                'trangthai' => $trangthai,
            ]);
            return redirect()->route('bills.index');

    }

    public function destroy(Bill $bill){
        $bill->delete();
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


        ->select('users.*','showtimes.*','bills.ngaylap','films.tenphim','chairs.tenghe')
        ->orderBy('bills.id','desc')
        ->paginate(10);
// $count=count($data);
// dd($count);
        // dd($req->concac) ;
         //dd($data);
     //dd(Auth::user()->id);

       return view('user.gdich')->with('data',$data);
    }






}
