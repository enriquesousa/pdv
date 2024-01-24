<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Support\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderController extends Controller
{
    // FinalInvoice
    public function FinalInvoice(Request $request)
    {

        $data = array();

        $data['customer_id'] = $request->customer_id;
        $data['order_date'] = $request->order_date;
        $data['order_status'] = $request->order_status;
        $data['total_products'] = $request->total_products;
        $data['sub_total'] = $request->sub_total;
        $data['iva'] = $request->iva;

        $data['invoice_no'] = 'EPOS' . mt_rand(10000000, 99999999);
        $data['total'] = $request->total;
        $data['payment_status'] = $request->payment_status;
        $data['pay'] = $request->pay;
        $data['due'] = $request->due;
        $data['created_at'] = Carbon::now();

        // Insert Data a la tabla 'orders'
        // This sweet little method lets you insert a record into a database table and get back the ID of the record you’ve just inserted.
        $order_id = Order::insertGetId($data);


        // Insert Data a la tabla 'order_details'
        $contents = Cart::content();
        $pData = array();
        foreach ($contents as $content) {

            $pData['order_id'] = $order_id;
            $pData['product_id'] = $content->id;
            $pData['quantity'] = $content->qty;
            $pData['unit_cost'] = $content->price;
            $pData['total'] = $content->total;

            $insert = OrderDetails::insert($pData);
        }


        $notification = array(
            'message' => 'Se completo la orden con Éxito',
            'alert-type' => 'success'
        );

        Cart::destroy();

        return redirect()->route('dashboard')->with($notification);
    }


    // PendingOrder
    public function PendingOrder(){
        $orders = Order::where('order_status', 'pendiente')->orderBy('created_at', 'ASC')->get();
        return view('backend.order.pending_order', compact('orders'));
    }



}
