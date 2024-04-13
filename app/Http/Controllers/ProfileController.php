<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Events\checkoutMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Event;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */

     
     public function index()
     {
         // $user = User::find(Auth::user()->id);
         // return $user->transactions;
        
         return view('profile.edit');
        
     }


     
    public function edit(Request $request)
    {
        // $user = User::find(Auth::user()->id);
        // return $user->transactions;
        $user = User::find(Auth::user()->id);
        $orders = $user->transactions;
        return view('profile.edit',['user' => $request->user()],compact('orders'));
       
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();
        
        return redirect()->back()->with('success', 'profile updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function orders(){
        $id = Auth::user()->id;
        $orders = Transaction::where('user_id',$id)->get();
        return view('profile.edit',compact('orders'));

    }

    public function allorders(){
      $orders =  Transaction::get()->all();
      return view('livewire/admin/admin-orders-component',compact('orders'));
    }
    public function updateorder(Request $request, $id){

         Transaction::where('id',$id)->update([
            'stock_status'=> $request-> stock_status
        ]);
        $order = Transaction::where('id',$id)->first();
        Event::dispatch(new checkoutMail($order));
        return redirect()->back()->with('success', 'order updated');

    }
}
