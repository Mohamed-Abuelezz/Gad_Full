<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationsStages extends Model
{
    use HasFactory;

    protected $table = 'education_stages';




    public function countries()
    {
        return $this->belongsTo(Countries::class , 'country_id');
    }


    public function profileScientificArticles()
    {
        return $this->hasMany(ProfileScientificArticles::class);
    }

    public function scientificArticles()
    {
        return $this->hasMany(ScientificArticles::class);
    }

}
