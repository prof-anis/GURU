<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exams_setting extends Model
{
    function getCaseAttribute($value){
    	return json_decode($value,1);
    }

    
   protected $fillable = [
         'case', 'course',
    ];
}
