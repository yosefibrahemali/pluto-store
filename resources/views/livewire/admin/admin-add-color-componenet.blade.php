@include('layouts.app')
<div>
    {{-- <style>
        nav svg{
            height: 20px;

        }
        nav .hidden{
            display: block;
        }

        
        ul li a {
            border-radius: 1000px;
            margin: 10px;
            justify-content: center;
            align-items: center;
            width: 0px;

        }
    </style> --}}
    <style></style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Shop
                    <span></span> Add New Colors
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    
          
                    <form action="{{route('addcolor')}}" method="POST">
                        @csrf
                    <tbody>
                       
                        <tr>
                            
                            <td>product <select name="slug" id="slug">
                                @foreach($products as $product)
                                <option  value="{{$product->slug}}">{{$product->name}}</option>
                                @endforeach
                                </select>
                            </td>
                            <td>color<input type="color" name="color" placeholder="color"></td>
                            <td></td>
                        </tr>
                       
                    </tbody>
                     <center><button type="submit">add</button></center>
                    </form>
                    <div class="col-md-12">
                        
                        <div class="card">
                            <div class="card-header">
                                All Categories
                            </div>
                            
                            <div class="card-body">
                                
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Slug</th>
                                            <th>Color</th>
                                            <th>Action</th>
                                            <th>A</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($colors as $color)
                                        <tr>
                                            <td>{{$color->id}}</td>
                                            <td>{{$color->product_slug}}</td>
                                            
                                            <td><div class="attr-detail attr-color mb-15">
                                                <strong class="mr-10">Color</strong>
                                                <ul class="list-filter color-filter">
                                                    
                                                    
                                                    
                                                    
                                                    <li class=""><a href="#" style="background-color: {{$color->color}}" ><span style="" ></span></a></li>
                                                    
                                                </ul>
                                            </div></td>
                                            <td>
                                                {{-- <a role="button" class="btn" href="{{route('category.edit',$post->id)}}">Edit</a> --}}
                                                <a role="button" class="btn" href="{{route('deletecolor',$color->id)}}">Delete</a>
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