<?php

namespace App\Models;
use App\Models\Image;
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'price',
        'description',
        'image_id',
        'color',
        'size',
        'category_id',

    ];

    public function images(){
        return $this->hasMany(Image::class, 'id_product', 'id');
    }

    public function thumbnail(){
        return $this->hasOne(Image::class, 'id_product', 'id');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
