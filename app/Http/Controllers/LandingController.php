<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder(8)->get();

        $categories = Category::all();

        $sliders = Slider::where("approve",1)->get();


        return view('landing',compact('products','categories','sliders'));
    }
}