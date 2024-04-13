<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SizesController extends Controller
{
    public function index(){
        $sizes = DB::table('category_sizes')->get();
        return view('livewire.admin.admin-sizes-component', compact('sizes'));
    }
    public function addsize(){
        $posts = DB::table('products')->get();
        return view('livewire.admin.admin-add-sizes-component', compact('posts'));
    }
    public function addnewsize(Request $request){
       
        DB::table('category_sizes')->insert([
           
            'value' => $request->value,
            'slug' => $request->slug,
        ]);
        return redirect()->back()->with('success', 'category added');
    }
    public function deletesize($id){
        DB::table('category_sizes')->where('id',$id)->delete();
        return redirect()->back()->with('success', 'size deleted');
    }
}
