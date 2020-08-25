<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_advanced_Option extends Model
{
    //
    protected $table = 'product_advanced_option';
    protected $fillable = [
        'product_id',
        'options_id'
    ];

    public function products () {
        return $this->hasMany(Product::class, 'product_id');
    }

    public function options () {
        return $this->hasMany(Option::class, 'options_id');
    }
}
