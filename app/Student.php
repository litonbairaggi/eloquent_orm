<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    protected $table='students';

    protected $fillable = [
        'name', 'email',
    ];

    public function phone_profile(){
        return $this->hasOne('App\Phone', 'student_id', 'id');
    }
}
