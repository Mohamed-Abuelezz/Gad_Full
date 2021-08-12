<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScientificArticles extends Model
{
    use HasFactory;


    protected $table = 'scientific_articles';


    public function educationsStages()
    {
        return $this->belongsTo(EducationsStages::class,'education_stage_id');
    }

// has many ///////////////////////
    public function profileScientificArticles()
    {
        return $this->hasMany(ProfileScientificArticles::class);
    }


}
