<?php

namespace App\Models\Corses;

use Illuminate\Database\Eloquent\Model;

class Data_course_register extends Model
{
    //
    protected $table =  'data_course_register';

    protected $fillable = [
            'user_id',
            'course_id',
            'name',
            'lastname',
            'telphone',
            'email',
            'idcard',
            'birthday',
            'religion',
            'nationality',
            'career',
            'school',
            'branch',
            'qualification',
            'result',
            'dadname',
            'momname',
            'housenumber',
            'swine',
            'alley',
            'road',
            'district',
            'county',
            'province',
            'postalcode',
            'housenumber-present',
            'swine-present',
            'alley-present',
            'road-present',
            'district-present',
            'county-present',
            'province-present',
            'postalcode-present',
    ];
}
