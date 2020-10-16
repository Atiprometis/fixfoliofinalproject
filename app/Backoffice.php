<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Backoffice extends Model
{
    //
    protected $table = 'course_detail';

    protected $fillable = [
        'course_school_name',
        'course_name',
        'course_type',
        'course_certificate',
        'course_price',
        'course_text_detail',
        'course_learnning',
        'course_learn_finish',
        'course_career',
        'course_linkYoutube',
        'course_open',
        'course_close',
        'course_hours',
        'course_date',
        'course_learn_start',
        'course_learn_end',
        'course_pattern',
        'course_pic',
        'course_pic_study',
        'course_school_link',

    ];
}
