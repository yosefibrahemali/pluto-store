<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Wishlist;
use Livewire\WithPagination;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Review;


class Card extends Component
{
    use WithPagination;
    
    public $pageSize = 12;
    public $orderBy = "default Sorting";
    public $lp;
    public $search;
    public $min_value = 0;
    public $max_value = 1000;
    public function changePageSize($size)
    {
        
        $this->pageSize = $size;
    }
    public function changeorderBy($order)
    {
        
        $this->orderBy = $order;
    }

    
    

  


    public function render( Request $request)
    {    
        
        $uid = auth()->user()->id;
        $this->lp = Wishlist::where('user_id', $uid )->pluck('product_id');
        $lp = $this->lp;
        

        

        if($this->orderBy == 'Price: Low to High'){
    
            $products = Product::orderBy('regular_price','ASC')->paginate($this->pageSize);
           }
           else if($this->orderBy == 'Price: High to Low'){
    
            $products = Product::orderBy('regular_price','DESC')->paginate($this->pageSize);
           }
           else if($this->orderBy == 'Sort By Newness'){
    
            $products = Product::orderBy('created_at','DESC')->paginate($this->pageSize);
           }
           else {
    
            $products = Product::paginate($this->pageSize);
           }
    
    

   
    
        
        


        $page = $request->query("page");
        $size = $request->query("size");
        if(!$page){
            $page = 1;

        }
        if(!$size){
            $size = 1;

        }
        
      
      return view('livewire.card', compact('products','lp'));
    }


    public function store($product_id,$product_name,$product_price)
    {
        // Cart::add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        // session()->flash('success_message','Item added in Cart');
        // return redirect()->route('shop.cart');
    }

    public function favoriteAdd($id)
    {


      
       
         
          if(auth()->user()->id){
            $uid = auth()->user()->id;


            
        if(Wishlist::where('user_id',$uid)->where('product_id',$id)->exists()){
            $xx = Wishlist::where('user_id',$uid)->where('product_id',$id)->delete();
            

         }
         else{
             $wi = Wishlist::create([
                     'product_id' => $id,
                     'user_id'=> $uid,
                     ]);

                    
                     

         }
        
        
         

    }
    session()->flash('message', 'added successfully.');}

   
}