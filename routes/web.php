<?php
use App\Http\Livewire\Product;
use App\Livewire\DetailsComponent;
use Illuminate\View\Component;
use Illuminate\View\View;
use App\Http\Controllers;
use App\Mail\TestMail;
use App\Livewire\SearchComponent;
use App\Livewire\WishlistComponent;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Livewire\CartComponent;
use App\Livewire\CheckoutComponent;
use App\Livewire\HometComponent;
use App\Livewire\ShopComponent;
use Illuminate\Http\Request;
use App\Livewire\Admin\AdminDashboardComponent;
use App\Livewire\Admin\AdminAddProductComponent;
use Illuminate\Database\Eloquent\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ProductController;

use function Termwind\render;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/xx', function () {
    return view('welcome');
});
// Route::get('/cart', [\App\Http\Controllers\HomeController::class,'addToCart'])->name('addToCart');
Route::middleware(['auth'])->group(function()
{ 
    




//  Route::get('cart', [\App\Http\Controllers\ProductController::class, 'cart'])->name('');
    Route::get('cart', [\App\Http\Controllers\ProductController::class, 'cart'])->name('cart');
    Route::get('orders', [\App\Http\Controllers\TransactionsController::class, 'index'])->name('orders');
    
});
    Route::get('AddToCart', [\App\Http\Controllers\ProductController::class, 'addToCart'])->name('add_to_cart');
    Route::get('/checkout', [\App\Http\Controllers\ProductController::class, 'checkout'])->name('checkout');
    Route::post('/confirmorder', [\App\Http\Controllers\ProductController::class, 'confirmorder'])->name('confirmorder');
    Route::patch('update-cart', [\App\Http\Controllers\ProductController::class, 'update'])->name('update_cart');
    Route::delete('remove-from-cart', [\App\Http\Controllers\ProductController::class, 'remove'])->name('remove_from_cart');
    Route::get('cart', [\App\Http\Controllers\ProductController::class, 'cart'])->name('cart');
    Route::delete('cart', [\App\Http\Controllers\ProductController::class, 'render'])->name('remo');
    

    Route::get('orders', [\App\Http\Controllers\TransactionsController::class, 'guest'])->name('guest.orders');


// Route::get('cart', [\App\Http\Controllers\ProductController::class, 'increaseQuantity'])->name('increaseQuantity');



Route::get('/search/{name}', SearchComponent::class)->name('product.search');



Route::get('/' , [\App\Livewire\HomeComponent::class, 'render'])->name('home');
// Route::get('/pp', [\App\Livewire\Counter::class,'render'  ])->name('pp');

Route::get('/shop', [\App\Livewire\ShopComponent::class, 'render' ])->name('shop');
Route::get('/shop/{id}', [\App\Livewire\ShopComponent::class, 'show'])->name('shoop');


Route::get('/product/{slug}', [\App\Livewire\DetailsComponent::class, 'render','cbc'])->name("product.details");
Route::post('/review', [\App\Http\Controllers\ReviewsController::class, 'addreview'])->name('addreview');
Route::delete('/delete/review/{id}', [\App\Http\Controllers\ReviewsController::class, 'delete'])->name('deletereview');
Route::post('/shop/filter', [\App\Http\Controllers\ProductsController::class, 'filter'])->name('filter.products');
Route::post('/shop/search', [\App\Http\Controllers\ProductsController::class, 'search'])->name('search');

// Route::post('/cart', [App\Livewire\CartComponent::class,'addToCart', 'render' ])->name('shop.cart');




Route::get('/language/{local}', function($local){
    if(in_array($local,['ar','en'])){
        session()->put('local',$local);
    }
    return redirect()->back();
})->name('language');
// Route::get('/checkout', [\App\Livewire\CheckoutComponent::class, 'render'])->name('shop.checkout');
// Route::post('/cart', [\App\Http\Controllers\AddToCartController::class, 'addToCart'])->name('product.addTocart');




// Route::post('/product/{id?}', [ProductController::clss, 'addProducttoCart'])->name('addproduct.to.cart');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::middleware('auth')->group(function () {
    

    
    Route::patch('/profile/update', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/delete', [\App\Http\Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/orders', [\App\Http\Controllers\ProfileController::class, 'orders'])->name('orders');
    Route::get('/wishlist', [\App\Livewire\WishlistComponent::class, 'wishlist'])->name('wishlist');
    Route::get('/AddToWishlist/{id}', [\App\Livewire\WishlistComponent::class, 'addtowishlist'])->name('addtowishlistpppp');
    Route::get('/wishlist/delete/{id}', [\App\Livewire\WishlistComponent::class, 'deletewishlist'])->name('deletewishlist');
    // /Users/yosef/surfside-media/app/Livewire/WishlistComponent.php
});



Route::middleware(['auth'])->group(function(){ 
    Route::get('/user/dashboard/view/order/00{id}', [App\Livewire\User\UserDashboardComponent::class, 'vieworder'])->name('vieworder');
    Route::get('/user/dashboard', [App\Livewire\User\UserDashboardComponent::class, 'render'])->name('user.dashboard');
    return('admin-dashboard-component');
});


