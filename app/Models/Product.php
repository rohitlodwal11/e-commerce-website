<?php

namespace App\Models;
use App\Models\SubCategory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;





class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
    'category_id',
   'subcategory_id',
      'name',
      'brand',
      'price',
    'sell_price',
     'image'

];
public function subcategory(){
	return $this->belongsTo(SubCategory::class, 'subcategory_id', 'id');
}
}
