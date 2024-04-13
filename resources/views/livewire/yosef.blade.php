<div>
    <div class="search__container">
        
    </div>
    <input wire:model="search_term" type="text">
   
    



   
   
    <div wire:poll0ms>
        <h1>{{$p}}</h1>
        <ul>
   @foreach($products as $product)

   <li><a href="{{route('product.details',['slug'=>$product->slug])}}">{{$product->name}}</a></li>

   @endforeach
</ul>
    </div>
    
     <button wire:click.prevent="addTask">aa</button><br>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
</div>

