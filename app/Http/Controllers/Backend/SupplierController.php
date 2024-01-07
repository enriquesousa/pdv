<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Supplier;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class SupplierController extends Controller
{
    // SupplierList
    public function SupplierList(){
        $supplier = Supplier::latest()->get();
        return view('backend.supplier.all_supplier', compact('supplier'));
    }

    // SupplierAdd
    public function SupplierAdd(){
       return view('backend.supplier.add_supplier');
    }

    // SupplierStore
    public function SupplierStore(Request $request){

        $validateData = $request->validate(
            [
                'name' => 'required|max:200',
                'email' => 'required|unique:customers|max:200',
                'phone' => 'required|max:200',
                'address' => 'required|max:400',
                'shopname' => 'required|max:200',
                'account_holder' => 'required|max:200',
                'account_number' => 'required|max:200',
                'bank_name' => 'required|max:200',
                'bank_branch' => 'required|max:200',
                'city' => 'required|max:200',
                'image' => 'required',
                'type' => 'required',
            ],

            [
                'name.required' => 'El nombre es requerido',
                'email.required' => 'El correo es requerido',
                'phone.required' => 'El teléfono es requerido',
                'address.required' => 'La dirección es requerida',
                'shopname.required' => 'La Tienda es requerida',
                'account_holder.required' => 'Cuenta de cliente es requerida',
                'account_number.required' => 'El numero de cuenta es requerida',
                'bank_name.required' => 'Nombre del Banco es requerida',
                'bank_branch.required' => 'Sucursal del Banco es requerida',
                'city.required' => 'La ciudad es requerida',
                'image.required' => 'La imagen es requerida',
                'type.required' => 'El tipo es requerido',
            ]
        );

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(300, 300)->save('upload/supplier/' . $name_gen);
        $save_url = 'upload/supplier/' . $name_gen;

        Supplier::insert([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,

            'shopname' => $request->shopname,
            'account_holder' => $request->account_holder,
            'account_number' => $request->account_number,
            'bank_name' => $request->bank_name,
            'bank_branch' => $request->bank_branch,
            'type' => $request->type,

            'city' => $request->city,
            'image' => $save_url,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Proveedor Registrado Exitosamente',
            'alert-type' => 'success'
        );

        return redirect()->route('all.supplier')->with($notification);

    }


    // SupplierEdit
    public function SupplierEdit($id){
        $supplier = Supplier::findOrFail($id);
        return view('backend.supplier.edit_supplier', compact('supplier'));
    }

    // SupplierUpdate
    public function SupplierUpdate(Request $request){

        $supplier_id = $request->id;
        $imagen = $request->imagen_original;

        $validateData = $request->validate(
            [
                'name' => 'required|max:200',
                'email' => 'required|max:200',
                'phone' => 'required|max:200',
                'address' => 'required|max:400',
                'city' => 'required|max:200',
                'shopname' => 'required|max:200',
                'account_holder' => 'required|max:200',
                'account_number' => 'required|max:200',
                'bank_name' => 'required|max:200',
                'bank_branch' => 'required|max:200',
                'type' => 'required',
            ],

            [
                'name.required' => 'El nombre es requerido',
                'email.required' => 'El correo es requerido',
                'phone.required' => 'El teléfono es requerido',
                'address.required' => 'La dirección es requerida',
                'city.required' => 'La ciudad es requerida',
                'shopname.required' => 'La Tienda es requerida',
                'account_holder.required' => 'Cuenta de Cliente es requerida',
                'account_number.required' => 'El numero de cuenta es requerida',
                'bank_name.required' => 'Nombre del Banco es requerida',
                'bank_branch.required' => 'Sucursal del Banco es requerida',
                'type.required' => 'El tipo es requerido',
                
            ]
        );

        // si hay foto
        if ($request->file('image')) {

            $image = $request->file('image');

            // dd($imagen); // regresa "upload/employee/1780653224833182.jpg"
            unlink(public_path($imagen)); // para borrar la imagen anterior

            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('upload/supplier/' . $name_gen);
            $save_url = 'upload/supplier/' . $name_gen;

            Supplier::findOrFail($supplier_id)->update([

                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'shopname' => $request->shopname,
                'account_holder' => $request->account_holder,
                'account_number' => $request->account_number,
                'bank_name' => $request->bank_name,
                'bank_branch' => $request->bank_branch,
                'type' => $request->type,
                'city' => $request->city,
                'image' => $save_url,
                'created_at' => Carbon::now(), 

            ]);

            $notification = array(
                'message' => 'Proveedor con Foto Actualizado Exitosamente',
                'alert-type' => 'success'
            );

            return redirect()->route('all.supplier')->with($notification);

        } else {

            Supplier::findOrFail($supplier_id)->update([

                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'shopname' => $request->shopname,
                'account_holder' => $request->account_holder,
                'account_number' => $request->account_number,
                'bank_name' => $request->bank_name,
                'bank_branch' => $request->bank_branch,
                'type' => $request->type,
                'city' => $request->city, 
                'created_at' => Carbon::now(), 

            ]);

            $notification = array(
                'message' => 'Proveedor Actualizado Exitosamente',
                'alert-type' => 'success'
            );

            return redirect()->route('all.supplier')->with($notification);

        } // End else Condition

    }

    // SupplierDelete
    public function SupplierDelete($id){

        $supplier_img = Supplier::findOrFail($id);
        $img = $supplier_img->image;
        unlink($img);

        Supplier::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Proveedor Eliminado Exitosamente',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    // SupplierDetail
    public function SupplierDetail($id){
        $supplier = Supplier::findOrFail($id);
        return view('backend.supplier.details_supplier',compact('supplier'));
    }
    
}
