<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigsOffers extends Model
{
    use HasFactory;


    protected $table = 'configs_offers';



    // has many ///////////////////////////

    public function profilesOffersSubscribers()
    {
        return $this->hasMany(ProfilesOffersSubscribers::class);
    }


}
