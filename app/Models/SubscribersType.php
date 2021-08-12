<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscribersType extends Model
{
    use HasFactory;


    protected $table = 'subscribers_type';


    public function profiles()
    {
        return $this->hasMany(Profiles::class);
    }



}
