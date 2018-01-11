@extends('layouts.app')
@include('partials.stylesheet')
@include('partials.header')

<div class="text-align-center" >
@include('flash::message')

</div>

<link href="{{ asset('css/ordering.css') }}" rel="stylesheet">

<div class="col-md-12 ">

@section('content')

{{-- @if(Session::has('success'))

	<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<div id="confirm-message" class="alert alert-success pull-center"></div>
			</div>

	</div>

@endif --}}


	<div class="panel panel-default">
		<div class="panel-body">

            @foreach($products->chunk(4) as $productChunk)

                    @foreach($productChunk as $product)

                    @include('orders.ordering-popup')

                    @endforeach

            @endforeach

 		<div class="pull-right">
             <a href="{{ route('order.shoppingCart')}}" class="btn btn-success" role="button"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a></p>
             </div>
        </div>

    </div>
</div>


@endsection