<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadImages extends Model
{
    protected $table = 'upload_images';
    protected $fillable = ['user_id'];
}
