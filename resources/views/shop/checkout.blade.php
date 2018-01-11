@extends('layouts.app')
@include('partials.stylesheet')
@include('partials.header')

@section('title')
  <title>Checkout</title> 
@endsection

<div class="col-sm-10 col-md-6 col-md-offset-3 col-sm-offset-2" >@include('partials.carousal')</div>



  <div role="separator" class="divider"> </div>


@section('content')
    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         <h3><strong>Your Order </strong> </h3> 
                        </div>

                        @foreach($products as $product)

                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-3 col-xs-3">

                                   <div class="pane">
                                     <img src="{{ asset($cart->img_path($product['item']['id'] )) }}" class="img-responsive"/>   
                                  </div>
                                    
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="col-xs-12"><strong>{{ $product['item']['title'] }}</strong></div>
                                    <div class="col-xs-12"><small>Quantity: {{$product['qty'] }}</small></div>
                                </div>
                                <div class="col-sm-3 col-xs-3 text-right">
                                    <h6><span class="badge">Rs. {{ $product['price']  }}</span> </h6>
                                </div>
                            </div>
                          </div>

                           @endforeach 

                           <div class="panel-body">
                                <h3><div class="col-xs-12">
                                    
                                    <div class="pull-right"><span><h4><strong>Your Total :</strong><strong>Rs. {{ $total }}</strong></h4></span></div>
                                </div></h3>

                                <form action="{{route('checkout')}}" method="post">
                                    {{ csrf_field() }}

                                    
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="name" value="{{ Auth::user()->name }}">

                                    <div class="form-group"><hr /></div>
                                    <div class="form-group"><hr /></div>
                                    

                                <div class="col-xs-12"> 
                                    <div class="pull-right"><span><strong>
                                    Please Select Your Table:   </strong><input type="number" name="table" min="1" max="5" value="" required></span></div>
                                </div>
                                    
                                     
                      <div class="form-group"><hr /></div>
                                     
                               
                                
                            
                            <div class="form-group"><hr /></div>
                          
                                <div class="col-xs-12">
                                    <strong></strong>
                                    <div class="pull-right"><span></span><span> <input type="submit" class="btn btn-success pull-right" value="Place the Order"><br></span></div>
                                </div>


                                  </form>


                                </div>
                        
                        </div>
                    </div>




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
