<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fields extends Model
{
    use HasFactory;

    protected $table = 'fields';



    public function country()
    {
        return $this->belongsTo(Countries::class);
    }

    public function profiles_type()
    {
        return $this->belongsTo(Profiles_Type::class);
    }

}
