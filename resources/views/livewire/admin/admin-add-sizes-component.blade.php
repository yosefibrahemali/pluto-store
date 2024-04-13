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
                    
          
                    <form action="{{route('addnewsize')}}" method="POST">
                        @csrf
                    <tbody>
                       
                        <tr>
                            
                            <td>size<input type="text" name="value" placeholder="value"></td>
                            <td>product<select  name="slug" placeholder="slug" 
                                @foreach($posts as $post)
                                 value="{{$post->slug}}" wire:model="category_id"> 
                                
                                <option name="slug" placeholder="slug"  value="{{$post->slug}}" wire:model="slug">{{$post->name}}</option>
                              
                               @endforeach
                             </select> 
                            </td>
                            <td></td>
                        </tr>
                       
                    </tbody>
                     <center><button type="submit">add</button></center>
                    </form>
                    <div class="col-md-12">
                        
                        

                    </div>
                </div>
            </div>
        </section>
    </main>
</div>