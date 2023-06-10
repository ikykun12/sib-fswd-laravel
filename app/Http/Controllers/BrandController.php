<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;


class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();

        return view('brand.index',compact('brands'));

    }
    public function create()
    {
        return view('brand.create');
    }

    public function store(Request $request)
    {
        $brand = Brand::create([
            'name' => $request->name,
        ]);

        return redirect()->route('brand.index');
    }

    public function edit(Request $request, $id)
    {
        $brand = Brand::find($id);

        return view('brand.edit',compact('brand'));
    }

    public function update(Request $request, $id)
    {
        Brand::where('id',$id)->update([
            'name'=> $request->name,
        ]);
    }

    public function destroy($id)
    {
        $brand = Brand::find($id);

        $brand->delete();

        return redirect()->route('brand.index');
    }
}
