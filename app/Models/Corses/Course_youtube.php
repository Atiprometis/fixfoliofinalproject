<?php

namespace App\Models\Corses;

use Illuminate\Database\Eloquent\Model;

class Course_youtube extends Model
{
    //
    protected $table =  'course_youtube';
    protected $fillable = [
        'youtube_id',
        'course_id',
        'youtube_link',
    ];

}
