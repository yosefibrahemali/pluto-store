<?php

namespace App\Livewire;

use Livewire\Component;
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

class Placeorder extends Component
{
    public $order_notes, $fname, $lname, $email, $phone, $region ,$address2, $address,$product_id,$total,$payment_option;
    public $arbon = 0.12;
    public $city;
    protected $rules = [
        'city' => 'required'
        ];
    public $shippingcost;
    public function render()
    {
      $city =  $this->city;
      return view('livewire.placeorder',['city'=>$city]);
    }
    public function confirmorder(Request $request){
        if(Auth::check()){
         $order =  Transaction::create(
            [


            'user_id'=> $request->user_id,
            'product_id'=> $this->product_id,
            'total'=> $this->total,
            'region'=>$this->region,
            'phone'=>$this->phone,
            'email'=>$this->email,
            'address'=>$this->address,
            'address2'=>$this->address2,
            'payment_option'=>$this->payment_option,
            'fname'=>$this->fname,
            'lname'=>$this->lname,
            'city'=>$this->city
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

    public function changeStaffId($price)
    {
        $this->shippingcost = $price;
    }

}
