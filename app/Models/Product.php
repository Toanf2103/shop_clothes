<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $fillable = [
        'id_shop',
        'name',
        'status',
        'brand',
        'material',
        'style',
        'weight',
        'packing_size',
        'descriptions',
        'total_like',
        'total_order',
        'rating_average',
    ];
    public function shop()
    {
        $this->hasOne(Shop::class, 'id_shop', 'id');
    }
    public function type()
    {
        $this->hasOne(Type::class, 'id_type', 'id');
    }
    public function comments(){
        $this->hasMany(Comments::class, 'id_product', 'id');
    }
}
