<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;

use Illuminate\Support\Facades\Auth;


class TransactionsController extends Controller
{
    public function index(){
        $userId = (Auth::user()->id);
        $orders = Transaction::where('user_id',(Auth::user()->id))->get();
        return $orders;
    }
    public function guest(){
        $userId = $_SERVER['REMOTE_ADDR'] ;
        $orders = Transaction::where('user_id',$userId)->get();
        return view('livewire.guest-orders-component',compact('orders'));
    }
}
