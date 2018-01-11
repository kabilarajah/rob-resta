@extends('layouts.app')
@include('partials.stylesheet')
@include('partials.header')




{{-- <link href="{{ asset('css/checkout.css') }}" rel="stylesheet"> --}}

<div class="col-md-6 col-md-offset-3">

@section('content')

@if(Session::has('cart'))

<div class="panel panel-default">


            <div class="panel-body">


                
            <div class="container">

                <div class="row">
                    
                    <div class="col-md-6 clearfix" id="basket">

                        <div class="box">



                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th >Product</th>
                                                <th>Description</th>
                                                <th>Quantity</th>
                                                <th>Price per Item</th>
                                            </tr>
                                        </thead>
                                        @foreach($products as $product)
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="pane">
                                    <a href="{{ route('product.view',['id'=> $product['item']['id']]) }}"><img src="{{ asset($cart->img_path($product['item']['id'] )) }}" class="img-thumbnail"/> </a>   
                                  </div>
                                                </td>
                                                <td>
                                                <p></p>
                                                <p></p>
                                                <p>
                                                <a href="{{ route('order.index') }}" class="btn btn-primary" role="button"><i class="fa fa-pencil" aria-hidden="true"></i></i></a>



                                                <a href="{{ route('order.remove',['id'=> $product['item']['id']]) }}" class="btn btn-danger" role="button"><i class="fa fa-trash-o" aria-hidden="true"></i></a></p>



                                                </p>
                                                </td>
                                                <td>
                                                    <span>  {{ $product['qty'] }}</span>
                                                </td>
                                                
                                                <td>{{ $product['price']  }}</td>
                                                
                                            </tr>
                                            
                                        </tbody>
                                        @endforeach
                                        <tfoot>

                                         {{--    <tr>
                                                <th colspan="5">Zwischensumme</th>
                                                <th colspan="2">€24.00</th>
                                            </tr> --}}
                                         
{{--                                              <tr>
                                                <th colspan="5"></th>
                                                <th colspan="2"></th>
                                            </tr> --}}
                                            <tr>
                                                <th colspan="3"></th>
                                                <th colspan="1"><h4>Total Rs.{{$totalPrice}}</h4></th>
                                            </tr>
                                        </tfoot>

                                    </table>

                                </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.content -->

                                <div class="box-footer">

                            <div class="box-header">

                            <form action="{{route('order.checkout')}}" method="post">

                                {{ csrf_field() }}
                                <div class="input-group col-md-6">

                                    {{-- <span><label for="validate-text">Customer Number</label><input type="number" name="user_id" class="form-control" value="" placeholder="Customer Number" required></span><hr> --}}
                                    <span><label for="validate-text">Customer Name</label><input type="text" name="name" class="form-control" value="" required placeholder="Customer Name"></span><hr>
                                    <span><label for="validate-text">Table Number</label><input type="number" name="table" min="1" max="5" value="" required class="form-control" placeholder="Table Number"></span>


                                </div>

                                <hr>

                            
                        </div>

                                     <div class="pull-left">
                                        <a href="{{url('/manual')}}" class="btn btn-default"><i class="fa fa-h-square" aria-hidden="true"></i> Home</a>
                                    </div>
                                    <div class=" pull-right">
                                        <a href="{{route('order.index')}}" class="btn btn-default" role="button"><i class="fa fa-refresh"></i> Order More</a>
                                        
                                        <button type="submit" class="btn btn-dark"> <i class="fa fa-cutlery" aria-hidden="true"></i>  Place An Order
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- /.box -->


                    </div>
                    <!-- /.col-md-9 -->

                    
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

       



    </div>
    <!-- /#all -->


    @else

        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>Please Add An Item !!! <a href="{{url('/manual')}}">Go Front</a> </h2>
            </div>
        </div>


    @endif






<script>
var max_w=150+'px';
var max_h=120+'px';
$(".pane").each(function(i) {
var this_w=$(this).height();
var this_h=$(this).width();
if (this_w/this_h < max_w/max_h) {
var h = max_h;
var w = Math.ceil(max_h/this_h * this_w);
} else {
var w = max_w;
var h = Math.ceil(max_w/this_w * this_h);
}
$(this).css({ height: h, width: w });
});
    
</script>



   @endsection

   {{--  <!-- #### JAVASCRIPT FILES ### -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/front.js"></script> --}}

    



</body>

</html>