<?php

namespace App\Livewire;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Review;
use App\Models\Wishlist;


class ShopComponent extends Component
{
    
    use WithPagination;
    public $pageSize = 120000;
    public $z = '10';
    public $search;


    public $min_value = 0;
    public $max_value = 1000;
    public function render( Request $request)
    {
        $counter ='%'. $this->search. '%' ;
        $products = Product::where('name','like', $counter)->get() ;
        


        $page = $request->query("page");
        $size = $request->query("size");
        if(!$page){
            $page = 1;

        }
        if(!$size){
            $size = 1;

        }
        $size_page = 'All';
        $page_size = 50;
        $products = Product::orderBy('created_at','DESC')->get();
        $paginate = Product::paginate($this->pageSize);
        $stocks = Product::where('stock_status','outofstock')->get();
        $categories = DB::table('categories')->get();
      $z =  $this->z;
        return view('livewire.shop-component', compact('stocks','products','paginate','categories','page','size','page_size','size_page','z'));
    }


    public function store($product_id,$product_name,$product_price)
    {
        // Cart::add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        // session()->flash('success_message','Item added in Cart');
        // return redirect()->route('shop.cart');
    }

    public function changePageSize($size)
    {
        
        $this->pageSize = $size;
    }

    public function show($id, Request $request)
    {

        
       


        $products = Product::where('category_id',$id)->get();
        $allproducts = count($products);
        $paginate = Product::paginate($this->pageSize);
        $stocks = Product::where('stock_status','outofstock')->get();
        $categories = DB::table('categories')->get();
        return view('livewire.shop-component', compact('stocks','products','paginate','categories','allproducts'));
    }
    

    public function cc()
{
   if($this->orderBy == 'Price Low to High'){
    
    $products = Product::whereorderBy('regular_price');
   }

}
public function addTask(){
    dd('add new task');
}
}



