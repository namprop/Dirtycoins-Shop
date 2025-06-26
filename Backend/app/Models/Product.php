<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    use HasFactory;

    protected
        $fillable = [
            'name',
            'price',
            'qty',
            'discount',
            'description',
            'content',
            'badges',
            'brand_id',
            'product_category_id'
        ];

    public function ProductCategory()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }

    public function ProductImage()
    {
        return $this->hasMany(ProductImage::class, 'product_images', 'id');
    }

    public function ProductDetail()
    {
        return $this->hasMany(ProductDetail::class, 'product_details', 'id');
    }

    public function OrderDetail(){
        return $this->hasMany(OrderDetail::class,'order_detail_id','id');
    }
}
