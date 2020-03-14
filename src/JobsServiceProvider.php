<?php
namespace BrandStudio\SteveJobs;

use Illuminate\Support\ServiceProvider;

class JobsServiceProvider extends ServiceProvider
{

    public function register()
    {

    }

    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'brandstudio');
    }
}
