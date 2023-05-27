<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        return view('product.index',['products'=>$products]);
    }

    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();

        return view('product.create',compact('brands','categories'));
    }

    public function store(Request $request)
    {
        $product = Product::create([
            'category_id'=> $request->category,
            'name' => $request->name,
            'price'=> $request->price,
            'sale_price' => $request->sale_price,
            'brands' => $request->brand,
        ]);

        return redirect()->route('product.index');
    }

    public function edit($id)
    {

        $product = Product::where('id',$id)->with('category')->first();

        $brands = Brand::all();
        
        $categories = Category::all();

        return view('product.edit',compact('product','brands','categories'));
    }


    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->update([
            'category_id' => $request->category,
            'name' => $request->name,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'brands' => $request->brand,
        ]);

        return redirect()->route('product.index');
    }

    public function destory($id)
    {
        $product = Product::find($id);

        $product->delete();

        return redirect()->route('product.index');
    }
}