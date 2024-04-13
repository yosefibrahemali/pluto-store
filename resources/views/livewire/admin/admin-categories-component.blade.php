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
                    <span></span> All Categories
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    
          
                    <form action="{{route('addnewcategory')}}" method="post" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                    <tbody>
                       
                        <tr>
                           
                            <td>name<input type="text" name="name" placeholder="name"></td>
                            <td>slug<input type="text" name="slug" placeholder="slug"></td>
                            <td>image <input type="file" name="image"></td>
                            <td>offer <input type="text" name="offer"></td>
                            <td>button <input type="text" name="button"></td>
                            <td>type<select name="type" id="type">
                                <option value="womens">womens</option>
                                <option value="womens">womens</option>
                                </select></td>
                            <td><select name="popular" id="popular">
                                <option value="1">yes</option>
                                <option value="2">no</option>
                                </select>
                            </td>
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
                                            <th>popular status[1:active, 2 no active]</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Action</th>
                                            <th>A</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($posts as $post)
                                        <tr>
                                            <td>{{$post->id}}</td>
                                            <td>{{$post->popular}}</td>
                                            <td>{{$post->name}}</td>
                                            <td>{{$post->slug}}</td>
                                            <td></td>
                                            <td>
                                                <a role="button" class="btn" href="{{route('categories.sizes',$post->id)}}">Sizes</a>
                                                <a role="button" class="btn" href="{{route('category.edit',$post->id)}}">Edit</a>
                                                <a role="button" class="btn" href="{{route('delete.category',$post->id)}}">Delete</a>
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