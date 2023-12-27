<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Routes\Console as ConsoleRoutes; // Import the Console routes namespace

class Kernel extends ConsoleKernel
{
    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
        ConsoleRoutes\requireRoutes(); // Use the imported namespace for console routes
    }
}
?>
