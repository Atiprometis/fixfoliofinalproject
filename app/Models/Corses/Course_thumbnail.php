<?php

namespace App\Models\Corses;

use Illuminate\Database\Eloquent\Model;

class Course_thumbnail extends Model
{
    //
    protected $table =  'course_thumbnails';

    protected $fillable = [
        'course_id',
        'thumbnails_images',


    ];

}
