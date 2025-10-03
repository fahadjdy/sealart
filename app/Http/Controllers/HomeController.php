<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Slider;

class HomeController extends Controller
{
    //
    public function index(){
         $sliders = Slider::where('status', 'Published')->orderBy('id', 'desc')->get();
        return view('home',compact('sliders'));
    }
    public function contact(){
        return view('contact');
    }

    public function category($category){

        $category = Category::with('products')->where('slug', $category)->first();
        if(empty($category)){
            abort(404);
        }
        return view('category',compact('category'));
    }
}
