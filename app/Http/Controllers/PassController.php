<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pass;

use App\Order;

class PassController extends Controller
{
   public function passData(Request $request)
    {
        $order = Order::find($request->id);

        $pass = Pass::first();

        // $pass = new Pass();

        $pass->table = $order->table;

        $pass->name = $order->name;

    	$pass->save();

    	 // return redirect()->route('senddata', [$order->id]);

    	return back();

//         return redirect()->action(
// //     'OrderController@updateServe', ['request' => $request->id]
// );

        
     
    }


    public function sendData_table(request $request)
    {

        $pass = Pass::first();

        return view ('pass.pass_table',['pass'=>$pass]);
    }


      public function sendData_name(request $request)
    {

        $pass = Pass::first();

        return view ('pass.pass_name',['pass'=>$pass]);
    }

}
