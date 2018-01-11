<header>

          <nav class="navbar navbar-default navbar-static-top">
                      <div class="container">
                          <div class="navbar-header">

                              <!-- Collapsed Hamburger -->
                              <button type="button" class="navbar-toggle collapsed"  data-toggle="collapse" data-target="#app-navbar-collapse">
                                  <span class="sr-only">Toggle Navigation</span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                              </button>

                              <!-- Branding Image -->
                              <a class="navbar-brand" href="{{ url('/') }}">
                                 <i class="fa fa-coffee" aria-hidden="true"></i> <strong> Rob-Resta </strong>
                              </a>
                              
                          </div>

                          <div class="collapse navbar-collapse" id="app-navbar-collapse">
                              <!-- Left Side Of Navbar -->
                              <ul class="nav navbar-nav">
                                  &nbsp;

                                  
                              </ul>

                              <!-- Right Side Of Navbar -->
                              <ul class="nav navbar-nav navbar-right" style="margin-top: 1%">
                           
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
                                              <li><a href="#">Another action</a></li>
                                              <li><a href="#">Another action</a></li>

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
                                             
                                              <li><a href="#">Another action</a></li>
                                              <li><a href="#">Another action</a></li>

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

                  <title>@yield('title')</title>
</header>