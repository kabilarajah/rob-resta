@extends('layouts.app')
@include('partials.stylesheet')
@include('partials.header')


<link href="{{ asset('css/table.css') }}" rel="stylesheet">


<div class="col-md-10 col-md-offset-1">

@section('content')

<div class="panel panel-default">



	

			<div class="panel-body">

				
										  
					<table class="table table-hover">
							  <thead>

							    <tr>
							      <th>#</th>
							      <th>Title</th>
							      <th style="width:80%">Description</th>
							      <th style="width:80%">Image</th>

							      <th >Price</th>
							      <th style="width:150px">Actions</th>
							      <th><a class="btn btn-success" href="{{ url('/products/create') }}" role="button"><i class="fa fa-plus " aria-hidden="true"></i> Add New</a></th>
							      
							     
							    </tr>
							  </thead>
							  <tbody>
							  	@foreach($products as $product)
							    <tr>
							      <th scope="row">{{$product->id}}</th>
							      
							      <td> <a href="{{ route('product.show',['id'=> $product->id]) }}"> {{$product->title}}</a></td>
							      <td>{{$product->description}}</td>
							      <td>
							      <div class="thumbnail">
							      <img src="{{asset($product->imagepath)}}" class="rounded float-left" alt="..."></div></td>

							      <td style="width:150px"><strong>{{$product->price}}</strong></td>
							      

								<td >	
								
								<div style="width:150px">

								

								{{-- <form action="{{ route('product.delete',['id'=> $product->id])}}" method="POST">
								    {{ method_field('DELETE') }}
								    {{ csrf_field() }}
								    <button type="button" class="btn btn-danger "><i class="fa fa-ban" aria-hidden="true"></i></button>
								</form> --}}

								<form action="{{ route('product.delete',['id'=> $product->id])}}" method="POST" >
								    {{ method_field('DELETE') }}
								    {{ csrf_field() }}
								    <a href="{{ route('product.edit',['id'=> $product->id])}}" class="btn btn-primary" role="button"><i class="fa fa-pencil" aria-hidden="true"></i></a>
								    <button type="submit" class="btn btn-danger " ><i class="fa fa-trash-o" aria-hidden="true"></i></button>
								</form>

								

								{{-- <a href="{{ route('product.delete',['id'=> $product->id])}}" class="btn btn-danger" role="button"><i class="fa fa-ban" aria-hidden="true"></i></a> --}}



							</div>
						</td>
								

							</td>
						
								

								@endforeach

									</td>
							    </tr>

							  </tbody>
							</table>


		
</div>
		<div>



	</div>
</div>

@endsection



 <script src="{{ asset('js/table.js') }}">
 	
 	$(function () {
    $('#table').bootstrapTable({
        resizable: true,
        headerOnly: true,
        data: data
    });
});

 </script>