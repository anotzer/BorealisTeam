<?php

namespace App\Http\Controllers;

use App\Category;
use App\Category_Product;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home_page_test_3');
    }

    public function list_view () {

        $products = Product::orderBy('created_at', 'DESC')->paginate(8);
        $categories = Category::all();
        return view('listv.list-view',compact('products'),compact('categories'));
    }

    public function category_list_view ($id) {
        $category_products = Category_Product::where('category_id', $id)->orderBy('created_at', 'DESC')->get();
        return view('listv.category-list-view',compact('category_products'));
    }

}
