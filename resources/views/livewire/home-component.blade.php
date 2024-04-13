
@extends('layouts.app')
@section('content')

<div>
    <main class="main">
        <section id="hero" >
            <h4>trade-in-offer</h4>
            <h2>winter is coming</h2>
            <h1>on all products</h1>
            <p>browse the best winter offers</p>
            <button>
                <a href="/shop">shop now</a>
            </button>
           
        </section>
        <section class="featured section-padding position-relative">
           
            <div class="container">
                <div id="success_message"></div>
                <ul id="saveform_errList"></ul>
                {{-- <div class="row">
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-1.png" alt="">
                            <h4 class="bg-1">Free Shipping</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-2.png" alt="">
                            <h4 class="bg-3">Online Order</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-3.png" alt="">
                            <h4 class="bg-2">Save Money</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-4.png" alt="">
                            <h4 class="bg-4">Promotions</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-5.png" alt="">
                            <h4 class="bg-5">Happy Sell</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-6.png" alt="">
                            <h4 class="bg-6">24/7 Support</h4>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>
        
    
        <section class="banner-2 section-padding pb-0">
            <div class="container">
                <div class="banner-img banner-big wow fadeIn animated f-none">
                    <img src="assets/imgs/banner/banner-4.png" alt="">
                    <div class="banner-text d-md-block d-none">
                        <h4 class="mb-15 mt-40 text-brand">Repair Services</h4>
                        <h1 class="fw-600 mb-20">We're an Apple <br>Authorised Service Provider</h1>
                        <a href="shop.html" class="btn">Learn More <i class="fi-rs-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="popular-categories section-padding mt-15 mb-25">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>{{__('home.Popular Categories')}}</span> </h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
                    <div class="carausel-6-columns" id="carausel-6-columns">
                        @foreach($categories as $category)
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="{{route('shoop',['id'=>$category->id])}}"><img src="assets/imgs/shop/category-thumb-1.jpg" alt=""></a>
                            </figure>
                            <h5><a href="{{route('shoop',['id'=>$category->id])}}">{{$category->name}}</a></h5>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="banners mb-15">
            <div class="container">
                <div class="row">
                    @foreach ($popular_categories as $pcategory)
                        
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="{{asset('assets/imgs/banner')}}/{{$pcategory->image}}" alt="">
                            <div class="banner-text">
                                {{-- <span>Smart Offer</span> --}}
                                <h4>{{$pcategory->offer}}</h4>
                                <a href="{{route('shoop',['id'=>$category->id])}}">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                   @endforeach
                </div>
            </div>
        </section>
        <section class="product-tabs section-padding position-relative wow fadeIn animated">
            <div class="bg-square"></div>
            <div class="container">
                <div class="tab-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Featured</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">{{__('home.Popular')}}</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">New added</button>
                        </li>
                    </ul>
                    <a href="#" class="view-more d-none d-md-flex">View More<i class="fi-rs-angle-double-small-right"></i></a>
                </div>
                <!--End nav-tabs-->
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
                            @foreach($fproducts as $fproduct)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('product.details',['slug'=>$fproduct->slug])}}">
                                                <img class="default-img" src="{{asset('assets/imgs/shop')}}/{{$fproduct->image}}" alt="{{$fproduct->name}}">
                                                {{-- <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt=""> --}}
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                  
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                          
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{route('product.details',['slug'=>$fproduct->slug])}}">{{$fproduct->short_description}}</a>
                                        </div>
                                        <h2><a href="{{route('product.details',['slug'=>$fproduct->slug])}}">{{$fproduct->name}}</a></h2>
                                        @for($i=1; $i<=$fproduct->rating; $i++) 
                                 <span><i class="fas fa-star" style="color: rgb(247, 220, 13)"></i></span>
                                 @endfor
                                        <div class="product-price">
                                            <span>{{$fproduct->regular_price}}LYD</span>
                                            {{-- <span class="old-price">$245.8</span> --}}
                                        </div>
                                        <div class="product-action-1 show">
                                            <form action="{{route('add_to_cart', ['id' => $fproduct->id])}}" id="form1">
                                                @csrf
                                                <input type="hidden" value="{{$fproduct->quantity}}" name="stock">
                                                <input type="hidden" value="{{$fproduct->status}}" name="status">
                                                <input type="hidden" value="{{$fproduct->name}}" name="name">
                                                <input type="hidden" value="{{$fproduct->slug}}" name="slug">
                                                <input type="hidden" value="{{$fproduct->regular_price}}" name="price">
                                                <input type="hidden" value="{{$fproduct->id}}" name="id">
                                                <input type="hidden" value="{{$fproduct->image}}" name="image">
                                                <input type="hidden" value="1" name="quantity"> 
                                                <a onclick="myFunction()"  aria-label="Add To Cart" class="action-btn hover-up" ><i class="fi-rs-shopping-bag-add"></i></a>
                                          </form>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab one (Featured)-->
                    <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                        <div class="row product-grid-4">
                            @foreach($lproducts as $lproduct)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('product.details',['slug'=>$lproduct->slug])}}">
                                                <img class="default-img" src="{{asset('assets/imgs/shop')}}/{{$lproduct->image}}" alt="{{$lproduct->name}}">
                                                {{-- <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt=""> --}}
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                  
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                          
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Music</a>
                                        </div>
                                        <h2><a href="{{route('product.details',['slug'=>$lproduct->slug])}}">{{$lproduct->name}}</a></h2>
                                        @for($i=1; $i<=$lproduct->rating; $i++) 
                                 <span><i class="fas fa-star" style="color: rgb(247, 220, 13)"></i></span>
                                 @endfor
                                        <div class="product-price">
                                            <span>{{$lproduct->regular_price}}LYD</span>
                                            {{-- <span class="old-price">$245.8</span> --}}
                                        </div>
                                        <div class="product-action-1 show">
                                            <form action="{{route('add_to_cart', ['id' => $lproduct->id])}}" id="form1">
                                                @csrf
                                                <input type="hidden" value="{{$lproduct->quantity}}" name="stock">
                                                <input type="hidden" value="{{$lproduct->status}}" name="status">
                                                <input type="hidden" value="{{$lproduct->name}}" name="name">
                                                <input type="hidden" value="{{$lproduct->slug}}" name="slug">
                                                <input type="hidden" value="{{$lproduct->regular_price}}" name="price">
                                                <input type="hidden" value="{{$lproduct->id}}" name="id">
                                                <input type="hidden" value="{{$lproduct->image}}" name="image">
                                                <input type="hidden" value="1" name="quantity"> 
                                                <a onclick="myFunction()"  aria-label="Add To Cart" class="action-btn hover-up" ><i class="fi-rs-shopping-bag-add"></i></a>
                                          </form>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab two (Popular)-->
                    <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                        <div class="row product-grid-4">
                            @foreach($lproducts as $lproduct)
                            <input type="text"  name="status" id="status" class="form-control status" value="">
                                          <a class="sub" data-id="" href="#"><i class="fa fa-heart" style="float:right;color:grey"></i></a>


                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('product.details',['slug'=>$lproduct->slug])}}">
                                                <img class="default-img" src="{{asset('assets/imgs/shop')}}/{{$lproduct->image}}" alt="{{$lproduct->name}}">
                                                {{-- <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt=""> --}}
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                  
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                          
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{route('product.details',['slug'=>$lproduct->slug])}}">{{$lproduct->short_description}}</a>
                                        </div>
                                        <h2><a href="{{route('product.details',['slug'=>$lproduct->slug])}}">{{$lproduct->name}}</a></h2>
                                        @for($i=1; $i<=$lproduct->rating; $i++) 
                                 <span><i class="fas fa-star" style="color: rgb(247, 220, 13)"></i></span>
                                 @endfor
                                        <div class="product-price">
                                            <span>{{$lproduct->regular_price}}LYD</span>
                                            {{-- <span class="old-price">$245.8</span> --}}
                                        </div>
                                        <div class="product-action-1 show">
                                            <form action="{{route('add_to_cart', ['id' => $lproduct->id])}}" id="form1">
                                                @csrf
                                                <input type="hidden" value="{{$lproduct->quantity}}" name="stock" class="stock">
                                                <input type="hidden" value="{{$lproduct->status}}" name="status" class="status">
                                                <input type="hidden" value="{{$lproduct->name}}" name="name" class="name">
                                                <input type="hidden" value="{{$lproduct->slug}}" name="slug" class="slug">
                                                <input type="hidden" value="{{$lproduct->regular_price}}" name="price" class="price">
                                                <input type="hidden" value="{{$lproduct->id}}" name="id" class="id">
                                                <input type="hidden" value="{{$lproduct->image}}" name="image" class="image">
                                                <input type="hidden" value="1" name="quantity" class="quantity"> 
                                                <button class="addto">m</button>
                                          </form>
                                          
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab three (New added)-->
                </div>
                <!--End tab-content-->
            </div>
            
        </section>
        
       
        
       
    </main>
</div>
<script>
     $(document).ready(function(){
  $('.sub').click(function(e) { 

    var sub_id=$(this).attr('data-id');
    var input=$(this).prev();
    e.preventDefault()
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
         jQuery.ajax({

                  url: "{{ url('/add-to-wishlist') }}",
                  method: 'get',
                  data: {
                     sub_id: sub_id,
                  },
                  success: function(result){
                     input.val(result.status);

                  }});

  });
 });
</script>
@endsection