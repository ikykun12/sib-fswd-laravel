<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
   {
        $categories = Category::all();

        return view('category.index', compact('categories'));
   }

   public function create()
   {
    return view('category.create');
   }

   public function store(Request $request)
   {
    $category = Category::create([
        'name' => $request->name
    ]);
      // redirect ke halaman category.index
      return redirect()->route('category.index');
   }

   public function edit($id)
   {
    $category = Category::find($id);
    return view('category.edit',compact('category'));
   }


   public function update(Request $request, $id)
   {
    $category = Category::find($id);

    $category->update([
        'name'=> $request->name
    ]);
        return redirect()->route('category.index');
   }

   public function destroy($id)
   {
    $category = Category::find($id);

    $category->delete();


    return redirect()->route('category.index');
   }

}
