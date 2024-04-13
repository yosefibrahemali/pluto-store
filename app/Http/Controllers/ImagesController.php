<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Product;
use Storage;


class ImagesController extends Controller
{

    public function index(){
        $products = Product::all();
        $images = Image::all();
        return view('livewire.admin.admin-add-images-to-product-component',compact('images','products'));
    }


    public function add(Request $request){

        $file_extension = $request->image->getclientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path = 'assets/imgs/shop';
        $request->image->move($path,$file_name);


        Image::create([
        'product_id' => $request->product_id,
        'url' => $file_name
        ]);


        
        return redirect()->back();
    
}


public function delete($id){

    Image::where('id',$id)->delete();
    return redirect()->back()->with('success', 'image deleted');

}
}