Route::middleware(['auth','authadmin'])->group(function(){ 
    Route::get('/admin/dashboard', [\App\Livewire\Admin\AdminDashboardComponent::class, 'render'])->name('admin.dashboard');
    Route::get('/admin/product/add',[\App\Livewire\AdminAddProductComponenet::class,'index' ])->name('admin.product.add');
    Route::get('/admin/slider',[\App\Livewire\Admin\AdminHomeSliderComponent::class,'render'])->name('admin.home.slider');
    Route::get('/admin/slider/add',[\App\Livewire\Admin\AdminAddHomeSlideComponent::class, 'render'])->name('admin.home.slide.add');
    Route::get('/admin/slider/edit/{slide_id}',[\App\Livewire\Admin\AdminAddHomeSlideComponent::class])->name('admin.home.slide.edit');
    Route::post('/admin/categories/add-new-category', [\App\Http\Controllers\CategoriesController::class, 'addcategory'])->name('addnewcategory');
    Route::get('/admin/categories/edit/{id}', [\App\Http\Controllers\CategoriesController::class, 'edit'])->name('category.edit');
    Route::post('/admin/categories/update/{id}', [\App\Http\Controllers\CategoriesController::class, 'update'])->name('update.category');
    Route::get('/admin/categories/delete/{id}', [\App\Http\Controllers\CategoriesController::class, 'delete'])->name('delete.category');
    Route::get('/admin/{category_id}/sizes', [\App\Http\Controllers\CategorySizeController::class, 'index'])->name('categories.sizes'); 
    Route::post('/admin/{category_id}/sizes', [\App\Http\Controllers\CategorySizeController::class, 'store'])->name('categories.size.add');  
    Route::get('/admin/sizes/{id}', [\App\Http\Controllers\CategorySizeController::class, 'destroy'])->name('categories.size.delete');
    Route::post('/admin/products/update/{id}', [\App\Http\Controllers\ProductsController::class, 'update'])->name('update.product');
    Route::get('/admin/products', [\App\Http\Controllers\ProductsController::class, 'index'])->name('product');
    Route::get('/admin/products/add', [\App\Http\Controllers\ProductsController::class, 'add'])->name('product.add'); 
    Route::POST('/admin/products/add-new-product', [\App\Http\Controllers\ProductsController::class, 'addproduct'])->name('addnewproduct');
    Route::get('/admin/products/edit{id}', [\App\Http\Controllers\ProductsController::class, 'edit'])->name('product.edit');
    Route::get('/admin/products/delete{id}', [\App\Http\Controllers\ProductsController::class, 'delete'])->name('delete.product');
    Route::post('/admin/homeslides/add', [\App\Http\Controllers\HomeSlidersController::class, 'addHomeSlider'])->name('add.home.slider');
    Route::get('/admin/homeslides/delete{id}', [\App\Http\Controllers\HomeSlidersController::class, 'delete'])->name('delete.home.slider');
    Route::get('/admin/sizes', [\App\Http\Controllers\SizesController::class, 'index'])->name('sizes');
    Route::get('/admin/sizes/add/size', [\App\Http\Controllers\SizesController::class, 'addsize'])->name('addsize');
    Route::post('/admin/sizes/add/new/size', [\App\Http\Controllers\SizesController::class, 'addnewsize'])->name('addnewsize');
    Route::get('/admin/sizes/product/delete{id}', [\App\Http\Controllers\SizesController::class, 'deletesize'])->name('ds');
    Route::get('/admin/categories', [\App\Http\Controllers\CategoriesController::class, 'index'])->name('mmm');
    Route::get('/admin/sizes/add/new/size/', [\App\Http\Controllers\ProductsController::class, 'addtofav'])->name('addtofav');
    Route::get('/admin/add/new/color', [\App\Http\Controllers\ColorsController::class, 'index'])->name('colors');
    Route::post('/admin/add/new/color', [\App\Http\Controllers\ColorsController::class, 'add'])->name('addcolor');
    Route::get('/admin/product/images', [\App\Http\Controllers\ImagesController::class, 'index'])->name('showimages');
    Route::post('/admin/product/add/new/image', [\App\Http\Controllers\ImagesController::class, 'add'])->name('addimage');
    Route::get('/admin/product/delete/image{id}', [\App\Http\Controllers\ImagesController::class, 'delete'])->name('deleteimage');
    Route::get('/admin/color/delete{id}', [\App\Http\Controllers\ColorsController::class, 'delete'])->name('deletecolor');
    // Route::get('/admin/jbjj', [\App\Http\Controllers\ProfileController::class, ])->name('alii');
    Route::get('/profile/admin', [\App\Http\Controllers\ProfileController::class, 'allorders'])->name('admin.orders');
    Route::post('/profile/update/order/{id}', [\App\Http\Controllers\ProfileController::class, 'updateorder'])->name('admin.update.orders');
    
});



   Route::get('/send', action:function (){

    // zara.libya0@gmail.com

    Mail::to('zara.libya0@gmail.com')->send(new TestMail());
    return "sending";
   });

   

   
require __DIR__.'/auth.php';





// <?php

// use Illuminate\Support\Facades\Route;
// use App\Livewire\CartComponent;
// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider and all of them will
// | be assigned to the "web" middleware group. Make something great!
// |
// */

// Route::get('/', function () {
//     return view('layouts.app');
// });

// Route::get('/' , [\App\Livewire\HomeComponent::class, 'render'])->name('home.index');

// Route::get('/shop', [\App\Livewire\ShopComponent::class, 'render'])->name('shop');

// Route::get('/cart', [App\Livewire\CartComponent::class, 'render'])->name('shop.cart');

// Route::get('/checkout', [\App\Livewire\CheckoutComponent::class, 'render'])->name('shop.checkout');
Route::get('/transactions/{id}', [\App\Http\Controllers\TransactionsController::class, 'index'])->name('transaction');
Route::middleware(['auth'])->group(function()
{ 
});