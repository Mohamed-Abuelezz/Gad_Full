<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use App\Http\Controllers\MyHelpersFunctios;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {

        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            $myHelpersFunctios = new MyHelpersFunctios();

            return (new MailMessage)->view(
                'Website.global widgets.notificationEmail', ['title' => 'Verification Email','desc'=>'please verify your email','url'=>$url,
                'meta' => $myHelpersFunctios->getMetaData(),
            ]
            );
        });

        
        $this->registerPolicies();

        //
    }
}
