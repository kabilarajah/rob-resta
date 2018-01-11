@extends('layouts.app')
@include('partials.stylesheet')
@include('partials.header')

@section('content')
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
          <div class="panel-heading">
            <span>
              
             <h2> {{ $product->title }} </h2>

              <small><a href="/products/{{$product->id}}/edit"><i class="fa fa-pencil" aria-hidden="true"></i> EDIT</a></small>
            </span>


            <span class="pull-right">

            Product_#  {{ $product->id}}
              
            </span>
            
            
          </div>

          <div class="panel-body">

         
         <div class="img-thumbnail pull-right"> <img src="{{asset($product->imagepath)}}" class="img-rounded" alt="Cinque Terre" width="200" height="150"></div>

           <div class="panel-body">Description<hr>{{$product->description}} </div>

           <div class="panel-body">Price <hr>Rs. {{$product->price}} </div>

         </div>

        </div>
      </div>
    </div>

  @endsection
