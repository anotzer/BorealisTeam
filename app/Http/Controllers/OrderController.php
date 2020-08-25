<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class OrderController extends Controller
{
    //

    public function index ($id) {
        $order = Product::findOrFail($id);
        return view('order_page.index', compact('order'));
    }
}
