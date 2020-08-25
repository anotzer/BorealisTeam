<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use App\CartItem;
use App\Product;

class Cart extends Model
{
    //
    protected $table = 'cart';
}
