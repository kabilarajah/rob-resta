
@extends('layouts.app')
@include('partials.stylesheet')
@include('partials.header')


@section('title', 'Profile')

<link href="{{ asset('css/timeline.css') }}" rel="stylesheet">

@section('content')



<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
		<div class="panel-body">

			<h2>Welcome {{ Auth::user()->name }} !!!</h2>
			<hr>
			<div>
			<h4>  You have Purchased for  <strong>{{ $total }} Rupees </strong> </h4>
			</div>




			@foreach($orders as $order)


			    <ul class="timeline">
			    
			        <li class="{{$user->timeLine($order->id)}}">
			          <div class="timeline-badge danger">{{$order->updated_at->format('j/m')}}</div>
			          <div class="timeline-panel">

				            <div class="timeline-heading">
				             <h4 class="timeline-title">{{$order->updated_at->format('l j M Y')}}<strong> ({{$order->updated_at->diffForHumans()}})</strong></h4>
				            </div>

				            <div><h4><strong>{{$order->name}}</strong></h4></div>

				            <div class="timeline-body">
				             
								  
				            	<div class="table-responsive">



								    <table class="table table-sm">
									  <thead>
									    <tr>
									      <th>Qty</th>
									      <th>Product</th>
									      <th>Price</th>
									    </tr>
									  </thead>

									  @foreach($order->cart->items as $item)
									  <tbody>
									    <tr>
									      <th scope="row">{{ $item['qty'] }}</th>
									      <td>{{$item['item']['title']}}</td>
									      <td>{{ $item['price'] }}</td>
									    </tr>
									  </tbody>
									   @endforeach
									</table>
									</div>

									<h4><strong> Total : {{ $order->cart->totalPrice }}</strong> </h4>

								    
								   
							

								
							</div>
			             
			            </div>
			         
			        </li>

			     </ul>  
			@endforeach

		</div>
	</div>
  </div>          
   

</div>

    






@stop