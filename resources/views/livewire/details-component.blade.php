@include('layouts.app')


    

<div>
    @if ($errors->any())
                                                 <div class="alert alert-danger">
                                                     <ul>
                                                         @foreach ($errors->all() as $error)
                                                             <li>{{ $error }}</li>
                                                         @endforeach
                                                     </ul>
                                                 </div>
                                                 @endif
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow"></a>
                    {{-- <span></span> {{ $categories->name }} --}}
                    <span></span> {{ $product->name }}
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-gallery">
                                        <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                        <!-- MAIN SLIDES -->
                                        
                                        <div class="product-image-slider">
                                            <figure class="border-radius-10">
                                                <img id="product_id" src="{{ asset('assets/imgs/shop') }}/{{ $product->image }}" alt="product image" />
                                            </figure>
                                            {{-- <figure class="border-radius-10">
                                                <img src="{{asset('assets/imgs/shop/product-16-1.jpg')}}" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{asset('assets/imgs/shop/product-16-3.jpg')}}" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{asset('assets/imgs/shop/product-16-4.jpg')}}" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{asset('assets/imgs/shop/product-16-5.jpg')}}" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{asset('assets/imgs/shop/product-16-6.jpg')}}" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{asset('assets/imgs/shop/product-16-7.jpg')}}" alt="product image">
                                            </figure> --}}
                                            {{-- <figure class="border-radius-10">
                                                <img src="{{asset('assets/imgs/shop/product-16-7.jpg')}}" alt="product image">
                                            </figure> --}}
                                            @foreach($images as $image)
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('assets/imgs/shop') }}/{{ $image->url }}" alt="product image">
                                            </figure>
                                            @endforeach
                                        </div>
                                        <!-- THUMBNAILS -->
                                        <div class="slider-nav-thumbnails pl-15 pr-15">

                                            <div><img id="product_id" src="{{ asset('assets/imgs/shop') }}/{{ $product->image }}" alt="product image" /></div>
                                           @foreach($images as $image)
                                            <div><img src="{{ asset('assets/imgs/shop') }}/{{ $image->url }}" alt="product image"></div>
                                            @endforeach
                                            
                                        </div>
                                    </div>
                                    <!-- End Gallery -->
                                    <div class="social-icons single-share">
                                        <ul class="text-grey-5 d-inline-block">
                                            <li><strong class="mr-10">Share this:</strong></li>
                                            <li class="social-facebook"><a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a></li>
                                            <li class="social-twitter"> <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a></li>
                                            <li class="social-instagram"><a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a></li>
                                            <li class="social-linkedin"><a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-pinterest.svg')}}" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <h2 class="title-detail">{{$product?->name}}</h2>
                                        <div class="product-detail-rating">
                                            <div class="pro-details-brand">
                                                <span> Brands: <a href="shop.html">Bootstrap</a></span>
                                            </div>
                                            <div class="product-rate-cover text-end">
                                                @for($i=1; $i<=$product->rating; $i++) 
                                 <span><i class="fas fa-star" style="color: rgb(247, 220, 13)"></i></span>
                                 @endfor
                                                <span class="font-small ml-5 text-muted"> ({{$allreviews}} reviews)</span>
                                            </div>
                                        </div>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <ins><span class="text-brand">LYD{{$product?->regular_price}}</span></ins>
                                                {{-- <ins><span class="old-price font-md ml-15">$200.00</span></ins>
                                                <span class="save-price  font-md color3 ml-15">25% Off</span> --}}
                                            </div>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                        <div class="short-desc mb-30">
                                            <p>{{$product?->short_description}}</p>
                                        </div>
                                        {{-- <div class="product_sort_info font-xs mb-30">
                                            <ul>
                                                <li class="mb-10"><i class="fi-rs-crown mr-5"></i> 1 Year AL Jazeera Brand Warranty</li>
                                                <li class="mb-10"><i class="fi-rs-refresh mr-5"></i> 30 Day Return Policy</li>
                                                <li><i class="fi-rs-credit-card mr-5"></i> Cash on Delivery available</li>
                                            </ul>
                                        </div> --}}
                                        <div class="attr-detail attr-color mb-15">
                                            @foreach($colors as $color)
                                            @if($allcolors > 0)
                                            <strong class="mr-10">Color</strong>
                                            @endif
                                            @endforeach
                                               
                                             @if(Auth::user() === 'ADM')
                                               
                                                {{-- {{-- <li><a href="#" data-color="Yellow"><span class="product-color-yellow"></span></a></li> --}}
                                                {{-- <li class="active"><a href="#" data-color="White"><span class="product-color-white"></span></a></li>
                                                <li><a href="#" data-color="Orange"><span class="product-color-orange"></span></a></li>
                                                <li><a href="#" data-color="Cyan"><span class="product-color-cyan"></span></a></li>
                                                <li><a href="#" data-color="Green"><span class="product-color-green"></span></a></li> --}}
                                                <form action="{{route('addcolor')}}" method="POST">
                                                    @csrf
                                                <tbody>
                                                   
                                                    <tr>
                                                        
                                                        <td>product <select name="slug" id="slug">
                                                            
                                                            
                                                            <option  value="{{$product->slug}}">{{$product->name}}</option>
                                                            
                                                            </select>
                                                        </td>
                                                        <td>color<input type="color" name="color" placeholder="color"></td>
                                                        <td></td>
                                                    </tr>
                                                   
                                                </tbody>
                                                 <center><button type="submit">add</button></center>
                                                </form> 
                                                @foreach($colors as $color)

                                                <a role="button" class="btn" href="{{route('deletecolor',$color->id)}}" style="background-color: {{$color->color}};"><span style="background-color: {{$color->color}};"></span></a>
                                                
                                                @endforeach
                                                @else
                                                @foreach($colors as $color)
                                                <ul class="list-filter color-filter">
                                                <li ><a style=" {{$color->color}};" href="#" data-color="{{$color->color}}"><span class="product-color-red" style="background-color: {{$color->color}}"></span></a></li>
                                                </ul>
                                                @endforeach
                                                @endif
                                            
                                        </div>
                                        <div class="attr-detail attr-size">

                                            
                                            
                                             
                                            
                                            
                                            <ul class="list-filter size-filter font-small">
                                                
                                               <form action="{{route('add_to_cart', ['id' => $product->id])}}"  id="form2" >
                                                @csrf
                                                <input type="hidden" value="{{$product->quantity}}" name="stock">
                                                <input type="hidden" value="{{$product->status}}" name="status">
                                                <input type="hidden" value="{{$product->name}}" name="name">
                                                <input type="hidden" value="{{$product->slug}}" name="slug">
                                                <input type="hidden" value="{{$product->regular_price}}" name="price">
                                                <input type="hidden" value="{{$product->id}}" name="id">
                                                <input type="hidden" value="{{$product->image}}" name="image">
                                                @if ($sizes->count() > 0) 
                                                 <strong class="mr-10">Size</strong>

                                                @foreach($sizes as $size)

                                               
                                                
                                                    <select name="" id="">
                                                    <li class="active"><a href="#">M</a></li>
                                                    <li><a href="#">L</a></li>
                                                    <li><a href="#">XL</a></li>
                                                    <li><a href="#">XXL</a></li>
                                                    </select>
                                                   
                                                   
                                                   
                                                @endforeach
                                                  @endif
                                                  
                                                </ul>
                                                
                                            </ul>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                        <div class="detail-extralink">
                                            
                                                
                                                <div class="pass-quantity col-lg-3 col-md-4 col-sm-3">
                                                   
                                                    <input class="form-control" type="number" value="1" name="quantity" min="1" style="width: 70px; height:42px" max="{{$product->quantity}}">
                                                  </div>
                                               
                                            
                                            <div class="product-extra-link2">
                                                {{-- {{route('product.details',['slug'=>$product->slug])}} --}}
                                               

                                                     
                                                    
                                                
                                                    
                                                    
                                                </form>    
                                                <button onclick="myFunction()" type="submit" class="button button-add-to-cart">Add to cart</button>
                                                
                                                
                                            
                                            
                                        
                                            
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                               
                                            </div>
                                        </div>
                                        <ul class="product-meta font-xs color-grey mt-50">
                                            <li class="mb-5">SKU: <a href="#">{{$product->SKU}}</a></li>
                                            <li class="mb-5">Tags: <a href="#" rel="tag">Cloth</a>, <a href="#" rel="tag">Women</a>, <a href="#" rel="tag">Dress</a> </li>
                                            {{-- <li>Availability:<span class="in-stock text-success ml-5">{{$product?->quantity}} Items In Stock</span></li> --}}
                                        </ul>
                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
                            <div class="tab-style3">
                                <ul class="nav nav-tabs text-uppercase">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Description</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab" href="#Additional-info">Additional info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews">Reviews ({{$allreviews}})</a>
                                    </li>
                                </ul>
                                
                                <div class="tab-content shop_info_tab entry-main-content">
                                    <div class="tab-pane fade show active" id="Description">
                                        <div class="">
                                            {{$product?->description}}
                                            {{-- <p>Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off far quetzal goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop
                                                tightly neurotic hungrily some and dear furiously this apart.</p>
                                            <p>Spluttered narrowly yikes left moth in yikes bowed this that grizzly much hello on spoon-fed that alas rethought much decently richly and wow against the frequent fluidly at formidable acceptably flapped
                                                besides and much circa far over the bucolically hey precarious goldfinch mastodon goodness gnashed a jellyfish and one however because.
                                            </p>
                                            <ul class="product-more-infor mt-30">
                                                <li><span>Type Of Packing</span> Bottle</li>
                                                <li><span>Color</span> Green, Pink, Powder Blue, Purple</li>
                                                <li><span>Quantity Per Case</span> 100ml</li>
                                                <li><span>Ethyl Alcohol</span> 70%</li>
                                                <li><span>Piece In One</span> Carton</li>
                                            </ul>
                                            <hr class="wp-block-separator is-style-dots">
                                            <p>Laconic overheard dear woodchuck wow this outrageously taut beaver hey hello far meadowlark imitatively egregiously hugged that yikes minimally unanimous pouted flirtatiously as beaver beheld above forward
                                                energetic across this jeepers beneficently cockily less a the raucously that magic upheld far so the this where crud then below after jeez enchanting drunkenly more much wow callously irrespective limpet.</p>
                                            <h4 class="mt-30">Packaging & Delivery</h4>
                                            <hr class="wp-block-separator is-style-wide">
                                            <p>Less lion goodness that euphemistically robin expeditiously bluebird smugly scratched far while thus cackled sheepishly rigid after due one assenting regarding censorious while occasional or this more crane
                                                went more as this less much amid overhung anathematic because much held one exuberantly sheep goodness so where rat wry well concomitantly.
                                            </p>
                                            <p>Scallop or far crud plain remarkably far by thus far iguana lewd precociously and and less rattlesnake contrary caustic wow this near alas and next and pled the yikes articulate about as less cackled dalmatian
                                                in much less well jeering for the thanks blindly sentimental whimpered less across objectively fanciful grimaced wildly some wow and rose jeepers outgrew lugubrious luridly irrationally attractively
                                                dachshund.
                                            </p> --}}
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="Additional-info">
                                        <table class="font-md">
                                            <tbody>
                                                <tr class="stand-up">
                                                    <th>Stand Up</th>
                                                    <td>
                                                        <p>35″L x 24″W x 37-45″H(front to back wheel)</p>
                                                    </td>
                                                </tr>
                                                <tr class="folded-wo-wheels">
                                                    <th>Folded (w/o wheels)</th>
                                                    <td>
                                                        <p>32.5″L x 18.5″W x 16.5″H</p>
                                                    </td>
                                                </tr>
                                                <tr class="folded-w-wheels">
                                                    <th>Folded (w/ wheels)</th>
                                                    <td>
                                                        <p>32.5″L x 24″W x 18.5″H</p>
                                                    </td>
                                                </tr>
                                                <tr class="door-pass-through">
                                                    <th>Door Pass Through</th>
                                                    <td>
                                                        <p>24</p>
                                                    </td>
                                                </tr>
                                                <tr class="frame">
                                                    <th>Frame</th>
                                                    <td>
                                                        <p>Aluminum</p>
                                                    </td>
                                                </tr>
                                                <tr class="weight-wo-wheels">
                                                    <th>Weight (w/o wheels)</th>
                                                    <td>
                                                        <p>20 LBS</p>
                                                    </td>
                                                </tr>
                                                <tr class="weight-capacity">
                                                    <th>Weight Capacity</th>
                                                    <td>
                                                        <p>60 LBS</p>
                                                    </td>
                                                </tr>
                                                <tr class="width">
                                                    <th>Width</th>
                                                    <td>
                                                        <p>24″</p>
                                                    </td>
                                                </tr>
                                                <tr class="handle-height-ground-to-handle">
                                                    <th>Handle height (ground to handle)</th>
                                                    <td>
                                                        <p>37-45″</p>
                                                    </td>
                                                </tr>
                                                <tr class="wheels">
                                                    <th>Wheels</th>
                                                    <td>
                                                        <p>12″ air / wide track slick tread</p>
                                                    </td>
                                                </tr>
                                                <tr class="seat-back-height">
                                                    <th>Seat back height</th>
                                                    <td>
                                                        <p>21.5″</p>
                                                    </td>
                                                </tr>
                                                <tr class="head-room-inside-canopy">
                                                    <th>Head room (inside canopy)</th>
                                                    <td>
                                                        <p>25″</p>
                                                    </td>
                                                </tr>
                                                <tr class="pa_color">
                                                    <th>Color</th>
                                                    <td>
                                                        <p>Black, Blue, Red, White</p>
                                                    </td>
                                                </tr>
                                                <tr class="pa_size">
                                                    <th>Size</th>
                                                    <td>
                                                        <p>M, S</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="Reviews">
                                        <!--Comments-->
                                        <div class="comments-area">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <h4 class="mb-30">Customer questions & answers</h4>
                                                    <div class="comment-list">
                                                        {{-- <div class="single-comment justify-content-between d-flex">
                                                            <div class="user justify-content-between d-flex">
                                                                <div class="thumb text-center">
                                                                    <img src="{{asset('assets/imgs/page/avatar-6.jpg" ')}}" alt="">
                                                                    <h6><a href="#">Jacky Chan</a></h6>
                                                                    <p class="font-xxs">Since 2012</p>
                                                                </div>
                                                                <div class="desc">
                                                                    <div class="product-rate d-inline-block">
                                                                        <div class="product-rating" style="width:90%">
                                                                        </div>
                                                                    </div>
                                                                    <p>Thank you very fast shipping from Poland only 3days.</p>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="font-xs mr-30">December 4, 2020 at 3:12 pm </p>
                                                                            <a href="#" class="text-brand btn-reply">Reply <i class="fi-rs-arrow-right"></i> </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                        <!--single-comment -->
                                                        @if ( $allreviews > 0)
                                                        @foreach($reviews as $review)
                                                        <div class="single-comment justify-content-between d-flex">
                                                            <div class="user justify-content-between d-flex">
                                                                <div class="thumb text-center">
                                                                    <img src="{{asset('assets/imgs/page/avatar-7.jpg')}}" alt="">
                                                                    <h6><a href="#">{{$review->name}}</a></h6>
                                                                    {{-- <p class="font-xxs">Since 2008</p> --}}
                                                                </div>
                                                                <div class="desc">
                                                                    <div class="product-rate d-inline-block">
                                                                        <div class="product-rating" style="width: 59px">
                                                                             <input data-role="rating" data-values="10, 24, 35, 46, 59">

                                                                        </div>
                                                                    </div>
                                                                    <p>{{$review->comment }}</p>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="font-xs mr-30">{{$review->created_at}}</p>
                                                                            {{-- <a role="button" href="{{route('deletereview',['id' => Auth::user()->id])}}" class="text-brand btn-reply">delete<i class="fa-solid-fa-trash"></i></a> --}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        @else
                                                        <h1>Nothing</h1>
                                                        @endif
                                                        
                                                        <!--single-comment -->
                                                        {{-- <div class="single-comment justify-content-between d-flex">
                                                            <div class="user justify-content-between d-flex">
                                                                <div class="thumb text-center">
                                                                    <img src="{{asset('assets/imgs/page/avatar-8.jpg" a')}}lt="">
                                                                    <h6><a href="#">Steven Keny</a></h6>
                                                                    <p class="font-xxs">Since 2010</p>
                                                                </div>
                                                                <div class="desc">
                                                                    <div class="product-rate d-inline-block">
                                                                        <div class="product-rating" style="width:90%">
                                                                        </div>
                                                                    </div>
                                                                    <p>Authentic and Beautiful, Love these way more than ever expected They are Great earphones</p>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="font-xs mr-30">December 4, 2020 at 3:12 pm </p>
                                                                            <a href="#" class="text-brand btn-reply">Reply <i class="fi-rs-arrow-right"></i> </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                        <!--single-comment -->
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <!--comment form-->
                                        <div class="comment-form">
                                            <h4 class="mb-15">Add a review</h4>
                                           
                                            <div class="row">
                                                <div class="col-lg-8 col-md-12">
                                                    <form class="form-contact comment_form" action="{{route('addreview')}}" id="commentForm" method="POST">
                                                        @csrf
                                                        
                                                        <div class="row">
                                                            <div class="col-12">
                                                               
                                                                <div class="form-group">
                                                                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="name" id="name" type="text" placeholder="Name" old="Auth::">
                                                                    <input name="product_slug" class="product_slug" type="hidden" value="{{$product->slug}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="button button-contactForm">Submit
                                                                Review</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-60">
                                <div class="col-12">
                                    <h3 class="section-title style-1 mb-30">Related products</h3>
                                </div>
                                @foreach($rproducts as $rproduct)
                                        <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                                            <div class="product-cart-wrap mb-30">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="{{route('product.details',['slug'=>$rproduct->slug])}}">
                                                            <img class="default-img" src="{{asset('assets/imgs/shop')}}/{{$rproduct->image}}" alt="{{$rproduct->name}}">
                                                            <img class="hover-img" src="{{asset('assets/imgs/shop')}}/{{$rproduct->image}}" alt="{{$rproduct->name}}">
                                                        </a>
                                                    </div>
                                                    <div class="product-action-1" >
                                                        
                                                        
                                                     
                                                    </div>
                                                    <div class="product-badges product-badges-position product-badges-mrg">
                                                        <span class="hot" style="">Hot</span>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    <div class="product-category">
                                                        <a href="shop.html">Music</a>
                                                    </div>
                                                    <h2><a href="{{route('product.details',['slug'=>$rproduct->slug])}}">{{$rproduct->name}}</a></h2>
                                                    @for($i=1; $i<=$rproduct->rating; $i++) 
                                                    <span><i class="fas fa-star" style="color: rgb(247, 220, 13)"></i></span>
                                                    @endfor
                                                    <div class="product-price">
                                                        <span>LYD{{$rproduct->regular_price}}</span>
                                                        {{-- <span class="old-price">0909</span> --}}
                                                    </div>
                                                    <div class="product-action-1 show">
                                                        
                                                        
                                                        <form action="{{route('add_to_cart', ['id' => $rproduct->id])}}" id="form1">
                                                            @csrf
                                                            <input type="hidden" value="{{$rproduct->quantity}}" name="stock">
                                                            <input type="hidden" value="{{$rproduct->status}}" name="status">
                                                            <input type="hidden" value="{{$rproduct->name}}" name="name">
                                                            <input type="hidden" value="{{$rproduct->slug}}" name="slug">
                                                            <input type="hidden" value="{{$rproduct->regular_price}}" name="price">
                                                            <input type="hidden" value="{{$rproduct->id}}" name="id">
                                                            <input type="hidden" value="{{$rproduct->image}}" name="image">
                                                            <input type="hidden" value="1" name="quantity"> 
                                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="{{route('addtofav')}}"><i class="fi-rs-heart"></i></a>
                                                      </form>
                                                      
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                            </div>                            
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </section>
        <script>
            function myFunction() { 
                document.getElementById("form2").submit(); 
            } 
            let span = document.getElementById("GFG_Span");
        let el_down = document.getElementById("GFG_DOWN");
 
        function gfg_Run() {
            el_down.innerHTML = span.textContent;
        }        
        </script>
    </main>
</div>



