<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

//use App\Http\Product;

use App\Product;

use App\Cart;

use Auth;

use App\Order;

use App\Quantity;




class QuantityController extends Controller
{
    
	public function store(Request $request)
    {
     
     if(!Session::has('cart')){ return view('shop.shopping-cart');}

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        // return view('shop.shopping-cart', 
        //     ['products'=> $cart->items, 'totalPrice' => $cart->totalPrice] );
        $item = Product::findOrFail($id);
        $product = $cart->items;

        $quantity = Quantity::all();

        foreach($products as $product){

        $quantity->qty = $product['qty'] ;
		// $product['item']['title'] 
		$quantity->product_id = $product['item']['id'] ;
		$quantity->price =	$product['price'] 

		$quantity->save();


        }


    }






}
