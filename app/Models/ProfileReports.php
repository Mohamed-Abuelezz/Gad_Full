<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileReports extends Model
{
    use HasFactory;

    protected $table = 'profiles_reports';


    public function user()
    {
        return $this->belongsTo(User::class,'users_id');
    }

    public function profile()
    {
        return $this->belongsTo(Profiles::class,'profile_id');
    }

}
