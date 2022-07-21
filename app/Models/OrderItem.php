<?php

namespace App\Models;
use App\Models\Order;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $table = 'order_items';
    protected $guarded = ['id'];
    protected $fillable = [
        'order_id',
        'prod_id',
        'qty',
        'price',
    ];
    public function product(){
        return $this->belongsTo(Product::class, 'prod_id' ,'id');
    }
   
}