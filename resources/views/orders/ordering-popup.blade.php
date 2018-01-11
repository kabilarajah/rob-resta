
        <div class="col-md-3">
              <div class="thumbnail">
                
                 <a href="" class="btn" role="button" data-target="#{{$product->id}}" data-toggle="modal"><img src="{{asset($product->imagepath)}}"></a>

              </div>
            </div>
            
<div class="modal fade product_view" id="{{$product->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><i class="fa fa-times" aria-hidden="true"></i></a>
                <h3 class="modal-title">This is a Manual Order</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                        <img src="{{ asset($product->imagepath )}}" class="img-responsive">
                    </div>
                    <div class="col-md-6 product_content">
                        <h4>{{$product->title}}</h4>
                        <p>{{ $product->description }}</p>

                        <h3 class="cost">{{ $product->price }}</h3>


                                @include('orders.ordering-form')

                                  <a href="{{ route('order.remove',['id'=> $product->id] )}}" class="btn btn-danger" role="button"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a>

                                <a href="{{ route('order.shoppingCart')}}" class="btn btn-success" role="button"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a></p>
                                    



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>