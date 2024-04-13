<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\HomeSlider;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeComponent extends Component
{
    public $opp = 10;
    public function render()
    {
        $slides = DB::table('home_sliders')->get();
        $categories = DB::table('categories')->get();
        $slides = HomeSlider::where('status',1)->get();
        
        $lproducts = Product::orderBy('created_at','DESC')->get()->take(8);
        $nproducts = Product::orderBy('created_at','ASC')->get()->take(8);
        $fproducts = Product::where('featured',2)->inRandomOrder()->get()->take(8);
        $popular_categories = Category::where('popular',1)->get();
        return view('livewire.home-component',['slides'=>$slides, 'lproducts'=>$lproducts, 'fproducts'=>$fproducts,'categories'=>$categories,'slides'=>$slides, 'popular_categories'=>$popular_categories,'nproducts'=>$nproducts]);
    }

}
