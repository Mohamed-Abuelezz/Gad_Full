<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentsReports extends Model
{
    use HasFactory;

    protected $table = 'comments_reports';


    public function comments()
    {
        return $this->belongsTo(ProfileComments::class,'profiles_comments_id');
    }

    public function profile()
    {
        return $this->belongsTo(Profiles::class,'profile_id');
    }

}
