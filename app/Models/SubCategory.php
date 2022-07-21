<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;


class SubCategory extends Model
{
    use HasFactory;
    protected $table = 'sub_categories';
   protected $primaryKey = 'id';
   protected $id = '$category->name';
   protected $guarded = [];

    public function category(){
	return $this->belongsTo(category::class, 'category_id', 'id');
}
}
