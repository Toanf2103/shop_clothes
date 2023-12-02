<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $table = "shops";
    protected $fillable = [
        'id_user',
        'id_ward',
        'status',
        'id_district',
        'id_district',
        'id_province',
        'email',
        'phone_number',
        'total_follower',
        'total_like',
        'avatar',
    ];
    public function products(){
        return $this->hasMany(Product::class,'id_shop','id');
    }
    public function owner(){
        return $this->hasOne(User::class,'id','id_user');
    }
    public function orders(){
        return $this->hasMany(Order::class,'id_shop','id');
    }
    
    
}
