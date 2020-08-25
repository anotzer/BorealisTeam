<?php

namespace App\Http\Controllers;

use App\Category;
use App\Category_Product;
use App\Option;
use App\Product;
use App\Product_image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Array_;

class AdminController extends Controller
{
    //
    public function index () {
        if (auth()->user()->role != 'admin'){
            abort('404');
        }
//        $category_list = Category::all();
        $category_list = DB::table('category')->paginate(10);
        return view('admin.admin-panel', compact('category_list'));
    }

    public function create_service (Request $request) {
//        dd($request->all());
        $op_name = json_decode($request['obj2'], TRUE);
        $op_price = json_decode($request['obj'], TRUE);

        if (auth()->user()->role != 'admin'){
            abort('404');
        }
        $input = $request->all();

//        $form_title     = $input['data'][1]['value'];
//        $form_desc      = $input['data'][2]['value'];
//        $form_price     = $input['data'][3]['value'];
//        $form_category  = $input['data'][4]['value'];
//
//        $form_inputs = [
//          'title'       => $form_title,
//          'description' => $form_desc,
//          'price'       => $form_price,
//        ];

        // add image in products
        $path = $request->file('image')->store('product_image', 'public');
        $img_Db = new Product_image ();
        $img_Db->path = asset('/storage/' . $path);
        $img_Db->save();


        // for auto create in products
        $input['user_id'] = auth()->user()->id; // указать что именно администратор создал заказ
        $input['image_id']  = $img_Db['id']; // Добавление идентификатора к заказу



        // Create product entity
        $product = new Product();
        $product->save();
        $product->update($input);
        /*
            Without an update, the identifier is not recorded in the options, I do not know why, but this is how it works and do not touch
        */

        foreach ($request['category'] as $category) {
            $product_category = new Category_Product();
            $product_category['product_id'] = $product->id;
            $product_category['category_id'] = $category;
            $product_category->save();
        }
//        $category = new Category_Product();
//        $category['product_id'] = $product->id;
//        $category['category_id'] = $input['category'];
//        $category->save();

        // Option in the product in moment create

        $i = 1;
        $array_option_name = array();
        foreach ($input as $option_name => $option) {
            if ($option_name == 'option_name_'.$i){
                array_push($array_option_name, $option);
                $i++;
            }
        }

        $j = 1;
        $price_option_array = array();
        foreach ($input as $price_option => $price) {
            if ($price_option == 'price_option_'.$j){
                array_push($price_option_array, $price);
                $j++;
            }
        }

        $result_array_price_option = array_combine($array_option_name, $price_option_array);
//        $result_array_price_option = array_combine($op_name, $op_price);
//        dd($result_array_price_option);
//

        foreach ($result_array_price_option as $name => $price ) {
            $create_op = new Option();
            $create_op['title'] = $name;
            $create_op['product_id'] = $product->id;
            $create_op['price'] = $price;
            $create_op->save();
        }
//        return redirect()->back()->with($path);
        return response()->json();
    }


    public function create_dis_button (Request $request) {
        $category = Category::all();
        foreach ($category as $categ) {
            if(isset($request['btn-del'])) {
                    $categ->where('id', $request[$categ->id.'_btn-category'])->delete();
            }
            else if (isset($request['btn-dis'])) {
                if ($categ->id == $request[$categ->id.'_btn-category']) {
                    $categ->active = 'disabled';
                    $categ->save();
                }
            }
            else {
                if ($categ->id == $request[$categ->id.'_btn-category']) {
                    $categ->active = 'activated';
                    $categ->save();
                }
            }
        }

//        if(isset($request['btn-del'])) {
//            foreach ($category as $categ) {
//                $categ->where('id', $request[$categ->id.'_btn-category'])->delete();
//            }
//        } else if (isset($request['btn-dis'])) {
//            foreach ($category as $categ) {
//                if ($categ->id == $request[$categ->id.'_btn-category']) {
//                    $categ->active = 'disabled';
//                    $categ->save();
//                }
//            }
//        } else {
//            foreach ($category as $categ) {
//                if ($categ->id == $request[$categ->id.'_btn-category']) {
//                    $categ->active = 'activated';
//                    $categ->save();
//                }
//            }
//        }
        return redirect()->back();
    }
}
