@extends('layouts.app')
@include('partials.stylesheet')
@include('partials.header')

<link href="{{ asset('css/imageupload.css') }}" rel="stylesheet">

@section('content')
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3><strong>Create Product</strong></h3>
          </div>

          <div class="panel-body">
                <form action="/products" method="POST">
                  {{ csrf_field() }}

                  
                  

                  <div class="form-group">
                    <label for="content">Title</label>
                    <input type="text" name="title" class="form-control" value="">
                  </div>

                  <div class="form-group">
                    <label for="content">Description</label>
                    <textarea name="description" class="form-control" value="0"> </textarea>
                  </div>

                  <div class="form-group">
                    <label for="content">Price</label>
                    <input type="number" name="price" class="form-control" value="0">
                  </div>

                  <div class="form-group">
                    <label for="content">Image Path</label>
                    {{-- <textarea name="imagepath" class="form-control" value="0"> </textarea> --}}



                    <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <i class="fa fa-trash-o" aria-hidden="true"></i> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <i class="fa fa-upload" aria-hidden="true"></i>
                        <span class="image-preview-input-title">Upload</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="imagepath"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 










                  </div>



                  

                <div class="panel-body">
                  <input type="submit" class="btn btn-success pull-right" value="Create the Product">
                </form>
          </div>

        </div>
      </div>
    </div>

@stop


 <script src="{{ asset('js/imageupload.js') }}"></script>