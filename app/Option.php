<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    //
    protected $table = 'product_options';
    protected $fillable = [
      'title',
    ];
}
