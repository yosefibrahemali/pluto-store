<!DOCTYPE html>

<html class="no-js" lang="en">

<head>
    <style>
        *{
            list-style:  none;
            
        }
    </style>
    <meta charset="utf-8">
<title>Siri Store</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'Laravel') }}</title>

<link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:title" content="">
<meta property="og:type" content="">
<meta property="og:url" content="">
<meta property="og:image" content="">   
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/imgs/theme/favicon.ico')}}">
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
<link rel="stylesheet" type="text/css" href="your_website_domain/css_root/flaticon.css">
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="module" src="./index.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<livewire:styles />
</head>

<body>
    <header class="header-area header-style-1 header-height-2">
        @if(session('success'))
        <div class="alert alert-success ">
            {{session('success')}}
        </div>
        @endif
        @if(session()->has('message'))
        <p class="alert alert-warning"> {{ session()->get('message') }}</p>
        @endif
        @if(session()->has('danger'))
        <p class="alert alert-danger"> {{ session()->get('danger') }}</p>
        @endif
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                        <ul>
                            
                                <li>
                                    <a class="language-dropdown-active" href="#"> <i class="fi-rs-world"></i> English <i class="fi-rs-angle-small-down"></i></a>
                                    <ul class="language-dropdown">
                                        <li><a href="{{route('language','ar')}}"><img src="{{asset('assets/imgs/theme/Flag_of_Libya.svg.png')}}" alt="">Arabic</a></li>
                                        <li><a href="{{route('language','en')}}"><img src="{{asset('assets/imgs/theme/UK_flag.png')}}" alt="">English</a></li>
                                     
                                    </ul>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li>Get great devices up to 50% off <a href="shop.html">View details</a></li>
                                    <li>Supper Value Deals - Save more with coupons</li>
                                    <li>Trendy 25silver jewelry, save up 35% off today <a href="shop.html">Shop now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            @if(Auth::check())
                        <li><i class="fa fa-user"></i> {{Auth::user()->name}}:
                          <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('frm-logout').submit();">Logout</a>    
                          <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none; text-decoration:none">
                              {{ csrf_field() }}
                          </form>
                        </li>
                      @else
                        <li>
                          <a href="{{route('login')}}"><i class="fa fa-user"></i>Login</a>
                        </li>
                        <li>
                            <a href="{{route('register')}}"><i class="fa fa-user"></i>Register</a>
                          </li>
                      @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                       
                    </div>
                    <div class="header-right">
                        @livewire('header-search-component')


                        <div class="header-action-right">
                            <div class="header-action-2">
                                <div class="header-action-icon-2">
                                    <a href="/wishlist">
                                        <img class="svgInject" alt="Surfside Media" src="{{asset('assets/imgs/theme/icons/icon-heart.svg')}}">
                                        {{-- <span class="pro-count blue">4</span> --}}
                                    </a>
                                </div>
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="/cart">
                                        <img alt="Surfside Media" src="{{asset('assets/imgs/theme/icons/icon-cart.svg')}}">
                                        {{-- <span class="pro-count blue"></span> --}}
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div >
                       <a href="/"><img src="{{asset('assets/imgs/logo/log.png')}}" alt="logo" style="width: 90px;
                       padding: 5px;
                       margin-left:30px;
                           "></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                       
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li><a class="active" href="/">Home </a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="{{route('shop')}}">Shop</a></li>
                                    <li class="position-static"><a href="#">Our Collections <i class="fi-rs-angle-down"></i></a>
                                        <ul class="mega-menu">
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">Women's Fashion</a>
                                                <ul>
                                                    @foreach($wcategories as $category)
                                                    <li><a class="dropdown-item nav-link nav_item" href="{{route('shoop',['id'=>$category->id])}}">{{$category->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">Men's Fashion</a>
                                                <ul>
                                                    @foreach($mcategories as $category)
                                                    <li><a class="dropdown-item nav-link nav_item" href="{{route('shoop',['id'=>$category->id])}}">{{$category->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                           
                                          
                                        </ul>
                                    </li>
                                                                        
                                 
                                    @auth
                                    <li>
                                        <a href="#">My Account<i class="fi-rs-angle-down"></i></a>
                                        
                                        @if(Auth::user()->utype == 'ADM')
                                            <ul class="sub-menu">
                                                <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                                <li><a href="{{route('product')}}">Products</a></li>
                                                <li><a href="{{route('sizes')}}">Sisez</a></li>
                                                <li><a href="{{url('/admin/categories')}}">Categories</a></li>
                                                <li><a href="{{route('admin.home.slider')}}">Mange Slider</a></li>
                                                <li><a href="{{route('admin.orders')}}">orders</a></li>
                                                
                                                {{-- <li><a href="{{route('orders')}}">Orders</a></li> --}}
                                                
                                                <li><a href="#">Customers</a></li>
                                                <li><a href="#">Logout</a></li>                                            
                                            </ul>
                                            @else
                                            <ul class="sub-menu">
                                                <li><a href="{{route('user.dashboard')}}">Dashboard</a></li>
                                                                                        
                                            </ul>
                                            @endif
                                            
                                        </li>
                                          @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                   
                    <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</p>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href="/wishlist">
                                    <img alt="Surfside Media" src="{{asset('assets/imgs/theme/icons/icon-heart.svg')}}">
                                    {{-- <span class="pro-count white">4</span> --}}
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                               
                                <a class="mini-cart-icon" href="/cart">
                                    <img alt="Surfside Media" src="{{asset('assets/imgs/theme/icons/icon-cart.svg')}}">
                                    
                                    @if(session('cart'))
                                    @foreach((array)session('cart') as $id => $details)
                                    
                                        {{-- / --}}
                                    @endforeach
                                    @endif
                            </a>
                                
                            </div>
                            <div class="header-action-icon-2 d-block d-lg-none">
                                <div class="burger-icon burger-icon-white">
                                    <span class="burger-icon-top"></span>
                                    <span class="burger-icon-mid"></span>
                                    <span class="burger-icon-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="/"><img src="{{asset('assets/imgs/logo/log.png')}}" alt="logo" style="width: 90px;
                        padding: 5px;
                        margin-top:10px;
                            "></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="{{route('search')}}" method="POST">
                        @csrf

                        

                        @livewire('yosef')
                        {{-- <input wire:model="search" name="search" type="text" placeholder="Search for items…">
                        <ul>
                            @foreach ($products as $product)
                                <li>{{$product->name}}</li>
                            @endforeach
                        </ul> --}}
                        {{-- <button type="submit" style="color: black"><i class="fi-rs-search"></i></button> --}}
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="/">Home</a></li>
                            
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="/shop">shop</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Our Collections</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Women's Fashion</a>
                                        <ul class="dropdown">
                                            @foreach($wcategories as $category)
                                            <li><a href="{{route('shoop',['id'=>$category->id])}}">{{$category->name}}</a></li>
                                            @endforeach
                                            
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Men's Fashion</a>
                                        <ul class="dropdown">
                                            @foreach($mcategories as $category)
                                            <li><a href="{{route('shoop',['id'=>$category->id])}}">{{$category->name}}</a></li>
                                            @endforeach
                                           
                                        </ul>
                                    </li>
                                    {{-- <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Technology</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">Gaming Laptops</a></li>
                                            <li><a href="product-details.html">Ultraslim Laptops</a></li>
                                            <li><a href="product-details.html">Tablets</a></li>
                                            <li><a href="product-details.html">Laptop Accessories</a></li>
                                            <li><a href="product-details.html">Tablet Accessories</a></li>
                                        </ul>
                                    </li> --}}
                                </ul>
                            </li>
                            @if(Auth::check())
                            
                            @else
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="/orders">Orders</a></li>
                            @endif
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Language</a>
                                <ul class="dropdown">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap mobile-header-border">
                   
                        @if(Auth::check())
                         <div class="single-mobile-header-info mt-30">
                        <a href="{{ route('user.dashboard') }}">
                            {{ __('Profile') }}
                        </a>
                    </div>
                    <div class="single-mobile-header-info">
                          <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('frm-logout').submit();">Logout</a>    
                          <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none; text-decoration:none">
                              {{ csrf_field() }}
                          </form>
                        
                      @else
                        <li>
                          <a href="{{route('login')}}"><i class="fa fa-user"></i>Login</a>
                        </li>
                        <li>
                            <a href="{{route('register')}}"><i class="fa fa-user"></i>Register</a>
                          </li>
                      @endif                      
                    </div>
                   
                    <div class="single-mobile-header-info">
                        <a href="#">(+1) 0000-000-000 </a>
                    </div>
                </div>
                <div class="mobile-social-icon">
                    <h5 class="mb-15 text-grey-4">Follow Us</h5>
                    <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a>
                    <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a>
                    <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a>
                    <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-pinterest.svg')}}" alt=""></a>
                    <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-youtube.svg')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>  

    @yield('content')
    
   
   
    
    
   
   

       

    

       
    <!-- Vendor JS-->
<script src="{{ asset('public/js/app.js') }}" defer></script>
<script src="{{ asset('public/js/jquery-1.12.4.js') }}"></script>
<script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/slick.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.syotimer.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/wow.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery-ui.js')}}"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.js')}}"></script>
<script src="{{asset('assets/js/plugins/magnific-popup.js')}}"></script>
<script src="{{asset('assets/js/plugins/select2.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/waypoints.js')}}"></script>
<script src="{{asset('assets/js/plugins/counterup.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/images-loaded.js')}}"></script>
<script src="{{asset('assets/js/plugins/isotope.js')}}"></script>
<script src="{{asset('assets/js/plugins/scrollup.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.vticker-min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.theia.sticky.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.elevatezoom.js')}}"></script>
<script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
    ({key: "AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg", v: "weekly"});</script>
<!-- Template  JS -->
<script src="{{asset('assets/js/main.js?v=3.3')}}"></script>
<script src="{{asset('assets/js/shop.js?v=3.3')}}"></script>
<script>
    (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
      key: "",
      v: "weekly",
      // Use the 'v' parameter to indicate the version to use (weekly, beta, alpha, etc.).
      // Add other bootstrap parameters as needed, using camel case.
    });
  </script>
<script type="text/javascript"
src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries" >
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<livewire:scripts />

</body>

</html>