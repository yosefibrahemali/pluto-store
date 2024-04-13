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
                    <span></span> Shop
                    <span></span> All Products
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                           <div class="card-header">
                                     <div class="row">
                                        <div class="co1-md-6"><a class="btn btn-success float-end" href="{{route('product.add')}}">Add New Product</a></div>
                                        <div class="co1-md-6">All Products</div>
                                     </div>
                                    
                            </div>
                            <div class="card-body">
                                
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>image</th>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>short_description</th>
                                            <th>description</th>
                                            <th>regular_price</th>
                                            <th>sale_price</th>
                                            <th>SKU</th>
                                            <th>stock_status</th>
                                            <th>featured</th>
                                            <th>quantity</th>
                                            
                                            <th>images</th>
                                            <th>category_id</th>
                                            <th>sizes</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($posts as $post)
                                        <tr>
                                            <td><img src="{{asset('assets/imgs/shop')}}/{{$post->image}}" alt=""></td>
                                            <td>{{$post->id}}</td>
                                            <td>{{$post->name}}</td>
                                            <td>{{$post->slug}}</td>
                                            <td>{{$post->short_description}}</td>
                                            <td>{{$post->description}}</td>
                                            <td>{{$post->regular_price}}</td>
                                            <td>{{$post->sale_price}}</td>
                                            <td>{{$post->SKU}}</td>
                                            <td>{{$post->stock_status}}</td>
                                            <td>{{$post->featured}}</td>
                                            <td>{{$post->quantity}}</td>
                                            <td>{{$post->rating}}</td>
                                            
                                            <td><img src="{{asset('assets/imgs/shop')}}/{{$post->images}}" alt=""></td>
                                            <td>{{$post->category_id}}</td>
                                            
                                            <td></td>
                                            
                                            
                                            <td>
                                                <a role="button" class="btn" href="{{route('product.edit',$post->id)}}">Edit</a>
                                                <a role="button" class="btn" href="{{route('delete.product',$post->id)}}">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
</div>