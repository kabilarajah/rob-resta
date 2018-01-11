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

use App\Lib\CartQuantity;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function frontIndex()
    {
        $products = Product::all();

        return view ('front.index',['products'=>$products]);
    }


    public function index()
    {
        $products = Product::all();

        return view ('products.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create($request->all());

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $product = Product::findOrFail($id);

         return View('products.show',['product'=>$product]);








        // if($product == null){
        //     return View('errors.404');
        // }
        // else{
        //     return View('shop.product',['item'=> $cart->items,'product'=>$product, 'q'=> $q,
        //         'interested'=> $interested]);



        // return view('shop.shopping-cart', 
        //     ['products'=> $cart->items, 'totalPrice' => $cart->totalPrice] );


        // return view('shop.product', 
        //     ['products'=> $cart->items, 'totalPrice' => $cart->totalPrice] );
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $products = Product::findOrFail($id);

        if($products == null){
            return View('errors.404');
        }

        else{
            return View('products.edit',['products'=>$products]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product= Product::findOrFail($id);

        $product-> update($request->all());

        return redirect('/products')
;    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);

        return back();

        // $product = Product::find($id);    
        // $product->forceDelete();

        
    }






    public function view($id)
    {
         $product = Product::find($id);


       if(!Session::has('cart')){ return view('shop.shopping-cart');}
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $q = $cart->getquantity($id);

        $interested = Product::where('id', '!=', $id)->get()->random(4);


        return View('shop.product',['item'=> $cart->items,'product'=>$product, 'q'=> $q,
                'interested'=> $interested]);



        // return view('shop.shopping-cart', 
        //     ['products'=> $cart->items, 'totalPrice' => $cart->totalPrice] );


        // return view('shop.product', 
        //     ['products'=> $cart->items, 'totalPrice' => $cart->totalPrice] );
        
    }






 



    public function getIndex()
    {
        $products = Product::all();

        return view('shop.index',['products' => $products]);



        
    }

    public function getAddToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        //dd($request->session()->get('cart'));
        //return redirect('/');//->route('product.index');
        // return back();
        // return redirect('/product/');

        return redirect()->route('product.view',['id'=> $product->id]);
    }


    public function getReduceByOne($id)
    {
        $product = Product::findOrFail($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        
        $cart->reduceByOne($id);

        if(count($cart->items)>0){
            Session::put('cart', $cart);
        } 
        else
        {
            Session::forget('cart');
        }

        
        return redirect()->route('product.shoppingCart');
    }

    public function getIncreaseByOne($id)
    {
        $product = Product::findOrFail($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        
        $cart->increaseByOne($id);
        Session::put('cart', $cart);
        return redirect()->route('product.shoppingCart');

    }


     public function updateqty(request $request)
    {   
        //  $product = Product::findOrFail(1);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        

        $cart->update($request->id, $request->qty);

        $request->session()->put('cart', $cart);

        


        //dd($request->session()->get('cart'));
        //return redirect('/');//->route('product.index');

        // $item = Product::findOrFail($request->id);
        // $products = $cart->items;
        // $quantity = Quantity::all();

        // foreach($products as $product){
        // $quantity->qty = $product['qty'] ;

        // // $product['item']['title'] 
        // $quantity->product_id = $product['item']['id'] ;
        // $quantity->price =  $product['price']; 
        // $quantity->save();}

        // return back();
        return redirect()->route('product.index');

        
       
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

        
        return redirect()->route('product.shoppingCart');
    }


    public function getCart()
    {
        if(!Session::has('cart')){ return view('shop.shopping-cart');}

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);


       


        return view('shop.shopping-cart', 
            ['products'=> $cart->items, 'totalPrice' => $cart->totalPrice, 'cart'=> $cart] );
    }

    public function getCheckout()
    {
        if(!Session::has('cart')){ return view('shop.shopping-cart');}

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;      
        return view('shop.checkout', ['total'=> $total,'products'=> $cart->items, 'totalPrice' => $cart->totalPrice]);
    
    }

   
    public function postCheckout(Request $request)
    {
        
        if(!Session::has('cart')){ return redirect()->route('shop.shoppingCart');}

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $total = $cart->totalPrice; 
         //return view('shop.checkout', ['total'=> $total]);


         $order = new Order();
    
         $order->cart = serialize($cart);
         $order->name = Auth::user()->name;
         $order->user_id = Auth::user()->id;
         $order->table = $request->table;
         $order->total = $total;

          Auth::user()->orders()->save($order);

          

         Session::forget('cart');
         return redirect()->route('product.index')->with('success','Successfully Purchased !!!');
     
    }


}
