<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileViews extends Model
{
    use HasFactory;

    protected $fillable = ['user_ip','profile_id'];

    protected $table = 'Profile_Views';


    public function user()
    {
        return $this->belongsTo(User::class);
    }




    public function profile()
    {
        return $this->belongsTo(Profiles::class,'profile_id');
    }
    

    





}
