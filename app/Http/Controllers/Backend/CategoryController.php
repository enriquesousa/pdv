<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use Illuminate\Support\Carbon;

class CategoryController extends Controller
{
    // ListCategory
    public function ListCategory(){
        $category = Category::latest()->get();
        return view('backend.category.list_category',compact('category'));
    }

    // StoreCategory
    public function StoreCategory(Request $request){

        $request->validate([
            'category_name' => 'required',
        ]);
       
        Category::insert([
            'category_name' => $request->category_name,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Categoría Creada Exitosamente',
            'alert-type' => 'success'
        );

        return redirect()->route('list.category')->with($notification);

    }



}
