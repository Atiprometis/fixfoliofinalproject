<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course_final_images extends Model
{
    protected $table ='course_final_images';
    protected $fillable = ['course_final_images_id','course_final_id','user_id','images_path'];
}
