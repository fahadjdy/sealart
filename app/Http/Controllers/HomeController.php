<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Testimonial;

class HomeController extends Controller
{
 
   public function index()
    {
        $sliders = Slider::where('status', 'Published')->orderBy('id', 'desc')->get();
        $products = Product::with('category')->orderBy('id', 'desc')->limit(6)->get();
        $testimonials = Testimonial::orderBy('id', 'desc')->limit(3)->get();

        return view('home', compact('sliders', 'products', 'testimonials'));
    }

    public function about(){
        return view('about');
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
