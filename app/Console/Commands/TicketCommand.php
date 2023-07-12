<?php

namespace App\Console\Commands;
use App\Models\Ticket;
use Illuminate\Console\Command;

class TicketCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:ticket-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tick = Ticket::join('bills','bills.id','=','tickets.bill_id')->where('bills.trangthai','chưa thanh toán')
        ->update(['bill_id'=> null]);
    }
}
