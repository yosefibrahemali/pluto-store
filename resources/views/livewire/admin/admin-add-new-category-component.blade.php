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
                    <span></span> Add New Category
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    
          
                    <form action="{{route('addnewcategory')}}" method="POST">
                        @csrf
                    <tbody>
                       
                        <tr>
                            <td>id<input type="text" name="id" placeholder="id"></td>
                            <td>name<input type="text" name="name" placeholder="name"></td>
                            <td>slug<input type="text" name="slug" placeholder="slug"></td>
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
                                            <td>{{$post->name}}</td>
                                            <td>{{$post->slug}}</td>
                                            <td></td>
                                            <td>
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