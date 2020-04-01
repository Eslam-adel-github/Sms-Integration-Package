<?php

namespace Sms\Integration\Package;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class SmsProvider extends ServiceProvider
{

    public function boot()
    {
        if(!file_exists(base_path("config/sms_config.php"))) {
            $this->publishes([__DIR__ . "\config" => base_path("config")]);
        }
    }

    public function register()
    {
       $this->app->make('Sms\Integration\Package\SendSms');
    }
}
