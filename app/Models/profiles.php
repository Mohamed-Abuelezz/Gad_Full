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



    public function subscribersType()
    {
        return $this->belongsTo(SubscribersType::class,'subscriber_type_id');
    }

// has many ///////////////////////////

    public function profilesOffersSubscribers()
    {
        return $this->hasMany(ProfilesOffersSubscribers::class);
    }
    
    
    public function profileScientificArticles()
    {
        return $this->hasMany(ProfileScientificArticles::class ,'profile_id');
    }

    public function profileEducationStages()
    {
        return $this->hasMany(ProfileEducationStages::class ,'profile_id');
    }


    

    
    public function favouritesProfile()
    {
        return $this->hasMany(FavouritesProfile::class);
    }

    public function commentsProfiles()
    {
        return $this->hasMany(CommentsProfiles::class);
    }  
    
    public function profileRates()
    {
        return $this->hasMany(ProfileRates::class,'profile_id');
    }





}
