<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'user_address_id', 'products', 'total_price', 'coupon', 'razorpay_data', 'status'];

    protected $casts = [
        'products' => 'array',
        'razorpay_data' => 'array',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function userAddress() {
        return $this->belongsTo(UserAddress::class);
    }
}
