<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'product';

    protected $fillable = [
        'title',
        'price',
        'description',
        'user_id',
        'image_id'
    ];

    public function options() {
        return $this->hasMany(Option::class, 'product_id');
    }

    public function image () {
        return $this->belongsTo(Product_image::class, 'image_id' );
    }
}
