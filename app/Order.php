<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use app\User;

use Auth;

class Order extends Model
{
   /* public funtion user($user)
    {
    	return $this->belongsTo('App\User');
    }*/


    public function is_paid($id){


        $order = Order::find($id);

        $value = $order->is_paid;

        if( $value == 1)
        {
        	return 'info';
        }

        elseif($value == 0){
        	return '';
        }

        else{}

    
    }


	 public function is_served($id){


        $order = Order::find($id);

        $value = $order->is_served;

        if( $value == 1)
        {
        	return 'info';
        }

        elseif($value == 0){
        	return '';
        }

        else{}

    
    }





}
