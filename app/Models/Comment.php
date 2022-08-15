<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    use HasFactory;
    protected $table='comments';
    protected $fillable=[
        'content',
        'product_id',
        'user_id',
        'parent'
    ];
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
