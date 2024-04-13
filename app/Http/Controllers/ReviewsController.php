<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;

class ReviewsController extends Controller
{
    public function addreview(Request $request){
        Review::create([
            'user_id'=>Auth::id(),
            'name'=>$request->name,
            'email'=>$request->email,
            'comment'=>$request->comment,
            'product_slug'=>$request->product_slug
        ]);
        return redirect()->back()->with('success', 'Your review has been submitted Successfully');
    }

    public function deletereview($id){

        $delete = Review::where($id)->delete();

        return redirect()->back()->with('success', 'Your review has been deleted Successfully');

    }
}
