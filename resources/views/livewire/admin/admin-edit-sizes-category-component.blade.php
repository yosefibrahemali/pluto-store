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
                    
          
                    <form action="{{route('categories.size.add',$category->id)}}" method="post">
                        
                        @csrf
                    <tbody>

                       
                        <tr>
                         
                            <td>size<input type="text" name="value" placeholder="size"></td>
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
                                            <th>id</th>
                                            <th>size</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($sizes as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->value}}</td>
                                            <td>
                                                
                                                <a role="button" class="btn" href="">Edit</a>
                                                <a role="button" class="btn" href="{{route('categories.size.delete',$item->id)}}">Delete</a>
                                            </td>
                                            
                                           
                                        </tr>
                                        @empty
                                    <br><br><br>
                                    <center><h1>Empty</h1><center>
                                    @endforelse
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