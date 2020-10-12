<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Backoffice extends Model
{
    //
    protected $table = 'backoffice';
    public $timestamps = true;

    protected $fillable = [
        'course_name','course_type',
    ];
}
