<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public $timestamps = false;

    //this accessor function
    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }

    //for mutatur function
    function setNameAttribute($value)
    {
    
        $this->attributes['name']=strtoupper("raj".$value);
    }

    
}