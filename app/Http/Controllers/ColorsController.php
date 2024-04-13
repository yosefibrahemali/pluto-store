<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;
use App\Models\Product;
class ColorsController extends Controller
{
    public function index(){

        $colors = Color::get();
        $products = Product::get();

        return view ('livewire.admin.admin-add-color-componenet',compact('colors','products'));
    }

    public function add(Request $request){


        Color::create([

            'color'=>$request->color,
            'product_slug'=>$request->slug
        ]);
        return redirect()->back()->with('success', 'color added');

    }

    public function delete($id){

        Color::where('id',$id)->delete();


        return redirect()->back()->with('success', 'color deleted');
    }
}
