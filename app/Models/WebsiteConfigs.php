<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteConfigs extends Model
{
    use HasFactory;

    protected $table = 'websiteConfigs';

    protected $fillable = [
        'website_name_ar',
        'website_name_en',
        'website_logo',
        'charset',
        'author',
        'description_ar',
        'description_en',
        'keywords',
        'ourMessage_title_ar',
        'ourMessage_title_en',
        'ourMessage_desc_ar',
        'ourMessage_desc_en',
    ];





}
