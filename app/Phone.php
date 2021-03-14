<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    //
    protected $table='phones';
    protected $fillable = [
        'student_id', 'phone',
    ];
    
}
