<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilesOffersSubscribers extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'config_offer_id',
        'starts_at',
        'finished_at'
    ];

    protected $table = 'profiles_offers_subscribers';


    public function profiles()
    {
        return $this->belongsTo(Profiles::class , 'profile_id');
    }


    public function configsOffers()
    {
        return $this->belongsTo(ConfigsOffers::class, 'config_offer_id');
    }


}
