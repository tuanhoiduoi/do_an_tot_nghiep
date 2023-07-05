<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Contracts\Support\Jsonable;


class TicketController extends Controller
{
    public function index(){
        // $ticket = Ticket::all();
        $ticket = Ticket::leftjoin('bills','bills.id','=','tickets.bill_id')
        ->join('showtimes','showtimes.id','=','tickets.show_id')
        ->join('chairs','chairs.id','=','tickets.chair_id')
        ->paginate(5);

        return view('admin.index_ticket',['lst_ticket'=> $ticket]);
    }
}
