<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    use HasFactory;

    protected $table = 'profiles';



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function profiles_type()
    {
        return $this->belongsTo(Profiles_Type::class,'profiles_type_id');
    }

}
