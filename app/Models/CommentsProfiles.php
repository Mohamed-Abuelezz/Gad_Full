<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentsProfiles extends Model
{
    use HasFactory;


    protected $table = 'Comments_Profiles';




    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }

    

    public function profile()
    {
        return $this->belongsTo(Profiles::class , 'profile_id');
    }


}
