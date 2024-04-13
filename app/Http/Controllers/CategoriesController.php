<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;


class CategoriesController extends Controller
{

    public function app(){
        $categories = DB::table('categories')->get();
        $wcategories = DB::table('categories')->where('type','womens');
        return view('layouts.app', compact('categories'));
    }
    public function index(){
        $posts = DB::table('categories')->get();
       
        return view('livewire/admin/admin-categories-component', compact('posts'));
    }
    public function addcategory(Request $request){
        
        

        $request->validate([
            'image' => 'nullable',
            'offer' => 'nullable',
            'popular' => 'nullable',
            'button' => 'nullable'
        ]);
         $file_extension = $request->image->getclientOriginalExtension();
                $file_name = time().'.'.$file_extension;
                $path = 'assets/imgs/banner';
                $request->image->move($path,$file_name);
       
        DB::table('categories')->insert([
           
            'name' => $request->name,
            'slug' => $request->slug,
            'image' => $file_name,
            'button' => $request->button,
            'offer' => $request->offer,
            'popular' => $request->popular,
            'type'=> $request->type
        ]);
        $posts = DB::table('categories')->get();
        return redirect()->back()->with('success', 'category added');
    }
    public function edit($id){
        $post = DB::table('categories')->where('id',$id)->first();
        return view('livewire/admin.edit-category' ,compact('post'));

    }
    public function update(Request $request, $id){

        DB::table('categories')->where('id',$id)->update([
            
            'name' => $request->name,
            'slug' => $request->slug,
            'image' => $request->file_name,
            'button' => $request->button,
            'offer' => $request->offer,
            'popular' => $request->popular
        ]);
        $posts = DB::table('categories')->get();
        return redirect()->back()->with('success', 'category updated');
        
    }
    public function delete($id){
        DB::table('categories')->where('id',$id)->delete();
        return redirect()->back()->with('success', 'category deleted');
    }

    
}
