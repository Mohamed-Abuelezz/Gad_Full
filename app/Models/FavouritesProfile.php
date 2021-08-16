<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavouritesProfile extends Model
{
    use HasFactory;


    protected $table = 'Favourites_Profile';




    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }

    public function profile()
    {
        return $this->belongsTo(Profiles::class , 'profile_id');
    }


}
