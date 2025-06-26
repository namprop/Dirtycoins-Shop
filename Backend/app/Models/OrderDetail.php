<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    //

    use HasFactory;

    protected
    $fillable = [
        'qty',
        'amount',
        'total',
        'product_id',
        'order_id',
    ];

    public function Product(){
        return $this->belongsTo(Product::class,'product_id', 'id');
    }

    public function Order(){
        return $this->belongsTo(Order::class,'order_id', 'id');
    }

}
