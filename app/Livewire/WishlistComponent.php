<?php

namespace App\Livewire;

use Livewire\Component;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maize\Markable\Markable;
use Maize\Markable\Models\Favorite;
use App\Models\Wishlist;
use App\Models\Product;

class wishlistComponent extends Component
{
    public $opp = 10;
   
    public function wishlist()
    {

        
        $uid = auth()->user()->id ;
        $pid = Wishlist::where('user_id', $uid )->pluck('product_id');
        $count = Wishlist::where('user_id', $uid )->count();
        
        $products = Product::whereIn('id',$pid)->get();
         return view('livewire.wishlist-component', compact('products','count'));
    //  foreach( (array)$pid as $value){
    //     $p = Product::whereIn('id',$pid)->get();
    //    return $p;
        
 
    //    }  
    //    $products = Product::where('id',$pid)->get();
       
       
       
       
        

       




        
          
        
                

        
        // return $product;
    }
    public function addtowishlist($id){

        

        $uid = auth()->user()->id ;

      

        if(Wishlist::where('user_id',$uid)->where('product_id',$id)->exists()){
           $xx = Wishlist::where('user_id',$uid)->where('product_id',$id)->delete();
           return redirect()->back()->with('danger', 'Product removed from wishlist successfully!');
        }
        else{
            $wi = Wishlist::create([
                    'product_id' => $id,
                    'user_id'=> $uid,
                    ]);
                    return redirect()->back()->with('success', 'Product added to wishlist successfully!');
        }
        // $pid =  Product::where('slug',$slug)->select('id')->value('id');
        // $wi = Wishlist::create([
        //            'product_id' => $pid,
        //            'user_id'=> $uid,
        //            ]);
      


        // return  $cc;
       
    }
       
    //     if( $cc >= 0) {
            
            
    //         return $cc;

    //     }  else {
    //       Wishlist::create([
    //         'name' => $request->name,
    //         'rating' => $request->rating,
    //         'slug' => $request->slug,
    //         'image' => $request->image,
    //         'short_description' => $request->short_description,
            
    //         'regular_price' => $request->regular_price,
    //         'sale_price' => $request->sale_price,
            
    //         'stock_status' => $request->stock_status,
           
    //         'quantity' => $request->quantity,
    //         'user_id'=>$uid
    //     ]);
    //     return redirect()->back()->with('success', 'product added to wishlist');
    // }
        


    // }

    public function deletewishlist($id){

        Wishlist::where('user_id',auth()->id())->where('product_id',$id)->delete();
        return redirect()->back()->with('success', 'Product Removed from Wishlist successfully!');
    }
}
