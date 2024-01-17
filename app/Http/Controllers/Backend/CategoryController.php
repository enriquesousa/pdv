<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    // ListCategory
    public function ListCategory(){
        $category = Category::latest()->get();
        return view('backend.category.list_category',compact('category'));
    }


}
