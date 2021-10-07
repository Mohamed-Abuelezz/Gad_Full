<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileComments extends Model
{
    use HasFactory;

    protected $table = 'profiles_comments';


    public function user()
    {
        return $this->belongsTo(User::class,'users_id');
    }

    public function profile()
    {
        return $this->belongsTo(Profiles::class,'profile_id');
    }

}
