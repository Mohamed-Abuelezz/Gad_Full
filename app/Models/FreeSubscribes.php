<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreeSubscribes extends Model
{
    use HasFactory;


    protected $table = 'free_subscribes';

    protected $fillable = [
        'user_id',
        'profile_id',
    ];



    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }

    public function profile()
    {
        return $this->belongsTo(Profiles::class , 'profile_id');
    }


}
