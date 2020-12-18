<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilePortfolio extends Model
{
    //
    protected $table = 'profile_portfolios';
    protected $fillable = ['user_id','profile_location','profile_aboutme','profile_age','profile_sex',
    'profile_instinct','profile_province','profile_education',
    'profile_facebook','profile_phone','profile_email','profile_line'];


}
