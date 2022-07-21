<?php

namespace App\Models;
use APP\Models\OrderItem;
use APP\Models\Product;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'phone',
        'add',
        'country',
        'code',
        'city',
        'payment_mode',
        'payment_id',

    ];
    public function product(){
        return $this->belongsTo(Product::class,'prod_id','id');

}

  
}
