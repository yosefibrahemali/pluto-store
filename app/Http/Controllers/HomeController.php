<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function addToCart (){
        
        
        return view('livewire.cart-component');
    }
}
