<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Backoffice extends Model
{
    //
    protected $table = 'courses';

    protected $fillable = [

        'course_id',
        'course_school',
        'course_name',
        'course_category',
        'course_certificate',
        'course_cost',
        'course_detail',
        'course_learn',
        'course_result',
        'course_career',
        'course_youtube',
        'course_open',
        'course_close',
        'course_hours',
        'course_learn_start',
        'course_learn_end',
        'course_start',
        'course_end',
        'course_online',
        'image_course',
        'image_herobanner',

    ];
}
