<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\MailSetting;
use Illuminate\Support\Facades\Config;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Paginator::useBootstrap();
        $mailSetting = MailSetting::first();
        if($mailSetting){
            $data = [
                'transport'   => $mailSetting->mail_transport,
                'host'        => $mailSetting->mail_host,
                'port'        => $mailSetting->mail_port,
                'encryption'  => $mailSetting->mail_encryption,
                'username'    => $mailSetting->mail_username,
                'password'    => $mailSetting->mail_password,
                'from'        =>[
                    'address' => $mailSetting->mail_from,
                    'name' => $mailSetting->mail_name,
                ],
                
            ];
            // dd($data);
            Config::set('mail',$data);
            // dd(config('custom_mail_config'));
        }
        
    }
}
