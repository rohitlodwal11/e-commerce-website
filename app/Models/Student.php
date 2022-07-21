<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
     protected $table = 'students';
   protected $fillable = [
     'name',
     'section',
     'cource',
     'gender',
     'image'
 ];

  public function setNameAttribute($value)
    {

    	$this->attributes['name'] = ucwords($value);
    	

    }
     public function setCourceAttribute($value)
    {

    	$this->attributes['cource'] = ucwords($value);
    	

    }
    
}
