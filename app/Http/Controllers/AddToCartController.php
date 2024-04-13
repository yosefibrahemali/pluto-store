<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddToCartController extends Controller
{
    public function addTocart(){
        return view('livewire.cart-component');
       
    }
}
