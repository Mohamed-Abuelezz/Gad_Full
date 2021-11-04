<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialties extends Model
{
    use HasFactory;

    protected $table = 'specialties';



    public function fields()
    {
        return $this->belongsTo(Fields::class,'field_id');
    }



}
