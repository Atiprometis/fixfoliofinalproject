<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    //
    protected $table = 'school';

    protected $fillable = [

        'school_id','school_name','school_detail','school_course','course_school'

    ];
}
