<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;
    
    protected $table = "product_details";

    protected $fillable = [
        'id_product',
        'color',
        'size',
        'price',
        'quantity',
        'image'
    ];

    public function product(){
        return $this->hasOne(Product::class,'id','id_product');
    }
}
