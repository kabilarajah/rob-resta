@extends('layouts.app')
@include('partials.stylesheet')
@include('partials.header')


<link href="{{ asset('css/imageupload.css') }}" rel="stylesheet">


@section('content')
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
          <div class="panel-heading">
           <h3><strong> Edit Product</strong> </h3>
          </div>

          <div class="panel-body">
                <form action="/products/{{ $products->id }}" method="POST">

                       {{ method_field('PUT') }}
                      {{ csrf_field() }}


                  <div class="form-group">
                    <label for="content">Title</label>
                    <textarea name="title" class="form-control">{{$products->title}} </textarea>
                  </div>


                   <div class="form-group">
                    <label for="content">Description</label>
                    <textarea name="description" class="form-control">{{$products->description}} </textarea>
                  </div>

                   <div class="form-group">
                    <label for="content">Image Path</label>
                    <textarea name="imagepath" class="form-control">{{asset($products->imagepath)}} </textarea>
                  </div>


                   <div class="form-group">
                    <label for="content">Price</label>
                    <textarea name="price" class="form-control">{{$products->price}} </textarea>
                  </div>

                  

                <div class="panel-body">
                  <input type="submit" class="btn btn-success pull-right" value="Done"> </div>
                </form>


              



          </div>

        </div>
      </div>
    </div>

  @endsection


 <script src="{{ asset('js/imageupload.js') }}"></script>