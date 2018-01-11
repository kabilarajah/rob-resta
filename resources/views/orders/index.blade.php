@extends('layouts.app')
@include('partials.stylesheet')
@include('partials.header')




<div class="col-md-10 col-md-offset-1">

@section('content')

<div class="panel panel-default">


			<div class="panel-body">
				<div class="text-center">
					<h3><strong> This is Kitchen Order</strong></h3><hr>
					 </div>
					  
					    	<table class="table table-hover">
							  <thead>
							    <tr>
							      <th>#</th>
							      <th>Date</th>
							      <th>Customer Name</th>
							      <th>Table #</th>
							      <th>Order</th>
							      <th>Actions</th>
							      <th>Final</th>
							     
							    </tr>
							  </thead>
							  <tbody>
							  	@foreach($orders as $order)
							    <tr class="{{$value->is_served($order->id)}}">
							      <th scope="row">{{$order->id}}</th>
							      <td><h5>{{$order->updated_at->format('l j F Y')}} ({{$order->updated_at->diffForHumans()}})</h5></td>
							      <td>{{$order->name}}</td>
							      <td>{{$order->table}}</td>
							      

									<td>@include('orders.popup')</td>

								<td>	
								
								<form action="{{ route('order.delete',['id'=> $order->id])}}" method="POST">
								    {{ method_field('DELETE') }}
								    {{ csrf_field() }}


								    <a href="{{ route('order.edit',['id'=> $order->id])}}" class="btn btn-primary" role="button" target="_blank"><i class="fa fa-pencil" aria-hidden="true"></i></a>

								    <button type="submit" class="btn btn-danger "><i class="fa fa-trash-o" aria-hidden="true"></i></button>

									{{-- <button type="button" class="btn btn-success "><i class="fa fa-rocket" 	aria-hidden="true"></i></button> --}}

									{{-- <a href="{{ route('passdata',['id'=> $order->id])}}" class="btn btn-primary" role="button"><i class="fa fa-rocket" 	aria-hidden="true"></i></a> --}}
								</form>

								<form method="post" action="{{route('passdata')}}">
									{{ csrf_field() }}
								    <input type="hidden" name="id" value="{{$order->id}}"/>
								    <button type="submit" class="btn btn-success"><i class="fa fa-rocket" 	aria-hidden="true"></i></button>
								</form>

								

							</td>
						
								<td>

								<form method="post" action="{{url('/updateServe')}}">
									{{ csrf_field() }}
								    <input type="hidden" name="id" value="{{$order->id}}"/>
								    <button type="submit" class="btn btn-dark"><i class="fa fa-check" aria-hidden="true"></i></button>
								</form>
								<form method="post" action="{{url('/updatenonServe')}}">
									{{ csrf_field() }}
								    <input type="hidden" name="id" value="{{$order->id}}"/>
								    <input type="hidden" name="name" value="{{$order->name}}"/>
								    <button type="submit" class="btn btn-warning"><i class="fa fa-exclamation" aria-hidden="true"></i></button>
								</form>



								{{-- 	<form action="/orders" method="POST">
									<button type="submit" class="btn btn-dark"><i class="fa fa-check" aria-hidden="true"></i></button><input type="checkbox" name="" {{ $order->is_served == 1 ? 'checked' : '' }}></div>
								</form> --}}
								</td>

								@endforeach

									
							    </tr>

							  </tbody>
							</table>
		
		</div>
	</div>

</div>

@endsection