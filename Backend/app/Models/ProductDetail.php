<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    //
    use HasFactory;

    protected $fillable = ['color', 'size', 'qty', 'product_id'];

    public function Product(){
        return $this->belongsTo(Product::class, 'product-id', 'id');
    }
}
