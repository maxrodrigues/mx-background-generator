<?php

namespace App\Providers;

use App\Services\FirstStep\Contracts\DwarfFirstStepServiceContract;
use App\Services\FirstStep\DwarfFistStepService;
use Illuminate\Support\ServiceProvider;

class DwarfFistStepServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DwarfFirstStepServiceContract::class, DwarfFistStepService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
