<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    use HasFactory;


    protected $table = 'countries';



    public function educationsStages()
    {
        return $this->hasMany(EducationsStages::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

}
