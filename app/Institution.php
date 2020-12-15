<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    //
    protected $table = 'schools';

    protected $fillable = [

        'schools_id','schools_name','schools_detail',

    ];
}
