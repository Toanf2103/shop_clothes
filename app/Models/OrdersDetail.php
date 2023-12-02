<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdersDetail extends Model
{
    use HasFactory;
    protected $table = "order_details";
    protected $fillable = [
        'id_order',
        'id_detail_product',
        'quantity',
        'price'
    ];
    public function order()
    {
        return $this->hasOne(Order::class, 'id', 'id_order');
    }

    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'id_detail_product');
    }
}
