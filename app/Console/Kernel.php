<?php

namespace App\Console;
use App\Models\Ticket;
use App\Models\Bill;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{

    protected $commands = [
        'App\Console\Commands\TicketCommand'
    ];
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {


        $schedule->call(function () {
            $date = Carbon::now()->subMinutes(5);
            $format = Carbon::parse($date)->format('Y-m-d H:i:s');


            $tick = Ticket::join('bills','bills.id','=','tickets.bill_id')
            ->where('bills.trangthai','chưa thanh toán')
            ->where('bills.created_at','<',$format)->update(['bill_id'=>null]);

             $bill = Bill::where('created_at','<',$format)
            ->where('trangthai','chưa thanh toán')->delete();

        })->everyMinute();
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
