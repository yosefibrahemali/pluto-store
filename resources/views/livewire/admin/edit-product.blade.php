@include('layouts.app')

<center><h1>Edit Products</h1></center><br><br><br><br><br><br><br><br>
<form action="{{route('update.product',$post->id)}}" method="POST">
    @csrf
    <center><button type="submit">Done</button></center>
<center>id<input name="id" value="{{$post->id}}"></center>
<center>name<input name="name" type="text" value="{{$post->name}}"></center>
<center>slug<input name="slug" type="text" value="{{$post->slug}}"></center>
<center>rating<input name="rating" type="text" value="{{$post->rating}}"></center>
<center>short_description<input name="short_description" value="{{$post->short_description}}"></center>
<center>description<input name="description" type="text" value="{{$post->description}}"></center>
<center>regular_price<input name="regular_price" type="text" value="{{$post->regular_price}}"></center>
<center>sale_price<input name="sale_price" value="{{$post->sale_price}}"></center>
<center>SKU<input name="SKU" type="text" value="{{$post->SKU}}"></center>
<center>stock_status <td>stock_status<select aria-placeholder="{{$post->stock_status}}" name="stock_status" value="{{$post->stock_status}}" placeholder="stock_status"  class="form-contro1" wire:model="stock_status"><option name="stock_status" placeholder="stock_status"  value="instock" wire:model="stock_status">InStock</option><option name="stock_status" placeholder="stock_status"  value="outofstock" wire:model="stock_status">OutOfStock</option></select></td></center>
<center>featured
    <select name="featured"   class="form-contro1" wire:model="featured" placeholde="{{$post->featured}}">
        <option name="featured" placeholder="featured"  value="1" wire:model="featured">no</option>
        <option name="featured" placeholder="featured"  value="2" wire:model="featured">yes</option>
    </select> 
</center>
<center>quantity<input name="quantity" type="text" value="{{$post->quantity}}"></center>
<center>image<input name="image" type="file" value="{{old('$post->image')}}">{{$post->image}}</center>
<center>images<input name="images" type="file" value="{{old('$post->images')}}"></center>
<td>category_id<select  name="category_id" placeholder="category_id" 
    @foreach($categories as $category)
     value="{{$category->id}}" wire:model="category_id"> 
    
    <option name="category_id" placeholder="category_id"  value="{{$category->id}}" wire:model="category_id">{{$category->name}}</option>
  
   @endforeach
 </select>
 <button type="submit">Done</button>
</td>


</form>