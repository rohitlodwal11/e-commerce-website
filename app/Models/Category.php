<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubCategory;



class Category extends Model
{
    use HasFactory;
   protected $primaryKey = 'id';

    protected $table ='categories';
    protected $fillable = [

    	'name',
        'image',
     ];
  
}
