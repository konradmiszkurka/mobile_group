<?php

namespace App\Console;

use App\Services\CronService;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        \Log::debug('CRON CALLED');
        $schedule->call(function() {
            \Log::debug('CRON SERVICE CALLED');
            CronService::handle();
        })->hourly();
        // $schedule->command('inspire')
        //          ->hourly();
        $schedule->call(function () {
            CronService::handle();
        })->cron('0 1 * * *');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
