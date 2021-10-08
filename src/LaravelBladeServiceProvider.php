<?php


namespace Liaosp\LaravelBlade;


use Illuminate\Support\ServiceProvider;

class LaravelBladeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerViews();

    }

    public function registerViews()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'blade');
    }

}