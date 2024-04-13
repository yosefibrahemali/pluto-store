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
                    <span></span> All Slides
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
                                        <div class="co1-md-6"><a class="btn btn-success float-end" href="{{route('admin.home.slide.add')}}">Add New Slide</a></div>
                                        <div class="co1-md-6">All Products</div>
                                     </div>
                                    
                            </div>
                            <div class="card-body">
                                
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>TopTitle</th>
                                            <th>Title</th>
                                            <th>SubTitle</th>
                                            <th>Offer</th>
                                            <th>Link</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 0;
                                        @endphp
                                        @foreach($slides as $slide)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td><img src="{{asset('assets/imgs/slider')}}/{{$slide->image}}" width="80"/> </td>
                                            <td>{{$slide->top_title}}</td>
                                            <td>{{$slide->title}}</td>
                                            <td>{{$slide->sub_title}}</td>
                                            <td>{{$slide->offer}}</td>
                                            <td>{{$slide->link}}</td>
                                            <td>{{$slide->status == 1 ? 'Active':'Inactive'}}</td>
                                            
                                           
                                            
                                            <td>
                                                <a role="button" class="btn" href="{{route('admin.home.slide.edit',['slide_id'=>$slide->id])}}">Edit</a>
                                                <a role="button" class="btn" href="{{route('delete.home.slider',$slide->id)}}">Delete</a>
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