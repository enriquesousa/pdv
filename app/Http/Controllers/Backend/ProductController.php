<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class ProductController extends Controller
{
    // ListProduct
    public function ListProduct(){
        $product = Product::latest()->get();
        return view('backend.product.list_product', compact('product'));
    }

    // AddProduct
    public function AddProduct(){

        $category = Category::latest()->get();
        $supplier = Supplier::latest()->get();
        return view('backend.product.add_product', compact('category', 'supplier'));
        
    }


}
