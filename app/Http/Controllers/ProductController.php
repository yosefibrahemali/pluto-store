<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use App\Events\checkoutMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\select;

class ProductController extends Controller
{
    public function index()
    {
        
        
        

    }
  
    public function cart()
    {
        return view('livewire.cart-component');
    }
    public function addToCart(Request $request)
    {

        $validated = $request->validate([
            'size' => 'required',
            ]);

       


        $id = $request->id;
        $qta = $request->quantity;
        $size = $request->size;
        $stock = $request->stock;

        
       
        $status = $request->status;
        

        // $product_stock = Product::where('id',1)->first();
        
        


        if($stock  > 0 ){
        $cart = session()->get('cart');
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            return redirect()->back()->with('success', 'product added');
        }  else {
            $cart[$id] = [

                'size'=> $request->size,
                'product_id'=> $request->id,
                'name' => $request->name,
                'photo'=> $request->image,
                'regular_price' => $request->price,
                'slug' => $request->slug,
                'quantity' => $request->quantity,
                
                
            ];
            return redirect()->back()->with('success', 'product added');
        }
            session()->put('cart', $cart );
            
            // return response()->json([
            //     'status'=>200,
            //     'errors'=>'This product not avilabale!'
                
            //     ]);
        
        }
         else{
        //     return response()->json([
        //         'status'=>400,
        //     'message'=>'Product Added Successfuly! '
        // ]); 
        }
       

        

           
                
            
        // }
  
        // session()->put('cart', $cart, );
        
    }
  
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }
  
    public function confirmorder(Request $request){
        if(Auth::check()){
         $order =  Transaction::create(
            [


            'user_id'=> $request->user_id,
            'product_id'=> $request->product,
            'total'=> $request->total,
            'region'=>$request->region,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'address2'=>$request->address2,
            'payment_option'=>$request->payment_option,
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'city'=>$request->city
            ],
            
        );
       session()->forget('cart');
        Event::dispatch(new checkoutMail($order));
        
            $user = User::find(Auth::user()->id);
            $orders = Transaction::where('user_id',Auth::user()->id)->get();
            
            
            
            return view('profile.edit',compact('orders','user'))->with('success', 'Product add to cart successfully!');
        }
        else{
            $order =  Transaction::create(
                [
    
    
                'user_id'=> $_SERVER['REMOTE_ADDR'],
                'product_id'=> $request->product,
                'total'=> $request->total,
                'region'=>$request->region,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'address'=>$request->address,
                'address2'=>$request->address2,
                'payment_option'=>$request->payment_option,
                'fname'=>$request->fname,
                'lname'=>$request->lname,
                'city'=>$request->city
                ],
                
            );
             
            foreach(array($request->product_id) as $value) {
           
            
            $check_stock = Product::where('id', $value)->first();
            $check_stock->decrement('quantity', $request->product_quantity);
            }

            session()->forget('cart');
            Event::dispatch(new checkoutMail($order));
            $ip = $_SERVER['REMOTE_ADDR'];
            
            $orders = Transaction::where('user_id',$ip)->get();
            
            


            // if ($check_stock > 0 && $check_stock >= $request->product_quantity) {
            //     $stock = Product::where('id', $request->product_id)->decrement('quantity',$request->product_quantity);
            //   }else{
            //     watchOut('warning', 'Opps', 'Stock shortage');
            //     return back();
            //   }
            //1,87,4
            
            
            return view('livewire.guest-orders-component',compact('orders'))->with('success', '');

            
        };

         
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }


    public function checkout(){
        return view('livewire.checkout-component');
    }



   
}