<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialties extends Model
{
    use HasFactory;

    protected $table = 'specialties';



    public function country()
    {
        return $this->belongsTo(Countries::class);
    }

    public function profiles_type()
    {
        return $this->belongsTo(Profiles_Type::class);
    }

}
