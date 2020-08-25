<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    //
    public function create (Request $request) {
        $category = new Category();
        $category['title'] = $request['title'];
        $category->save();
        return redirect()->back();
    }
}
