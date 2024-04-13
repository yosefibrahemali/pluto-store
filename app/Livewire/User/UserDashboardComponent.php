<?php

namespace App\Livewire\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use Livewire\Component;
use App\Models\User;

class UserDashboardComponent extends Component
{
    public function render()
    {
        $id = Auth::user()->id;
        $user = User::find(Auth::user()->id);
        $orders = Transaction::where('user_id',$id)->get();
        return view('livewire.user.user-dashboard-component',compact('orders','user'));
    }
    public function vieworder($id){
        $order = Transaction::where('id',$id)->first();
        return view('livewire.user.user-vieworder-component', compact('order'));


    }
}
