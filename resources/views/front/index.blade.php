

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="{{asset('front/images/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('front/css/grid.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/camera.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">


    <script src="{{asset('front/js/jquery.js')}}"></script>
    <script src="{{asset('front/js/jquery-migrate-1.2.1.js')}}"></script>


    <script src='{{asset('front/js/device.min.js')}}'></script> 
   

<div class="toggle-menu-container">
            <nav class="nav">
                <div class="nav_title"></div>
                <a class="sf-menu-toggle fa fa-bars" href="#"></a>
                <ul class="sf-menu">
                    <li class="active">

                      <div class="container">
                          <div class="navbar-header">



                           
                                  <!-- Authentication Links -->
                                  @if (Auth::guest())

                                        <li><a href="{{ url('/shop') }}"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Shop</a></li>

                                        <li><a href="{{ route('product.shoppingCart') }}">
                                          <i class="fa fa-shopping-cart " aria-hidden="true"></i> 
                                          Cart  <span class="badge">
                                              {{ Session::has('cart') ? Session::get('cart')->totalQty :'0'}}
                                          </span></a>
                                        </li>
                                        <li><a href="{{ route('login') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Login</a></li>




                                    @elseif (Auth::user()->is_admin)

                                        <li><a href="{{ url('/manual') }}"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Admin Shop</a></li>

                                        
                                      <li><a href="{{ url('/ord-shopping-cart') }}">
                                          <i class="fa fa-shopping-cart " aria-hidden="true"></i> 
                                          Admin Cart  <span class="badge">
                                              {{ Session::has('cart') ? Session::get('cart')->totalQty :'0'}}
                                          </span></a>
                                        </li>
                                      <li class="dropdown">
                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user-secret " aria-hidden="true"></i>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                          </a>

                                          <ul class="dropdown-menu" role="menu">

                                              <li><a href="{{route('user.profile')}}" target="_blank"><i class="fa fa-user" aria-hidden="true"></i> My Profile</a></li>
                                              <li><a href="{{url('/orders')}}" target="_blank"><i class="fa fa-cutlery" aria-hidden="true"></i> Kitchen</a></li>
                                              <li role="separator" class="divider"></li>
                                              <li><a href="{{url('/products')}}" target="_blank"><i class="fa fa-bar-chart" aria-hidden="true"></i> All Products</a></li>
                                              <li role="separator" class="divider"></li>
                                              {{-- <li><a href="/manual"><i class="fa fa-linode" aria-hidden="true"></i> Custom Orders</a></li> --}}
                                              {{-- <li><a href="/ord-shopping-cart"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Manual Cart</a></li> --}}
                                              <li><a href="{{url('/invoice')}}" target="_blank"><i class="fa fa-info" aria-hidden="true"></i> Invoice</a></li>
                                              <li role="separator" class="divider"></li>
                                             {{--  <li><a href="#">Another action</a></li>
                                              <li><a href="#">Another action</a></li> --}}

                                              <li role="separator" class="divider"></li>

                                              <li>
                                                  <a href="{{ route('logout') }}"
                                                      onclick="event.preventDefault();
                                                               document.getElementById('logout-form').submit();">
                                                      Logout
                                                  </a>



                                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                      {{ csrf_field() }}
                                                  </form>
                                              </li>

                                              
                                          </ul>
                                      </li>


                                                                          
                                      
                                  @else

                                      <li><a href="{{ url('/shop') }}"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Shop</a></li>
                                        
                                      <li><a href="{{ route('product.shoppingCart') }}">
                                          <i class="fa fa-shopping-cart " aria-hidden="true"></i> 
                                          Cart  <span class="badge">
                                              {{ Session::has('cart') ? Session::get('cart')->totalQty :'0'}}
                                          </span></a>
                                        </li>
                                      <li class="dropdown">
                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user-plus" aria-hidden="true"></i>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                          </a>

                                          <ul class="dropdown-menu" role="menu">

                                              <li><a href="{{route('user.profile')}}" target="_blank"><i class="fa fa-user" aria-hidden="true"></i> My Profile</a></li>
                                              
                                              <li role="separator" class="divider"></li>
                                             
                                            {{--   <li><a href="#">Another action</a></li>
                                              <li><a href="#">Another action</a></li> --}}

                                              <li role="separator" class="divider"></li>

                                              <li>
                                                  <a href="{{ route('logout') }}"
                                                      onclick="event.preventDefault();
                                                               document.getElementById('logout-form').submit();">
                                                      Logout
                                                  </a>



                                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                      {{ csrf_field() }}
                                                  </form>
                                              </li>

                                              
                                          </ul>
                                      </li>

                                  @endif
                              </ul>
                          </div>
                      </div>
                  </nav>



 
            </nav>            
        </div>


  
