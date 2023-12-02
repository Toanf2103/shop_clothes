<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopFollower extends Model
{
    use HasFactory;

    protected $table = "order_details";
    protected $fillable = [
        'id_shop',
        'id_user'
    ];
    public function user(){
        return $this->hasOne(User::class,'id_user','id');
    }
    public function shop(){
        return $this->hasOne(Shop::class,'id_shop','id');
    }
}
