<?php

namespace App\Models\Corses;

use Illuminate\Database\Eloquent\Model;

class Course_learn extends Model
{
    //
    protected $table =  'course_learn';

    protected $fillable = [
        'learn_id',
        'course_id',
        'course_learnning_detail',

    ];
}
