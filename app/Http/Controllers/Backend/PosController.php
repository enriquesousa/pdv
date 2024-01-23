<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Customer;
use Gloudemans\Shoppingcart\Facades\Cart;

class PosController extends Controller
{
    
    // Pos
    public function Pos(){
        $products = Product::latest()->get();
        $customers = Customer::latest()->get();
        return view('backend.pos.pos_page', compact('products', 'customers'));
    }

    // AddCart
    public function AddCart(Request $request){

        Cart::add([
            'id' => $request->id, 
            'name' => $request->name, 
            'qty' => $request->qty, 
            'price' => $request->price, 
            'options' => ['size' => 'large']
        ]);

        $notification = array(
            'message' => 'Producto Agregado al Carrito',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
       
    }


}
