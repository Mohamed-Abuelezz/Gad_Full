<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Notifications\myMailNotification;
use Illuminate\Support\Facades\Config;

class User extends Authenticatable  implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function country()
    {
        return $this->belongsTo(Countries::class);
    }
    public function profileRates()
    {
        return $this->hasMany(ProfileRates::class);
    }

    public function profiles()
    {
        return $this->hasMany(Profiles::class);
    }

    public function sendPasswordResetNotification($token)
    {
        $url = url('/reset-password/'.$token);
    
        $this->notify(new myMailNotification( 
            Config::get('app.locale') == 'ar' ? 'اعادة تعيين الرقم السري' : 'Password Reseting',
            Config::get('app.locale') == 'ar' ? 'يرجي الذهاب لاعادة تعيين الرقم السري الخاص بك من جديد ' : 'Please go to reset your password again',
            $url));
    }
    



}
