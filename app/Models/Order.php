<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "orders";
    protected $fillable = [
        'id_user',
        'id_shop',
        'sdt',
        'id_ward',
        'id_district',
        'id_province',
        'type_pay',
        'pay_id',
        'pay_status',
        'status',
        'user_note',
        'shipping_fee'
    ];
    public function shop()
    {
        return $this->hasOne(Shop::class, 'id_shop', 'id');
    }
    public function user()
    {
        return $this->hasOne(User::class, 'id_user', 'id');
    }
}