</head>



<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>

        <div class="camera_container">
            <div id="camera" class="camera_wrap">
                  <div data-thumb="{{asset('front/images/slide04_thumb.jpg')}}" data-src="{{asset('front/images/slide04.jpg')}}">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
                <div data-thumb="{{asset('front/images/slide05_thumb.jpg')}}" data-src="{{asset('front/images/slide05.jpg')}}">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
                <div data-thumb="{{asset('front/images/slide03_thumb.jpg')}}" data-src="{{asset('front/images/slide03.jpg')}}">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
            </div>

            <div class="brand wow fadeIn">
                <h1 class="brand_name">
                    <a href="{{ url('/shop') }}">{{-- <i class="fa fa-coffee" aria-hidden="true"></i> --}} Rob Resta</a>
                </h1>
            </div>
        </div>
        
      

    </header>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
        <section class="well">
            <div class="container">
               <a href="{{url('/shop')}}"> <h2><em>Welcome</em>to Our <em>Restaurant</em></h2> </a>

            </div> 
            
            <div class="gallery">
                <div class="gallery_col-1">
                     <a data-fancybox-group="gallery" href="{{asset('front/images/page-1_img03_original.jpg')}}" class="gallery_item thumb lazy-img" style="padding-bottom: 93.96551724137931%;">
                        <img data-src="{{asset('front/images/page-1_img03.jpg')}}" alt="">
                        <div class="gallery_overlay">
                            <div class="gallery_caption">
                                <p><em>Lorem Blandit</em></p>
                                <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
                            </div>
                        </div>
                    </a>>
                    <a data-fancybox-group="gallery" href="{{asset('front/images/page-1_img04_original.jpg')}}" class="gallery_item thumb lazy-img" style="padding-bottom: 74.13793103448276%;">
                        <img data-src="{{asset('front/images/page-1_img04.jpg')}}" alt="">
                        <div class="gallery_overlay">
                            <div class="gallery_caption">
                                <p><em>Lorem Blandit</em></p>
                                <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
                            </div>
                        </div>
                    </a>
                    <a data-fancybox-group="gallery" href="{{asset('front/images/page-1_img05_original.jpg')}}" class="gallery_item thumb lazy-img" style="padding-bottom: 94.6551724137931%;">
                        <img data-src="{{asset('front/images/page-1_img05.jpg')}}" alt="">
                        <div class="gallery_overlay">
                            <div class="gallery_caption">
                                <p><em>Lorem Blandit</em></p>
                                <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="gallery_col-2">
                    <a data-fancybox-group="gallery" href="{{asset('front/images/page-1_img06_original.jpg')}}" class="gallery_item thumb lazy-img" style="padding-bottom: 52.48322147651007%;">
                        <img data-src="{{asset('front/images/page-1_img06.jpg')}}" alt="">
                        <div class="gallery_overlay">
                            <div class="gallery_caption">
                                <p><em>Lorem Blandit</em></p>
                                <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
                            </div>
                        </div>
                    </a>
                    <a data-fancybox-group="gallery" href="{{asset('front/images/page-1_img07_original.jpg')}}" class="gallery_item thumb lazy-img" style="padding-bottom: 55.97315436241611%;">
                        <img data-src="{{asset('front/images/page-1_img07.jpg')}}" alt="">
                        <div class="gallery_overlay">
                            <div class="gallery_caption">
                                <p><em>Lorem Blandit</em></p>
                                <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
                            </div>
                        </div>
                    </a>
                    <a data-fancybox-group="gallery" href="{{asset('front/images/page-1_img08_original.jpg')}}" class="gallery_item thumb lazy-img" style="padding-bottom: 96.10738255033557%;">
                        <img data-src="{{asset('front/images/page-1_img08.jpg')}}" alt="">
                        <div class="gallery_overlay">
                            <div class="gallery_caption">
                                <p><em>Lorem Blandit</em></p>
                                <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="gallery_col-3">
                    <a data-fancybox-group="gallery" href="{{asset('front/images/page-1_img09_original.jpg')}}" class="gallery_item thumb lazy-img" style="padding-bottom: 93.69676320272572%;">
                        <img data-src="{{asset('front/images/page-1_img09.jpg')}}" alt="">
                        <div class="gallery_overlay">
                            <div class="gallery_caption">
                                <p><em>Lorem Blandit</em></p>
                                <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
                            </div>
                        </div>
                    </a>
                    <a data-fancybox-group="gallery" href="{{asset('front/images/page-1_img10_original.jpg')}}" class="gallery_item thumb lazy-img" style="padding-bottom: 72.23168654173765%;">
                        <img data-src="{{asset('front/images/page-1_img10.jpg')}}" alt="">
                        <div class="gallery_overlay">
                            <div class="gallery_caption">
                                <p><em>Lorem Blandit</em></p>
                                <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
                            </div>
                        </div>
                    </a>
                    <a data-fancybox-group="gallery" href="{{asset('front/images/page-1_img11_original.jpg')}}" class="gallery_item thumb lazy-img" style="padding-bottom: 93.69676320272572%;">
                        <img data-src="{{asset('front/images/page-1_img11.jpg')}}" alt="">
                        <div class="gallery_overlay">
                            <div class="gallery_caption">
                                <p><em>Lorem Blandit</em></p>
                                <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
     
        <section class="parallax parallax1" data-parallax-speed="-0.4">
            <div class="container">
                <h2><em>This </em> will be a new <em>Experience</em></h2>
                <p class="indents-2">This is a whole new kind of hospitality, for the first time in Sri Lanka, The first restaurant with <a href="https://www.google.lk/search?q=NO_Human_Servants&oq=NO_Human_Servants&aqs=chrome..69i57&sourceid=chrome&ie=UTF-8">#NO_Human_Servants</a></p>
                <hr>
                <h3><strong><a href="{{url('/shop')}}" class="btn">Let's Start Shopping</a></strong></h3>
            </div>
        </section>
        <section class="well well__offset-1 bg-1">
            <div class="container">
                <h2><em>Our </em>Cooks</h2>
                <div class="row row__offset-1">
                    <div class="grid_4">
                        <figure>
                            <div class="img lazy-img" style="padding-bottom: 101.0810810810811%;"><img data-src="front/images/kabil.jpg" alt=""></div>
                            <figcaption>Kabilarajah</figcaption>
                        </figure>
                        <h3>EG/2013/2222 </h3>
                        <p>Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis.Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla.</p>
                    </div>
                    <div class="grid_4">
                        <figure>
                            <div class="img lazy-img" style="padding-bottom: 101.0810810810811%;"><img data-src="front/images/nimas.jpg" alt=""></div>
                            <figcaption>Nimas</figcaption>
                        </figure>
                        <h3>EG/2013/2274</h3>
                        <p>Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis.Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla.</p>
                    </div>
                    <div class="grid_4">
                        <figure>
                            <div class="img lazy-img" style="padding-bottom: 101.0810810810811%;"><img data-src="front/images/marsan.jpg" alt=""></div>
                            <figcaption>Marsan</figcaption>
                        </figure>
                        <h3>EG/2013/2270</h3>
                        <p>Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis.Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla.</p>
                    </div>
                </div>

            </div>
        </section>
        <section class="well well__offset-2">
            <div class="container center">
                <h2><em>Pay </em>a Visit</h2>
                <p class="indents-2">Fnteger convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla. Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis.Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol.</p>
                <address class="address-1">
                    <dl><dt></dt> <dd>Faculty of Engineering, University of Ruhuna</dd></dl>
                    <p><em>000 2345-6789</em></p>
                </address>
            </div>
        </section>
    </main>

    <!--========================================================
                              FOOTER
    =========================================================-->
    <footer>
        <div class="container">
            <ul class="socials">
                <li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
                <li><a href="https://www.tumblr.com/" class="fa fa-tumblr"></a></li>
                <li><a href="https://www.facebook.com/" class="fa fa-google-plus"></a></li>
            </ul>
            <div class="copyright">© <span id="copyright-year"></span> |
                <a href="#">Robo-Resta</a>
            </div>
        </div>
        
    </footer>
</div>










<script src="{{asset('front/js/script.js')}}"></script>

</body>
</html>