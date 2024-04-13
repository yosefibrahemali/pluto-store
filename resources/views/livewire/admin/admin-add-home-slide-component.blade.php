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
                    <div class="co1-md-6">
                        Add New Slide
                    </div>  
          
                    <form action="{{route('add.home.slider')}}"  method="POST" enctype="multipart/form-data">
                        
                        @csrf
                    <tbody>
                       
                        <tr>
                            
                            <td>TopTitle<input type="text" name="top_title" placeholder="TopTitle" wire:model="top_title"></td>
                            <td>Title<input type="text" name="title" placeholder="Title" wire:model="title"></td>
                            <td>Sub Title<input type="text" name="sub_title" placeholder="Sub Title" wire:model="sub_title"></td>
                            <td>Offer<input type="text" name="offer" placeholder="Offer" wire:model="offer"></td>
                            <td>Link<input type="text" name="link" placeholder="Link" wire:model="link"></td>
                            <td>Status<input type="text" name="status" placeholder="Status" wire:model="status"></td>
                            <td>image<input type="file" name="image" placeholder="image" wire:model="image"></td>
                            
                             
                            <td></td>
                        </tr>
                       
                    </tbody>
                     <center><button type="submit">add</button></center>
                    </form>
                    
                </div>
            </div>
        </section>
    </main>
</div>
