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
                    <span></span> Add New image
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    
          
                    <form action="{{route('addimage')}}" method="POST" enctype="multipart/form-data" >  
                        @csrf
                    <tbody>
                       
                        <tr>
                            
                            <td>image<input type="file" name="image" placeholder="image" multiple></td>
                            <td>products <select name="product_id" id="product_id">
                                @foreach($products as $product)
                                 <option value="{{$product->slug}}">{{$product->name}}</option>
                              
                               @endforeach
                             </select> 
                            </td>
                            <td></td>
                        </tr>
                       
                       
                    </tbody>
                     <center><button type="submit">add</button></center>
                    </form>

                    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>image(url)</th>
                                <th>image</th>
                                <th>Product slug</th>
                                
                                <th>Action</th>
                               
                            </tr>
                        </thead>
                         <tbody>
                                        @foreach($images as $image)
                                        <tr>
                                            <td>{{$image->id}} <img src="{{{$image->id}}}" alt=""></td>
                                            <td>{{$image->url}}</td>
                                            <td><img src="{{asset('assets/imgs/shop')}}/{{$image->url}}" alt="" style="width: 100px"></td>
                                           
                                            <td>{{$image->product_id}}</td>
                                            <td>
                                               
                                                <a role="button" class="btn" href="{{route('deleteimage',$image->id)}}">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                    </table>
                </div>
            </div>
        </section>
    </main>
</div>