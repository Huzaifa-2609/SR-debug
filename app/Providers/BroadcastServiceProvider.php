<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;
use function base_path; // Importing the base_path function

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();

        // Importing channels.php using namespace import mechanism
        $this->loadChannels(base_path('routes/channels.php'));
    }

    /**
     * Load the channels file.
     *
     * @param  string  $path
     * @return void
     */
    protected function loadChannels($path)
    {
        require $path;
    }
}
