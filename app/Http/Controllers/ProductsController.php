<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Image;
use App\Models\Wishlist;


use Storage;

class ProductsController extends Controller
{
    public $pageSize = 12;
    public function add(){
        $categories = DB::table('categories')->get();
        
        return view('livewire.admin.admin-add-product-componenet',compact('categories'));
    }
    public function index(){
       
        $sizes = DB::table('category_sizes')->get();
        $posts = DB::table('products')->get();

        return view('livewire/admin/admin-products-component', compact('posts','sizes'));
    }
    public function addproduct(Request $request){
        
        

        $file_extension = $request->image->getclientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path = 'assets/imgs/shop';
        $request->image->move($path,$file_name);


       


        $product = new Product;
           
            $product->name = $request->name;
            $product->slug = $request->slug;
            $product->short_description = $request->short_description;
            $product->description = $request->description;
            $product->regular_price = $request->regular_price;
            $product->sale_price = $request->sale_price;
            $product->SKU = $request->SKU;
            $product->stock_status = $request->stock_status;
            $product->featured = $request->featured;
            $product->quantity = $request->quantity;
            $product->image = $file_name;
            $product->rating = $request->rating;
            $product->category_id = $request->category_id;
            $product->sizes = $request->sizes;
            $product->save();
           
        
        
            
        // $imagefile =    $request->file('images');
        //     $image = new Image;
        //     $path = $imagefile->store('/assets/imgs/shop', ['disk' =>   'shop']);
        //     $image->url = $path;
        //     $image->product_id = 1;
        //     $image->save();
           
    
       
        return redirect()->back()->with('success', 'product added');
        return view('livewire/admin/admin-add-product-component');
    }
    public function edit($id){
        
        $categories = DB::table('categories')->get();
        $post = DB::table('products')->where('id',$id)->first();
        return view('livewire/admin.edit-product' ,compact('post','categories'));

    }
    public function update(Request $request, $id){
        

        $validated = $request->validate([
            'image' => 'nullable',
            'images' => 'nullable',
        ]);


        DB::table('products')->where('id',$id)->update([
            
            'name' => $request->name,
            'rating' => $request->rating,
            'slug' => $request->slug,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'regular_price' => $request->regular_price,
            'sale_price' => $request->sale_price,
            'SKU' => $request->SKU,
            'stock_status' => $request->stock_status,
            'featured' => $request->featured,
            'quantity' => $request->quantity,
            // 'image' => $request?->image,
            // 'images' => $request?->images,
            'category_id' => $request->category_id,
        ]);
        
        $posts = DB::table('products')->get();
        return redirect()->back()->with('success', 'product updated');
        
    }
    public function delete($id){
        DB::table('products')->where('id',$id)->delete();
        return redirect()->back()->with('success', 'product deleted');
    }





    public function filter(Request $request){
         $type = $request->pagetype;
         $size_page = $request->pagesize;
         
         if ($size_page == '12') 
         {
            $products = Product::take(12)->get();
         }
         elseif($size_page == '24')
         {
            $products = Product::take(24)->get();
         }
         elseif($size_page == '52')
         {
            $products = Product::take(52)->get();
         }
         elseif($size_page == '100')
         {
            $products = Product::take(100)->get();
         }
         elseif($size_page == 'All')
         {
            $products = Product::get();
         }



         if ($type == 'featured') 
         {
            $products =  Product::where($type,'2')->get();
         }
         elseif($type == 'htl')
         {
            $products = Product::orderBy('regular_price','DESC')->get();
         }
         elseif($type == 'lth')
         {
            $products = Product::orderBy('regular_price','ASC')->get();
         }
         elseif($type == 'rating')
         {
            $products = Product::orderBy('rating','DESC')->get();
         }

        
          
         
        //  $products =  Product::where($type,'2')->get();
         
        //  if($type != 'featured'){
        //     return'jnnm';
        //  }else{
        //     return "pp";
        //  };
        // if($type = 'lth'){
        //     $products =  Product::where('regular_price','desc')->get();
            

        // }
        // $ss =  Product::whereorderBy('regular_price'); //low to high//

        $page_size = $request->pagesize;
        // $products = product::get()->take($page_size);
        $page = $request->query("page");
        $size = $request->query("size");
        if(!$page){
            $page = 1;

        }
        if(!$size){
            $size = 1;

        }
        $paginate = Product::paginate($this->pageSize);
        return view('livewire/shop-component',compact('products','paginate','page_size','size_page'));
    }



    // public function addtofav(Request $request){
    //     $products = Product::SoftDeletes();
        
    // }
    public function search(Request $request)
{
    $type = $request->pagetype;
         $size_page = $request->pagesize;
         
         if ($size_page == '12') 
         {
            $products = Product::take(12)->get();
         }
         elseif($size_page == '24')
         {
            $products = Product::take(24)->get();
         }
         elseif($size_page == '52')
         {
            $products = Product::take(52)->get();
         }
         elseif($size_page == '100')
         {
            $products = Product::take(100)->get();
         }
         elseif($size_page == 'All')
         {
            $products = Product::get();
         }



         if ($type == 'featured') 
         {
            $products =  Product::where($type,'2')->get();
         }
         elseif($type == 'htl')
         {
            $products = Product::orderBy('regular_price','DESC')->get();
         }
         elseif($type == 'lth')
         {
            $products = Product::orderBy('regular_price','ASC')->get();
         }
         elseif($type == 'rating')
         {
            $products = Product::orderBy('rating','DESC')->get();
         }

        
          
         
        //  $products =  Product::where($type,'2')->get();
         
        //  if($type != 'featured'){
        //     return'jnnm';
        //  }else{
        //     return "pp";
        //  };
        // if($type = 'lth'){
        //     $products =  Product::where('regular_price','desc')->get();
            

        // }
        // $ss =  Product::whereorderBy('regular_price'); //low to high//

        $page_size = $request->pagesize;
        // $products = product::get()->take($page_size);
        $page = $request->query("page");
        $size = $request->query("size");
        if(!$page){
            $page = 1;

        }
        if(!$size){
            $size = 1;

        }
        $paginate = Product::paginate($this->pageSize);
    $search = $request->input('search');

    $products = Product::where('name','like', "%$search%")->get();
    $cproducts = $products->count();

    return view('livewire/search-component',compact('products','paginate','page_size','size_page','cproducts'));
}
}
