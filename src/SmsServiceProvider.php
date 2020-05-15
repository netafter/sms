<?php


namespace Netafter\Sms;


use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton('Sms', function () {
            return new Sms();
        });
    }

}
