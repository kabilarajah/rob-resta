@extends('layouts.app')
@include('partials.stylesheet')
@include('partials.header')

@section('title', 'Page Title')

<div class="col-md-10 col-md-offset-1">

@section('content')

<div class="panel panel-default">


			<div class="panel-body">
					<div class="text-center">
					<h3><strong> This is Invoice</strong></h3><hr>
					 </div>
					    	<table class="table table-hover">
							  <thead>
							    <tr>
							      <th>#</th>
							      <th>Date</th>
							      <th>Customer Name</th>
							      <th>Table #</th>
							      <th>Order</th>
							      <th>Total</th>
							      <th>Actions</th>
							      <th>Final</th>
							     
							    </tr>
							  </thead>
							  <tbody>
							  	@foreach($orders as $order)
							    <tr class="{{$value->is_paid($order->id)}}">
							      <th scope="row">{{$order->id}}</th>
							      <td><h5>{{$order->updated_at->format('l j m Y')}} ({{$order->updated_at->diffForHumans()}})</h5></td>
							      <td>{{$order->name}}</td>
							      <td>{{$order->table}}</td>
							      

									<td>@include('orders.popup')</td>

									<td>{{$order->total}}</td>

								<td>	
								
								<form action="{{ route('order.delete',['id'=> $order->id])}}" method="POST">
								    {{ method_field('DELETE') }}
								    {{ csrf_field() }}


								    <a href="{{ route('order.edit',['id'=> $order->id])}}" class="btn btn-primary" role="button" target="_blank"><i class="fa fa-pencil" aria-hidden="true"></i></a>

								    <button type="submit" class="btn btn-danger "><i class="fa fa-trash-o" aria-hidden="true"></i></button>

								</form>

							</td>
						
								<td>

									<form method="post" action="{{url('/ispaid')}}">
									{{ csrf_field() }}
								    <input type="hidden" name="id" value="{{$order->id}}"/>
								    <button type="submit" class="btn btn-dark"><i class="fa fa-check" aria-hidden="true"></i></button>
									</form>

								</td>

								@endforeach

									</td>
							    </tr>

							  </tbody>
							</table>
		
		</div>
	</div>

</div>

@endsection