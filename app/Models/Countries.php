<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    use HasFactory;




    public function countries()
    {
        return $this->hasMany(User::class);
    }

    public function specialties()
    {
        return $this->hasMany(Specialties::class);
    }



}
