<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileScientificArticles extends Model
{
    use HasFactory;

    protected $table = 'profile_scientific_articles';



    public function profiles()
    {
        return $this->belongsTo(Profiles::class);
    }

    public function educationsStages()
    {
        return $this->belongsTo(EducationsStages::class);
    }

    public function scientificArticles()
    {
        return $this->belongsTo(ScientificArticles::class);
    }


}
