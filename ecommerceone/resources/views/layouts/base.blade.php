<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ecommerce</title>
    <link href="{{URL::asset('assets/css/all.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('style.css')}}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Roboto+Slab:wght@200&display=swap" rel="stylesheet">
  </head>
  <body>
    @auth
      @if ($verification === 0)
          <div class="container my-3">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Verify Your Email Address') }}</div>
        
                        <div class="card-body">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            @endif
        
                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }},
                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      @endif
    @endauth
     <!-- first navbar start -->
      <nav class="navbar navbar-expand-lg bg-light" id="nav1">
        <div class="container">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <p>Free shipping on all orders over $75!</p>
                </li>
            </ul>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                
                <li class="nav-item">
                    <a class="nav-link" href="#">Wishlist</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" style="color: grey;">Currency:</a>
                </li>
                <li class="nav-item">
                    
                    <select name="currencies" id="currency">
                        <option value="USD">USD</option>
                        <option value="EGP">EGP</option>
                    </select>
                
                </li>  
                
                
                   <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">{{ __('Login') }}</a>
                    </li>
            
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">{{ __('Register') }}</a>
                    </li>
               @else
                    @if (Auth::user()->isAdmin == 1)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.show', Auth::user()) }}">My Account({{Auth::user()->name}})</a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="{{url('private')}}" id="Cart">Dashboard</a>
                        </li> 
                        <li class="nav-item"> 
                            <a class="nav-link" href="{{ route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                        <form id="logout-form" action="{{route('logout')}}" method="POST">
                            @csrf
                        </form>
                            
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('showprofile', Auth::user()) }}">My Account({{Auth::user()->name}})</a>
                        </li>
                        <li class="nav-item">
                            <i class="fa-solid fa-cart-shopping" id="cart-icon"></i> 
                        </li> 
                        <li class="nav-item"> 
                            <a class="nav-link" href="{{url('showcart')}}" id="Cart">MyCart [ {{$cart_count}} ] </a>
                        </li> 
                        <li class="nav-item"> 
                            <a class="nav-link" href="{{ route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                        <form id="logout-form" action="{{route('logout')}}" method="POST">
                            @csrf
                        </form> 
                    @endif
               @endguest
            </ul>
          </div>
        </div>
      </nav>
      <!-- first navbar end -->
      <!-- search start -->
      <div class="container d-flex align-items-center my-5" id="search-cont">
        <div class="custom-search">
          <form action="{{url('/search')}}" type="get">
            <input type="search" name="query"  class="custom-search-input" placeholder="Search Here What You Need..">
            <button class="custom-search-botton" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>  
          </form>
        </div>
      </div>
      <!-- search end -->
      <!-- 2nd nav start -->
      <div class="container-fluid" id="nav2">
        <header class="p-3 text-bg-dark">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              
              <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none mr-5 pr-5">
                <h1>fashion</h1>
              </a>
      
              <ul class="nav col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 ml-5 pl-5">
                <li><a href="/" class="nav-link px-2 text-secondary">Home</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Women</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Men</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Footwear</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Accessories</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Sales</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Blog</a></li>
              </ul>
      
            </div>
          </div>
        </header>
      </div>
      <!-- 2nd nav end -->
      @yield('content')

      <!-- footer start -->
      <div class="container-fluid" id="footer">
        <div class="row bg-dark p-5" >
          <div class="col">
            <ul>
              <li class="first py-3">
                <a href="#">Shops</a>
              </li>
              <li>
                <a href="#">New In</a>
              </li>
              <li>
                <a href="#">Women</a>
              </li>
              <li>
                <a href="#">Men</a>
              </li>
              <li>
                <a href="#">Shuhe Shoes</a>
              </li>
              <li>
                <a href="#">Bags&Accessories</a>
              </li>
              <li>
                <a href="#">Top Brands</a>
              </li>
              <li>
                <a href="#">Sale & Special Offers</a>
              </li>
              <li>
                <a href="#">LookBook</a>
              </li>
            </ul>
          </div>
          <div class="col">
            <ul>
              <li class="first py-3">
                <a href="#">INFORMATION</a>
              </li>
              <li>
                <a href="#">About Us</a>
              </li>
              <li>
                <a href="#">Costumer Service</a>
              </li>
              <li>
                <a href="#">New Collection</a>
              </li>
              <li>
                <a href="#">Best Sellers</a>
              </li>
              <li>
                <a href="#">Manufacturers</a>
              </li>
              <li>
                <a href="#">Privacy Policy</a>
              </li>
              <li>
                <a href="#">Terms and Conditions</a>
              </li>
              <li>
                <a href="#">Blog</a>
              </li>
            </ul>
          </div>
          <div class="col">
            <ul>
              <li class="first py-3">
                <a href="#">COSTUMER SERVICE</a>
              </li>
              <li>
                <a href="#">Search Terms</a>
              </li>
              <li>
                <a href="#">Advanced Search</a>
              </li>
              <li>
                <a href="#">Order Returns</a>
              </li>
              <li>
                <a href="#">Contact Us</a>
              </li>
              <li>
                <a href="#">RSS</a>
              </li>
              <li>
                <a href="#">Help and FAQs</a>
              </li>
              <li>
                <a href="#">Consultant</a>
              </li>
              <li>
                <a href="#">Store Locations</a>
              </li>
            </ul>
          </div>
          <div class="col" id="last">
            <ul>
              <li class="first py-3">
                <a href="#">NEWSLETTER</a>
              </li>
              <li>
                Sign Up for News Letter
              </li>
              <li>
                <form >
                  <div class="my-3">
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Type Your E-mail">
                  </div>
                  <div class="my-3">
                    <button type="submit" class="btn btn-primary  form-control">SUBSCRIBE</button>
                  </div>
                </form>
              </li>
              <li>
                <div class="row">
                  <div class="col"><i class="fa-brands fa-facebook fa-lg"></i></div>
                  <div class="col"><i class="fa-brands fa-twitter fa-lg"></i></div>
                  <div class="col"><i class="fa-brands fa-behance fa-lg"></i></div>
                  <div class="col"><i class="fa-brands fa-tumblr fa-lg"></i></div>
                  <div class="col"><i class="fa-brands fa-vimeo-v fa-lg"></i></div>
                  <div class="col"><i class="fa-brands fa-youtube fa-lg"></i></div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- footer end -->

      <script src="{{URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{URL::asset('assets/js/all.min.js')}}"></script>
      <!-- <script src="assets/js/script.js"></script>  -->
    </body>
</html>