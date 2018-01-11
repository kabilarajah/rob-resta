@extends('layouts.app')
@include('partials.stylesheet')
@include('partials.header')

@section('content')



    <div class="container">
        <div class="col-md-8 col-md-offset-3">
        
        <h1>{{ $product->title }}</h1>


        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail"><img src="{{ asset($product->imagepath) }}" alt="" class="img-responsive"></div>

            </div>

            <div class="col-md-8">
                <h3>Rs. {{ $product->price }}</h3>
              
                

                
                <div class="row">
                <form method="post" action="{{route('product.update')}}">
                    <input type="hidden" name="id" value="{{$product->id}}">

                    
                    <input type="number" name="qty" value={{$q}} min="1" max="50" required  placeholder="Quantity">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-primary" value="Update Quantity">

                    <a href="{{route('product.index')}}" class="btn btn-success">Shop More</a>
                </form>

                </div>
            </div>

                <br><br>

                {{ $product->description }}
            </div> <!-- end col-md-8 -->
        </div> <!-- end row -->

    </div> <!-- end container -->

    <hr>
    <hr>

    <div class="spacer"></div>

        <div class="container">
            <h3>You may also like...</h3>

            @foreach ($interested as $product)

            
                <div class="col-md-3 ">
                    <div class="thumbnail">
                        <div class="caption text-center">
                            <a href=""><img src="{{ asset($product->imagepath) }}" alt="product" class="img-responsive"></a>

                            <a href="{{ route('product.addToCart',['id'=> $product->id])}}"><h3>{{ $product->title }}</h3></a>

                            <p><strong>Rs. {{ $product->price }}</strong></p>
                            
                        </div> <!-- end caption -->

                    </div> <!-- end thumbnail -->
                </div> <!-- end col-md-3 -->
            @endforeach

        </div> <!-- end row -->

       

        <div class="spacer"></div>

<link rel="stylesheet" href="{{asset('css/float.css')}}">
    <div class="container">
    <div class="row">
                    <div class="btn-float">
                        {{-- <button type="button" class="btn btn-default btn-circle btn-xl btn-lateral"></button><br> --}}
                        
                        <a href="{{route('product.shoppingCart')}}" class="btn btn-default btn-circle btn-xl btn-lateral" ><i class="fa fa-shopping-cart fa" aria-hidden="true"></i></a><br>

                        <a href="{{ url('/shop') }}" class="btn btn-default btn-circle btn-xl btn-lateral" ><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>

                    </div>
                    <!--fin buttons -->
    </div>
</div>
@endsection
