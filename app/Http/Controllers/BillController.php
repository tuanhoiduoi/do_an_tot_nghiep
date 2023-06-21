<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\User;

class BillController extends Controller
{
    public function index(){
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
        ]);
        $bill->save();
        return redirect()->route('bills.index');
    }
}
