<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Haruncpi\LaravelIdGenerator\IdGenerator;

use App\Exports\ProductExport;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    // ListProduct
    public function ListProduct()
    {
        $product = Product::latest()->get();
        return view('backend.product.list_product', compact('product'));
    }

    // AddProduct
    public function AddProduct()
    {

        $category = Category::latest()->get();
        $supplier = Supplier::latest()->get();
        return view('backend.product.add_product', compact('category', 'supplier'));
    }

    // StoreProduct
    public function StoreProduct(Request $request)
    {
        $pCode = IdGenerator::generate(['table' => 'products', 'field' => 'product_code', 'length' => 8, 'prefix' => 'CP' . date('y')]);

        $image = $request->file('product_image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(300, 300)->save('upload/product/' . $name_gen);
        $save_url = 'upload/product/' . $name_gen;

        Product::insert([

            'product_name' => $request->product_name,
            'category_id' => $request->category_id,
            'supplier_id' => $request->supplier_id,
            'product_code' => $pCode,
            'product_garage' => $request->product_garage,
            'product_store' => $request->product_store,
            'buying_date' => $request->buying_date,
            'expire_date' => $request->expire_date,
            'buying_price' => $request->buying_price,
            'selling_price' => $request->selling_price,
            'product_image' => $save_url,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Producto Guardado Exitosamente',
            'alert-type' => 'success'
        );

        return redirect()->route('list.product')->with($notification);
    }


    // EditProduct
    public function EditProduct($id)
    {
        $product = Product::findOrFail($id);
        $category = Category::latest()->get();
        $supplier = Supplier::latest()->get();
        return view('backend.product.edit_product', compact('product', 'category', 'supplier'));
    }

    // UpdateProduct
    public function UpdateProduct(Request $request)
    {

        $product_id = $request->id;

        $imagen = $request->imagen_original;

        // si hay foto
        if ($request->file('product_image')) {

            $image = $request->file('product_image');

            // dd($imagen); // regresa "upload/employee/1780653224833182.jpg"
            unlink(public_path($imagen)); // para borrar la imagen anterior

            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('upload/product/' . $name_gen);
            $save_url = 'upload/product/' . $name_gen;

            Product::findOrFail($product_id)->update([

                'product_name' => $request->product_name,
                'category_id' => $request->category_id,
                'supplier_id' => $request->supplier_id,
                'product_code' => $request->product_code,
                'product_garage' => $request->product_garage,
                'product_store' => $request->product_store,
                'buying_date' => $request->buying_date,
                'expire_date' => $request->expire_date,
                'buying_price' => $request->buying_price,
                'selling_price' => $request->selling_price,
                'product_image' => $save_url,
                'created_at' => Carbon::now(),

            ]);

            $notification = array(
                'message' => 'Producto con Foto Actualizado Exitosamente',
                'alert-type' => 'success'
            );

            return redirect()->route('list.product')->with($notification);
        } else {

            Product::findOrFail($product_id)->update([

                'product_name' => $request->product_name,
                'category_id' => $request->category_id,
                'supplier_id' => $request->supplier_id,
                'product_code' => $request->product_code,
                'product_garage' => $request->product_garage,
                'product_store' => $request->product_store,
                'buying_date' => $request->buying_date,
                'expire_date' => $request->expire_date,
                'buying_price' => $request->buying_price,
                'selling_price' => $request->selling_price,
                'created_at' => Carbon::now(),

            ]);

            $notification = array(
                'message' => 'Producto Actualizado Exitosamente',
                'alert-type' => 'success'
            );

            return redirect()->route('list.product')->with($notification);
        } // End else Condition  
    }

    // DeleteProduct
    public function DeleteProduct($id){

        $product = Product::findOrFail($id);
        $imagen = $product->product_image;
        unlink(public_path($imagen));

        Product::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Producto Eliminado Exitosamente',
            'alert-type' => 'success'
        );

        return redirect()->route('list.product')->with($notification);
    }


    // BarcodeProduct
    public function BarcodeProduct($id){

        $product = Product::findOrFail($id);
        return view('backend.product.barcode_product', compact('product'));
        
    }

    // ImportProduct
    public function ImportProduct(){
       return view('backend.product.import_product');
    }

    // ExportProduct
    public function ExportProduct(){

        return Excel::download(new ProductExport, 'products.xlsx');
        
    }


}
