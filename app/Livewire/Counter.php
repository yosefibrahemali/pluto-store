<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class Counter extends Component
{

    public $counter;
    
    public function render()
    {
        $counter ='%'. $this->counter. '%' ;
        $products = Product::where('name','like', $counter)->get() ;
        return view('livewire.counter',compact('products'));
    }
}
