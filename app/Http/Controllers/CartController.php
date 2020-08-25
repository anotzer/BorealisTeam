<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use app\cart_product;
use App\Product;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    public function index (Request $request) {
        $products = $request->session()->get('cart');

        $getProducts = [];
        if ($products == null)  return view('cart.index');
        else {
            foreach ($products as $product => $id) {
                $pr = Product::findOrFail($id['id']);

                $pr['price'] = $id['price'];
                $getProducts[$product] = $pr;
            }
            return view('cart.index', compact('getProducts'));
        }
    }


    public function addtocart (Request $request) {

//        $itemId = isset($request['item']) ? intval($request['item']) : null;
//        $request->session()->forget('cart');
        // This piece of code calculates the entire amount for the item
        $FullPriceOfProduct = floatval($request['product']['price'] + $request['advanced_price']);
        // end calculate

        $product = $request['product'];
        if (!isset($product)) return redirect()->back()->with('error', 'Product is not found');
        if(!$product)
            abort(404);

        $cart = session()->get('cart');

        //if cart is empty
        if (!$cart) {
            session()->put('cart', []);
        }
        array_push($cart, [
                    "id" => $product['id'],
                    "name" => $product['title'],
                    "price" => $FullPriceOfProduct,
                    "photo" => $product['image_id'],
        ]);

        session()->put('cart', $cart);



        $Response = array('success' => true, 'Content' => 'Product added to cart successfully!');
        echo json_encode($Response);
    }

    public function deleteFromCart (Request $request) {
        $cart = session()->get('cart');
        $id = intval($request['id']);
        if (!$cart) return redirect()->back()->with('error', 'Product is not exist in cart');


        $request->session()->forget('cart.'.$id);
        $Response = array('success' => true, 'Content' => 'Product deleted from cart successfully!');
        echo json_encode($Response);
    }


//    public function ajax_form () {
//        return view('home_page_test_3');
//    }
//    public function ajax (Request $request) {
//        return response()->json(['result' => $request->all()]);
//    }
//
//    public function actionAdd($id)
//    {
//        // Добавляем товар в корзину
//        Cart::addProduct($id);
//
//        // Возвращаем пользователя на страницу с которой он пришел
//        $referrer = $_SERVER['HTTP_REFERER'];
//        header("Location: $referrer");
//    }
//    //
//    /**
//     * Action для добавления товара в корзину при помощи асинхронного запроса (ajax)
//     * @param integer $id <p>id товара</p>
//     */
//    public function actionAddAjax(Request $request)
//    {
//        $id = intval($request->id);
//        // Добавляем товар в корзину и печатаем результат: количество товаров в корзине
//        echo Cart::addProduct($id);
//        return true;
//    }
}
