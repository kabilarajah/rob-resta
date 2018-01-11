@extends('layouts.app')
@include('partials.stylesheet')
@include('partials.header')

  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>


@section('content')



<div class="panel-body">
  <div class="row content">
    <div class="col-sm-6">

       

   <div class="row">
   	<div class="col-md-3 col-md-offset-0">
       <a href="" class="btn" role="button" data-target="#" data-toggle="modal"><img src="http://tarch.in/img/placeholder/blogpost-placeholder-100x100.png"></a>
   </div>
   </div>

  <div class="row">
   	<div class="col-md-3 col-md-offset-3">
       <a href="" class="btn" role="button" data-target="#" data-toggle="modal"><img src="http://tarch.in/img/placeholder/blogpost-placeholder-100x100.png"></a>
   </div>
   </div>

     <div class="row">
   	<div class="col-md-3 col-md-offset-6">
       <a href="" class="btn" role="button" data-target="#" data-toggle="modal"><img src="http://tarch.in/img/placeholder/blogpost-placeholder-100x100.png"></a>
   </div>
   </div>



    </div>
    <br>


    
    <div class="col-sm-6">
      <div class="well">
		<iframe width="540" height="360" src="https://www.youtube.com/embed/NEnFHRd5pKU" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <!-- Single button -->
				<div class="btn-group">
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Action <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
				    <li><a href="#">Action</a></li>
				    <li><a href="#">Another action</a></li>
				    <li><a href="#">Something else here</a></li>
				    <li role="separator" class="divider"></li>
				    <li><a href="#">Separated link</a></li>
				  </ul>
				</div>
          </div>
        </div>
           <div class="col-sm-3">
          <div class="well">
            <!-- Single button -->
				<div class="btn-group">
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Action <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
				    <li><a href="#">Action</a></li>
				    <li><a href="#">Another action</a></li>
				    <li><a href="#">Something else here</a></li>
				    <li role="separator" class="divider"></li>
				    <li><a href="#">Separated link</a></li>
				  </ul>
				</div>
          </div>
        </div>

   <div class="col-sm-3">
          <div class="well">
            <!-- Single button -->
				<div class="btn-group">
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Action <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
				    <li><a href="#">Action</a></li>
				    <li><a href="#">Another action</a></li>
				    <li><a href="#">Something else here</a></li>
				    <li role="separator" class="divider"></li>
				    <li><a href="#">Separated link</a></li>
				  </ul>
				</div>
          </div>
        </div>

          <div class="col-sm-3">
          <div class="well">
            <!-- Single button -->
				<div class="btn-group">
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Action <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
				    <li><a href="#">Action</a></li>
				    <li><a href="#">Another action</a></li>
				    <li><a href="#">Something else here</a></li>
				    <li role="separator" class="divider"></li>
				    <li><a href="#">Separated link</a></li>
				  </ul>
				</div>
          </div>
        </div>
      </div>
      



      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="well">
            
            <div class="panel panel-defaut" >

            <table class="table table-bordered">
				  <thead>
				    <tr>
				      <th>#</th>
				      <th>First Name</th>
				      <th>Last Name</th>
				      <th>Username</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Mark</td>
				      <td>Otto</td>
				      <td>@mdo</td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Mark</td>
				      <td>Otto</td>
				      <td>@TwBootstrap</td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Jacob</td>
				      <td>Thornton</td>
				      <td>@fat</td>
				    </tr>
				    <tr>
				      <th scope="row">4</th>
				      <td colspan="2">Larry the Bird</td>
				      <td>@twitter</td>
				    </tr>
				  </tbody>
				</table>
				</div>



          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <ul class="list-group">
			  <li class="list-group-item">
			    <span class="badge">14</span>
			    Cras justo odio
			  </li>
			</ul>
			<ul class="list-group">
			  <li class="list-group-item">
			    <span class="badge">14</span>
			    Cras justo odio
			  </li>
			</ul>
			<ul class="list-group">
			  <li class="list-group-item">
			    <span class="badge">14</span>
			    Cras justo odio
			  </li>
			</ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection






