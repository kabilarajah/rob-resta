<?php

namespace App\Http\Controllers;

use App\Order;

use Illuminate\Http\Request;

use Session;

use App\Product;

use App\Cart;

use Auth;

use Carbon\Carbon;




class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::latest()->get();

        $orders->transform(function($order, $key)
        {
            $order->cart = unserialize($order->cart);
            return $order;
        }); 

        $value = new Order;
       
        return view('orders.index',compact('orders','value'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $products = Product::all();
        // return view('orders.create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
       

        // $oldCart = Session::get('cart');

        // $cart = new Cart($oldCart);

        // $total = $cart->totalPrice; 
        //  //return view('shop.checkout', ['total'=> $total]);


        //  $order = new Order();
    
        //  $order->cart = serialize($cart);
        //  $order->name = $request->name;
        //  // $order->user_id = $request->id;
        //  $order->table = $request->table;
        //  $order->total = $total;

        //  Auth::user()->orders()->save($order);

        //  Session::forget('cart');


        // return redirect('/manual');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {



        $order = Order::find($id);

        $order->cart = unserialize($order->cart);

        $oldCart = $order->cart;


        Session::put('cart', $oldCart);

        $oldCart = Session::get('cart');

        $cart = $oldCart;

        $image = $cart;


        // return View('check',['cart'=>$cart ]);


        // return view('orders.ordering-shoppingcart', 
        //     ['products'=> $cart->items, 'totalPrice' => $cart->totalPrice,'cart'=> $cart] );






        return View('orders.edit-order',['products'=>$cart, 'order' => $order, 'image'=> $image]);






    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $oldCart = Session::get('cart');

        $cart = new Cart($oldCart);

        $total = $cart->totalPrice; 
         //return view('shop.checkout', ['total'=> $total]);


         $order = Order::find($id);
    
         $order->cart = serialize($cart);
         $order->name = $request->name;
         // $order->user_id = $request->id;
         $order->table = $request->table;
         $order->total = $total;

         Auth::user()->orders()->save($order);

         Session::forget('cart');


        return redirect('/manual');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::destroy($id);

        return back();

    }



    public function getIndex(request $request)
    {
        $products = Product::all();

        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);

        $q=1;

        // $q = $cart->getquantity($id);

        


         return view('orders.ordering',['products' => $products,'q'=>$q ,'cart'=> $cart]);
    }



    public function getAddToCart(Request $request, $qty)
    {
        $product = Product::findOrFail($request->id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);

        return back();

    }



    public function updateqty(request $request)
    {   

        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);

        $product = Product::findOrFail($request->id);

        $cart->add($product, $product->id);

        $cart->update($request->id, $request->qty);

        $request->session()->put('cart', $cart);

       return back();
       
    }



    public function getRemoveItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if(count($cart->items)>0){
            Session::put('cart', $cart);
        } 
        else
        {
            Session::forget('cart');
        }

        return back();
        
    }



   public function getCart()
    {
        if(!Session::has('cart')){ return view('orders.ordering-shoppingcart');}

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);



        return view('orders.ordering-shoppingcart', 
            ['products'=> $cart->items, 'totalPrice' => $cart->totalPrice,'cart'=> $cart] );
    }




   public function postCheckout(Request $request)
    {
        
        if(!Session::has('cart')){ return redirect()->route('order.index');}

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $total = $cart->totalPrice; 
         //return view('shop.checkout', ['total'=> $total]);


         $order = new Order();
    
         $order->cart = serialize($cart);
         $order->name = $request->name;
         // $order->user_id = $request->id;
         $order->table = $request->table;
         $order->total = $total;

         Auth::user()->orders()->save($order);

         flash('Admin! Your Customers order Placed !!!')->success();

         Session::forget('cart');
         return redirect()->route('order.index')->with('success','Order Placed');
     
    }



        public function getInvoice()
    {
        $orders = Order::latest()->get();

        $orders->transform(function($order, $key)
        {
            $order->cart = unserialize($order->cart);
            return $order;
        }); 


        $value = new Order;


       
        

        return View('invoice.index',['orders'=>$orders, 'value'=>$value ]);
    }



    public function intoCart($id)
    {

        $order = Order::find($id);

        $order->cart = unserialize($order->cart);

        $oldCart = $order->cart;


        Session::put('cart', $oldCart);

        $oldCart = Session::get('cart');

        $cart = new Cart($oldCart);


        return View('check',['cart'=>$cart ]);




    }




    public function updateServe(Request $request)
{
    
    $order = Order::find($request->id);
    $order->is_served = 1;
    $order->update();



    // if($order->active)
    // {
    //     $order->active = 'false';
    //     $order->update($input);
    // }
    // else{
    //     $order->active = 'true';
    //     $order->update($input);
    // }

    return back();
}

    public function updateNonServe(Request $request)
{
    
    $order = Order::find($request->id);
    $order->is_served = 0;
    $order->update();



    // if($order->active)
    // {
    //     $order->active = 'false';
    //     $order->update($input);
    // }
    // else{
    //     $order->active = 'true';
    //     $order->update($input);
    // }

    return back();
}

    public function paid(Request $request)
{
    
    $order = Order::find($request->id);
    $order->is_paid = 1;
    $order->update();



    // if($order->active)
    // {
    //     $order->active = 'false';
    //     $order->update($input);
    // }
    // else{
    //     $order->active = 'true';
    //     $order->update($input);
    // }

    return back();
}



   public function notify(request $request)
    {

        $view = $request->get('view');

        $orders = Order::all();


        if($view!=''){

            $orders->view_status;

        }

       if(isset($_POST["view"]))
        {

         if($_POST["view"] != '')
         {
          $update_query = "UPDATE orders SET view_status=1 WHERE view_status=0";
          mysqli_query($connect, $update_query);
         }
         $query = "SELECT * FROM orders ORDER BY id DESC LIMIT 5";
         $result = mysqli_query($connect, $query);
         $output = '';
         
         if(mysqli_num_rows($result) > 0)
         {
          while($row = mysqli_fetch_array($result))
          {

               $output =$row["table"];
           // $output .= '
           // <li>
           //  <a href="#">
           //   <strong>'.$row["table"].'</strong><br />
           //   <small><em>'.$row["name"].'</em></small>
           //  </a>
           // </li>
           // <li class="divider"></li>
           // ';
          }
         }
         else
         {
          // $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
          $output .= 'No Notification Found';

         }
         
         $query_1 = "SELECT * FROM orders WHERE view_status=0";
         $result_1 = mysqli_query($connect, $query_1);
         $count = mysqli_num_rows($result_1);
         $data = array(
          'notification'   => $output,
          'unseen_notification' => $count
         );
         echo json_encode($data);
        }


        return view('check',
            ['output'=> $output] );
    }







}
