<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OffersSubmits extends Model
{
    use HasFactory;


    protected $table = 'subscribe_request';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'profile_id',
        'offer_id',
        'phone',
    ];



    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }

    public function profile()
    {
        return $this->belongsTo(Profiles::class , 'profile_id');
    }

    public function offer()
    {
        return $this->belongsTo(ConfigsOffers::class , 'offer_id');
    }


}
