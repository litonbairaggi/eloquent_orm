<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table='posts';
    protected $fillable = [
        'student_id', 'category_id', 'title', 'description',
    ];
}
