<?php

namespace App\Models\Corses;

use Illuminate\Database\Eloquent\Model;

class Course_result extends Model
{
    //
    protected $table =  'course_result';
    protected $fillable = [
        'result_id',
        'course_id',
        'course_learn_finish_detail',

    ];
}
