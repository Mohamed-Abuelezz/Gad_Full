<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    protected $fillable = [
        'users_id',
        'display_name',
        'image_cover',
        'profiles_type_id',
        'email',
        'phone',
        'lat',
        'lng',
        'bio',
        'more_information',
    ];


    public function user()
    {
        return $this->belongsTo(User::class,'users_id');
    }

    public function profiles_type()
    {
        return $this->belongsTo(Profiles_Type::class,'profiles_type_id');
    }

}
