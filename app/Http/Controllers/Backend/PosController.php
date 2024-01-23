<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class PosController extends Controller
{
    
    // Pos
    public function Pos(){
        $products = Product::latest()->get();
        return view('backend.pos.pos_page', compact('products'));
    }


}
