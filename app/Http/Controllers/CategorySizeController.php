<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategorySize;
use App\Models\Category;
use Illuminate\Support\Facades\DB;


class CategorySizeController extends Controller
{
    public function index($category_id){
        $sizes = CategorySize::query()->whereCategoryId($category_id)->get();
        $category = Category::query()->find($category_id);
        return view ('livewire.admin.admin-edit-sizes-category-component',compact('sizes','category'));

    }
    public function store($category_id){
        $category = Category::query()->find($category_id);
        $category->sizes()->create(\request()->only('value'));

        return back();

    }
    public function destroy($id){
        DB::table('category_sizes')->where('id',$id)->delete();
        return redirect()->back()->with('success', 'product deleted');
        
    }
    
}
