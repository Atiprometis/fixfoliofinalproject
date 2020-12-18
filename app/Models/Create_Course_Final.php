<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Create_Course_Final extends Model
{
    protected $table = 'create_course_finals';
    protected $fillable = ['user_id','generation','corse_name','location','month_start','month_end'];
}
