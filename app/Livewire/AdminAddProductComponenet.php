<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminAddProductComponenet extends Component
{
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $sku;
    public $stock_status ='instock';
    public $featured = 0;
    public $quantity;
    public $image;
    public $category_id;

    public function render()
    {
        return view('livewire.admin.admin-add-product-componenet');
    }
    public function index(){
        $categories = DB::table('categories')->get();
        return view('livewire.admin.admin-add-product-componenet', compact('categories'));
    }
}
