<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    use HasFactory;

    protected $fillable=[
        'email',
        'name',
        'phone',
        'address',
        'province',
        'district',
        'ward',
        'note',
        'payment_type',
        'user_id'
    ];

    public function User(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function OrderDetail(){
        return $this->hasMany(OrderDetail::class,'order_detail_id','id');
    }
}
