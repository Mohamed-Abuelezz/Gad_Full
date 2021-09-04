<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'image',
        'password',
        'email_verified_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    

    public function profiles()
    {
        return $this->hasMany(Profiles::class);
    }
    public function favouritesProfile()
    {
        return $this->hasMany(FavouritesProfile::class);
    }
    public function commentsProfiles()
    {
        return $this->hasMany(CommentsProfiles::class);
    }
    public function ContactUs()
    {
        return $this->hasMany(ContactUs::class);
    }
    public function countries()
    {
        return $this->belongsTo(Countries::class,'country_id');
    }

    public function profileRates()
    {
        return $this->hasMany(ProfileRates::class);
    }

    public function profileViews()
    {
        return $this->hasMany(ProfileViews::class);
    }
    public function offersSubmits()
    {
        return $this->hasMany(OffersSubmits::class);
    }

    
}
