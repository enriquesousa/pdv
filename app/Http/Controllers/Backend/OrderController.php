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
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;


class OrderController extends Controller
{
    // FinalInvoice
    public function FinalInvoice(Request $request)
    {
        $rTotal = $request->total;
        $rPay = $request->pay;
        $mTotal = $rTotal - $rPay;

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
        $data['due'] = $mTotal;
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

        return redirect()->route('pending.order')->with($notification);
    }


    // PendingOrder
    public function PendingOrder()
    {
        $orders = Order::where('order_status', 'pendiente')->orderBy('created_at', 'ASC')->get();
        return view('backend.order.pending_order', compact('orders'));
    }

    // DetailOrder
    public function DetailOrder($order_id)
    {

        // El with('customer') es para incluir la relación con el id del cliente
        $order = Order::with('customer')->where('id', $order_id)->first();

        // El with('product') es para incluir la relación con el id del producto
        $order_items = OrderDetails::with('product')->where('order_id', $order_id)->orderby('id', 'desc')->get();

        return view('backend.order.detail_order', compact('order', 'order_items'));
    }

    // OrderStatusUpdate
    public function OrderStatusUpdate(Request $request)
    {

        $order_id = $request->id;

        // Restar el stock de los productos
        $product = OrderDetails::where('order_id', $order_id)->get();
        foreach ($product as $item) {
            Product::where('id', $item->product_id)->update([
                'product_store' => DB::raw('product_store - ' . $item->quantity),
            ]);
        }


        Order::findOrFail($order_id)->update([
            'order_status' => 'completada'
        ]);

        $notification = array(
            'message' => 'La orden se completo con Éxito',
            'alert-type' => 'success'
        );

        Cart::destroy();

        return redirect()->route('pending.order')->with($notification);
    }

    // CompleteOrder
    public function CompleteOrder()
    {
        $orders = Order::where('order_status', 'completada')->orderBy('created_at', 'ASC')->get();
        return view('backend.order.complete_order', compact('orders'));
    }

    // StockManage
    public function StockManage()
    {
        $product = Product::all();
        return view('backend.order.all_stock', compact('product'));
    }

    // OrderInvoiceDownload
    public function OrderInvoiceDownload($order_id)
    {

        $order = Order::with('customer')->where('id', $order_id)->first();
        $orderItem = OrderDetails::with('product')->where('order_id', $order_id)->orderby('id', 'desc')->get();

        $pdf = Pdf::loadView('backend.order.order_invoice', compact('order', 'orderItem'))->setPaper('a4')->setOption([
            'tempDir' => public_path(),
            'chroot' => public_path(),
        ]);

        // return $pdf->download('invoice.pdf');
        return $pdf->stream();
    }

    
    // *****************
    // Ventas pendientes
    // *****************

    // PendingDue
    public function PendingDue(){
        $allDue = Order::where('due', '>', 0)->orderBy('created_at', 'ASC')->get();
        return view('backend.order.pending_due', compact('allDue'));
    }

    // OrderDueAjax
    public function OrderDueAjax($id){
        $order = Order::findOrFail($id);
        return response()->json($order);
    }


}
