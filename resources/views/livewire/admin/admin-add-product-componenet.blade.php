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
                    
          
                    <form action="{{route('addnewproduct')}}"  method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <tbody>
                       
                        <tr>
                            
                            <td>name<input type="text" name="name" placeholder="name" wire:model="name"></td>
                            <td>slug<input type="text" name="slug" placeholder="slug" wire:model="slug"></td>
                            <td>rating<input type="text" name="rating" placeholder="rating" wire:model="rating"></td>
                            <td>short_description<input type="text" name="short_description" placeholder="short_description" wire:model="short_description"></td>
                            <td>description<input type="text" name="description" placeholder="description" wire:model="description"></td>
                            <td>regular_price<input type="text" name="regular_price" placeholder="regular_price" wire:model="regular_price"></td>
                            <td>sale_price<input type="text" name="sale_price" placeholder="sale_price" wire:model="sale_price"></td>
                            <td>SKU<input type="text" name="SKU" placeholder="SKU" wire:model="SKU"></td>
                            <td>stock_status<select name="stock_status" placeholder="stock_status"  class="form-contro1" wire:model="stock_status"><option name="stock_status" placeholder="stock_status"  value="1" wire:model="stock_status">InStock</option><option name="stock_status" placeholder="stock_status"  value="2" wire:model="stock_status">OutOfStock</option></select></td>
                            <td>featured<select name="featured" placeholder="featured"  class="form-contro1" wire:model="featured"><option name="featured" placeholder="featured"  value="1" wire:model="featured">no</option><option name="featured" placeholder="featured"  value="2" wire:model="featured">yes</option></select> </td>
                            <td>quantity<input type="text" name="quantity" placeholder="quantity" wire:model="quantity"></td>
                            <td>image<input type="file"  name="image" ></td>
                            <td>images<input type="file"  name="images" multiple></td>
                             <td>category_id<select  name="category_id" placeholder="category_id" 
                                @foreach($categories as $category)
                                 value="{{$category->id}}" wire:model="category_id"> 
                                
                                <option name="category_id" placeholder="category_id"  value="{{$category->id}}" wire:model="category_id">{{$category->name}}</option>
                              
                               @endforeach
                             </select> 
                            </td>
                            <td>category_id
                                
                                <select  name="sizes[]" size="4"  multiple>
                                
                                    {{-- @foreach($sizes as $size)
                                    
                                      <option value="{{$size->value}}" wire:model="sizes">{{$size->value}}</option>
                                    @endforeach --}}
                               
                             </select> 
                            </td>
                            <td>sizes<input type="text" name="sizes" placeholder="sizes" wire:model="sizes"></td>
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