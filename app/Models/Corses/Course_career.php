<?php

namespace App\Models\Corses;

use Illuminate\Database\Eloquent\Model;

class Course_career extends Model
{
    //
    protected $table =  'course_career';

    protected $fillable = [
        'career_id',
        'course_id',
        'course_career_detail',
    ];
}
