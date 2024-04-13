<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class HomeSlidersController extends Controller
{
   
    public function index(){
        $sliders = DB::table('home_sliders')->get();
        return view('livewire/admin/admin-home-slider-component', compact('sliders'));
    }
    public function addHomeSlider(Request $request){
        

        $file_extension = $request->image->getclientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path = 'assets/imgs/slider';
        $request->image->move($path,$file_name);

        DB::table('home_sliders')->insert([
            
            'top_title' => $request->top_title,
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'offer' => $request->offer,
            'link' => $request->link,
            'status' => $request->status,
            'image' => $request->image,
           
        ]);
       
        return redirect()->back()->with('success', 'homeslide added');
    }
    public function edit($id){
        
        $sliders = DB::table('home_sliders')->where('id',$id)->first();
        return view('livewire/Admin/admin-edit-home-slides-componenet' ,compact('sliders'));

    }
    public function update(Request $request, $id){

        DB::table('home_sliders')->where('id',$id)->update([
            
            'top_title' => $request->top_title,
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'offer' => $request->offer,
            'link' => $request->link,
            'status' => $request->status,
            'image' => $request->image,
        ]);
        $sliders = DB::table('home_sliders')->get();
        return redirect()->back()->with('success', 'homeslide updated');
        
    }
    public function delete($id){
        DB::table('home_sliders')->where('id',$id)->delete();
        return redirect()->back()->with('success', 'homeslide deleted');
    }
}
