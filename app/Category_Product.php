<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_Product extends Model
{
    //
    protected $table = 'category_product';



    public function products () {
        return $this->hasMany(Product::class, 'product_id');
    }

    public function categories () {
        return $this->hasMany(Category::class, 'category_id');
    }
}
