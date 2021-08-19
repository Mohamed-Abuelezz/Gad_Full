<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileEducationStages extends Model
{
    use HasFactory;

    protected $table = 'Profile_education_stages';



    public function profiles()
    {
        return $this->belongsTo(Profiles::class , 'profile_id');
    }

    public function educationsStages()
    {
        return $this->belongsTo(EducationsStages::class,'Education_Stages_id');
    }




}
