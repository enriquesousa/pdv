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
            'options' => ['size' => 'large', 'peso' => '1Kg']
        ]);

        $notification = array(
            'message' => 'Producto Agregado al Carrito',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
       
    }

    // AllItem
    public function AllItem(){
        $product_items = Cart::content();
        return view('backend.pos.text_item', compact('product_items'));
    }

    // CartUpdate
    public function CartUpdate(Request $request, $rowId){
        $qty = $request->qty;
        $update = Cart::update($rowId, $qty);

        $notification = array(
            'message' => 'Carrito Actualizado',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    // CartRemove
    public function CartRemove($rowId){

        Cart::remove($rowId);

        $notification = array(
            'message' => 'Producto Eliminado del Carrito',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
       
    }

    // CreateInvoice
    public function CreateInvoice(Request $request){
        $content = Cart::content();
        $customer_id = $request->customer_id;
        $customer = Customer::where('id', $customer_id)->first();
        return view('backend.invoice.product_invoice', compact('content', 'customer'));
    }


}
