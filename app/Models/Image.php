<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Image extends Model
{
    protected $table='image';
    protected $fillable=[

        'name',
        'id_product'
    ];
    use HasFactory;

    public function product(){
        return $this->belongsTo(Product::class,'id_product','id');
    }
}
