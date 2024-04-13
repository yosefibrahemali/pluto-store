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
                    <span></span> All Sizes
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
                                        <div class="co1-md-6"><a class="btn btn-success float-end" href="{{route('addsize')}}">Add New Size</a></div>
                                        <div class="co1-md-6">All Sizes</div>
                                     </div>
                                    
                            </div>
                            <div class="card-body">
                                
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            
                                            <th>id</th>
                                            
                                            <th>Slug</th>
                                          
                                            <th>sizes</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($sizes as $post)
                                        <tr>
           
                                            <td>{{$post->id}}</td>
                                            
                                            <td>{{$post->slug}}</td>
                                            
                                            <td>{{$post->value}}</td>
                                            
                                           
                                            
                                            <td></td>
                                            
                                            
                                            <td>
                                               
                                                <a role="button" class="btn" href="{{route('ds',$post->id)}}">Delete</a>
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