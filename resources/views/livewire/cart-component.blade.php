@include('layouts.app')

<div>
    
        
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Shop
                    <span></span> Your Cart
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <form action="{{route('checkout')}}" method="POST">
                @csrf
            <div class="container">
                <div class="row">
                    @if (session('cart') == 1)
                    <center>Your Cart is empty</center>
                    
                    @else <div class="col-12">
                        @if (count((array)session('cart')) > 0) 
                        <div class="table-responsive">
                            <table class="table shopping-summery text-center clean">
                                
                                <thead> 
                                    
                                    
                                    <tr class="main-heading">
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>

                                        
                                        <th scope="col">Size</th>
                                    
                                        <th scope="col">Subtotal</th>
                                        
                                        <th scope="col">Remove</th>
                                    </tr>
                                   
                                </thead>
                                <tbody>

                                    
                                   
                                    @php $total = 0;
                                    
                                    
                                    
                                    
                                    
                                    @endphp
                                  
                               
                                    @foreach((array)session('cart') as $id => $details)
                                    
                                    @php $total += $details['regular_price'] * $details['quantity'] 
                                    
                                    

                                    @endphp
                                    @if ($total > 180)
                                    <center><h4>مؤهل ل شحن سريع مجاني!!</h4></center> <br>
                                     @endif
                                    
                                    {{-- <input type="hidden"  name="user_id" value="{{Auth::user()->id}}">
                                    <input type="hidden"  name="product_id" value="{{$id}}">
                                    <input type="hidden"  name="total" value="{{$details['regular_price'] * $details['quantity']}}"> --}}
                                    <tr data-id="{{$id}}">
                                        <td class="image product-thumbnail"><img src="{{ asset('assets/imgs/shop')}}/{{$details['photo']}}" alt="#"></td>
                                        <td class="product-des product-name">
                                            <h5 class="product-name"><a href="{{route('product.details',$details['slug'])}}">{{$details['slug']}}</a></h5>
                                            <p class="font-xs">
                                            </p>
                                        </td>
                                        <td class="price" data-title="Price"><span>LYD{{$details['regular_price']}}</span></td>
                                        <td class="" data-title="Stock">
                                             
                                            <div>
                                                
                                                
                                                    <input class="form-control quantity cart_update" value="{{$details['quantity']}}" min="1" type="number"/>
                                                    
                                               
                                            </div>
                                             
                                        </td>
                                        @if($details['size'] > 1)
                                        <td class="text-right" data-title="Cart">
                                            <span>{{$details['size']}}</span>
                                        </td>
                                        @else
                                        <td class="text-right" data-title="Cart">
                                            <span>nothing</span>
                                        </td>
                                         @endif
                                        
                                        <td class="text-right" data-title="Cart" name="total">
                                            <span>LYD{{$details['regular_price'] * $details['quantity']}}</span>
                                        </td>
                                        <td class="action" data-title="Remove"><a class="cart_remove" href="#" id="text-muted"><i class="fi-rs-trash"></i></a></td>
                                    </tr>
                                    @if(Auth::check())
                                    <input type="hidden"  name="user_id" value="{{Auth::user()->id}}">
                                    @endif
                                    
                                        
                                    
                                   
                                    
                                    <input type="hidden"  name="total" value="{{$details['regular_price'] * $details['quantity']}}">
                                    @endforeach
                                    
                                     <input for="product_id" type="hidden"  name="product_id" value="@foreach((array)session('cart') as $id => $details) {{$id}},  @endforeach">
                                   
                                    {{-- <h1>{{$details['name']}}</h1> --}}
                                   
                                    
                                   
                                      
                                    
                                   
                                    <tr>
                                        <td colspan="6" class="text-end">
                                            
                                        </td>
                                    </tr>
                                    
                                </tbody>

                            </table>
                        </div>
           
                        <div class="cart-action text-end">
                           
                            <a href="{{route('checkout')}}" class="btn "> <i class="fi-rs-box-alt mr-10"></i> Proceed To CheckOut</a>
                        </div>
                        
                        
                    </div>
                    
                   
                    
                 @else
                                   <center><h5>Your Cart Is Empty!!</h5></center>
                                  
                                    
                                   
                                   @endif
                                   @endif
                     
                </div>
               
            </div>
        </section>
    </main>
    
    <script type="text/javascript">
    
        $(".cart_update").change(function (e) {
            e.preventDefault();
        
            var ele = $(this);
        
            $.ajax({
                url: '{{ route('update_cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id"), 
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function (response) {
                   window.location.reload();
                }
            });
        });
        
        $(".cart_remove").click(function (e) {
            e.preventDefault();
        
            var ele = $(this);
        
            if(confirm("Do you really want to remove?")) {
                $.ajax({
                    url: '{{ route('remove_from_cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}', 
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
        
    </script>
</div>



