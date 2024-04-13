
@include('layouts.app')
<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block;
        }
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Search
                </div>
            </div>
        </div>
        @if($cproducts  >  0)
        <section class="mt-50 mb-50">
            <h1>{{$opp}}</h1>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="shop-product-fillter">
                           
                            <div class="sort-by-product-area">
                                <div class="sort-by-cover mr-10">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps"></i>Show:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                           
                                        </div>
                                        <form action="{{route('filter.products')}}" method="post" name="PostName" id="PostID">
                                            @csrf
                                            
                                        <select name="pagesize" id="pagesize" onchange="PostName.submit()" >
                                           
                                                
                                                    @if($size_page > 1)
                                                    <option selected="selected">{{$size_page}} </option>
                                                    @else
                                                    <option selected="selected">Choose...</option>
                                                    @endif
                                                    
                                                    <option name="pagesize"  value="12">12</option>
                                                    <option name="pagesize" value="24"><a >24</a></option>
                                                    <option name="pagesize" value="52"><a >52</a></option>
                                                    <option name="pagesize" value="100"><a >100</a></option>
                                                    <option name="pagesize" ><a href="#">All</a></option>
                                                
                                            
                                        </select>
                                        
                                        </form>
                                    </div>
                                    
                                </div>
                                
                                <div class="sort-by-cover">
                                   
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <form action="{{route('filter.products')}}" method="post" name="PostName" id="PostID">
                                                @csrf
                                                    <select name="pagetype" id="pagetype" onchange="PostName.submit()" >
                                                       
                                                        <option selected="selected">Choose...</option>
                                                        <option value="featured">Featured</option>
                                                        <option value="lth">Price: Low to High</option>
                                                        <option value="htl">Price: High to Low</option>
                                                        
                                                        <option value="rating">Avg. Rating</option>
                                                    </select>
                                            </form>
                                        </div>
                                       
                                    </div> 
                                    <div class="sort-by-dropdown">
                                       
                                    </div> 
                                
                                </div>
                              
                               
                            </div>
                        </div>
                       
                        <div class="row product-grid-3">
                            @foreach ($products as $product)
                            
                            <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('product.details',['slug'=>$product->slug])}}">
                                                <img class="default-img" src="{{asset('assets/imgs/shop')}}/{{$product->image}}" alt="{{$product->name}}">
                                                <img class="hover-img" src="{{asset('assets/imgs/shop')}}/{{$product->image}}" alt="{{$product->name}}">
                                            </a>
                                        </div>
                                        <div class="product-action-1" >
                                            {{-- <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"> --}}
                                                {{-- <i class="fi-rs-search"></i></a> --}}
                                               
                                                {{-- <form action="{{route('addtowishlistpppp',['slug'=>$product->slug])}}" id="form0002" method="post">
                                                    @csrf
                                                    <input type="hidden" name="image" value="{{$product->image}}">
                                                    <input type="hidden" name="name_p" value="{{$product->slug}}">
                                                    <input type="hidden" name="rating" value="{{$product->rating}}">
                                                    <input type="hidden" name="slug" value="{{$product->slug}}">
                                                    <input type="hidden" name="short_description" value="{{$product->short_description}}">
                                                    <input type="hidden" name="description" value="{{$product->description}}">
                                                    <input type="hidden" name="regular_price" value="{{$product->regular_price}}">
                                                    <input type="hidden" name="sale_price" value="{{$product->sale_price}}">
                                                    <input type="hidden" name="stock_status" value="{{$product->stock_status}}">
                                                    <input type="hidden" name="quantity" value="{{$product->quantity}}">
                                                    <a onclick="myFunction2()" aria-label="Add To Wishlist" class="action-btn hover-up" ><i class="fi-rs-heart"></i></a>
                                                </form> --}}
                                                
                                                
                                                
                                               
                                                
                                            
                                            {{-- <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a> --}}
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <?php
                                            $quantity = $product->quantity ;
                                            ?>
                                            @if ($quantity < 2)
                                            <span class="hot" style="background-color: red; color:black;">Only Left {{$product->quantity}}</span>
                                            @else
                                            <span class="hot" style="">Hot</span>
                                            @endif
                                            
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{route('product.details',['slug'=>$product->slug])}}">{{$product->short_description}}</a>
                                        </div>
                                        <h2><a href="{{route('product.details',['slug'=>$product->slug])}}">{{$product->name}}</a></h2>
                                       
                                            @for($i=1; $i<=$product->rating; $i++) 
                                 <span><i class="fas fa-star" style="color: rgb(247, 220, 13)"></i></span>
                                 @endfor
                                        
                                        <div class="product-price">
                                            <span>LYD{{$product->regular_price}}</span>
                                            @if($product->sale_price > 0)
                                            <span class="old-price">{{$product->sale_price}}LYD</span>
                                            @endif
                                        </div>
                                        <div class="product-action-1 show">
                                            
                                            
                                            <form action="{{route('add_to_cart', ['id' => $product->id])}}" id="form0001">
                                                @csrf
                                                <input type="hidden" value="{{$product->quantity}}" name="stock">
                                                <input type="hidden" value="{{$product->status}}" name="status">
                                                <input type="hidden" value="{{$product->name}}" name="name">
                                                <input type="hidden" value="{{$product->slug}}" name="slug">
                                                <input type="hidden" value="{{$product->regular_price}}" name="price">
                                                <input type="hidden" value="{{$product->id}}" name="id">
                                                <input type="hidden" value="{{$product->image}}" name="image">
                                                <input type="hidden" value="1" name="quantity"> 
                                                <a href="{{route('addtowishlistpppp',['id'=>$product->id])}}" aria-label="Add To Wishlist" class="action-btn hover-up" id="save" ><i class="fi-rs-heart"></i></a>
                                                    
                                                     
                                          </form>
                                          
                                         
                                        </div>
                                        
                                                   
                                    </div>
                                </div>
                            </div>
                           
                            @endforeach
                            
                        </div>
                        
                        
                        <!--pagination-->
                        <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                            {{$paginate->links()}}
                            {{-- <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">16</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fi-rs-angle-double-small-right"></i></a></li>
                                </ul>
                            </nav> --}}
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="row">
                            <div class="col-lg-12 col-mg-6"></div>
                            <div class="col-lg-12 col-mg-6"></div>
                        </div>
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                            <ul class="categories">
                                <li><a href="shop.html">Shoes & Bags</a></li>
                                <li><a href="shop.html">Blouses & Shirts</a></li>
                                <li><a href="shop.html">Dresses</a></li>
                                <li><a href="shop.html">Swimwear</a></li>
                                <li><a href="shop.html">Beauty</a></li>
                                <li><a href="shop.html">Jewelry & Watch</a></li>
                                <li><a href="shop.html">Accessories</a></li>
                            </ul>
                        </div>
                        <!-- Fillter By Price -->
                        {{-- <div class="sidebar-widget price_range range mb-30">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">Fill by price</h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>
                            <div class="price-filter">
                                <div class="price-filter-inner">
                                    <div id="slider-range"></div>
                                    <div class="price_slider_amount">
                                        <div class="label-input">
                                            <span>Range:</span><input type="text" id="amount" name="price" placeholder="Add Your Price">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group">
                                <div class="list-group-item mb-10 mt-10">
                                    <label class="fw-900">Color</label>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                        <label class="form-check-label" for="exampleCheckbox1"><span>Red (56)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="">
                                        <label class="form-check-label" for="exampleCheckbox2"><span>Green (78)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="">
                                        <label class="form-check-label" for="exampleCheckbox3"><span>Blue (54)</span></label>
                                    </div>
                                    <label class="fw-900 mt-15">Item Condition</label>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox11" value="">
                                        <label class="form-check-label" for="exampleCheckbox11"><span>New (1506)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox21" value="">
                                        <label class="form-check-label" for="exampleCheckbox21"><span>Refurbished (27)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox31" value="">
                                        <label class="form-check-label" for="exampleCheckbox31"><span>Used (45)</span></label>
                                    </div>
                                </div>
                            </div>
                            <a href="shop.html" class="btn btn-sm btn-default"><i class="fi-rs-filter mr-5"></i> Fillter</a>
                        </div> --}}
                        <!-- Product sidebar Widget -->
                        
                    {{-- </div>  --}}
                    
                </div>
            </div>
        </section>
        @else
        <br>
        <br>
        <br>
        <br>
        <br>
        <center><h5>We not found Anything</h5></center>
        @endif
    </main>
</div>