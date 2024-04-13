<?php

namespace App\Livewire;
use App\Models\Product;
use App\Models\CategorySize;
use App\Models\ProductSize;
use App\Models\Comment;
use App\Models\Color;
use App\Models\Review;
use App\Models\Category;
use Livewire\Component;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DetailsComponent extends Component
{   
    
    public $slug;
    
    
    
    public function mount(){

        $this->slug = 1;
        // Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        // session()->flash('success_message', 'Item added in cart');
        // return redirect()->route('shop.cart');

    }

    
    public function render ($slug) 
    {
        $this->slug = $slug;
        

        $images = Image::where('product_id',$slug)->get();
        $reviews = Review::where('product_slug',$this->slug)->get();
        $allreviews = count($reviews);

        $colors = Color::where('product_slug',$slug)->get();
        $allcolors = count($colors);
        $categoy = DB::table('categories')->where('slug',$this->slug)->get();
        $categories = Category::get();
        $sizes = DB::table('category_sizes')->where('slug',$this->slug)->get();
        $product = Product::where('slug', $this->slug)->first();
        $rproducts = Product::where('category_id',$product?->category_id)->inRandomOrder()->limit(4)->get();
        $nproducts = Product::latest()->take(4)->get();
        return view('livewire.details-component',['product'=>$product, 'rproducts'=>$rproducts,'nproducts'=>$nproducts,'sizes'=>$sizes,'categories'=>$categories,'colors'=>$colors,'reviews'=>$reviews,'allreviews'=>$allreviews,'images'=>$images,'allcolors'=>$allcolors]);
    }
    
    


}