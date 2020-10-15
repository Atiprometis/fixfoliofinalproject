<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    //
    protected $fillable = [

        'id','course_name','course_type','course_date','course_hours','course_school_name','course_price','course_learn_start','course_learn_end'

    ];
}
