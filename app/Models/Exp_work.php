<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exp_work extends Model
{
    //
    protected $table = 'exp_works';
    protected $fillable = ['user_id','position','company','county','province','year','month'];
}
