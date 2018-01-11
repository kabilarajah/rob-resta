<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Auth;

use App\Product;

use App\Cart;

use App\User;

class UserController extends Controller
{
    public function getProfile()
    {
    	$orders = Auth::user()->orders;
        

    	$orders->transform(function($order, $key)
    	{
    		$order->cart = unserialize($order->cart);
    		return $order;
    	}); 

       $user = new User;


       $total = Auth::user()->orders->sum('total');


    	return view ('user.profile', ['orders'=> $orders, 'user'=> $user, 'total'=> $total ]);
    }
}
