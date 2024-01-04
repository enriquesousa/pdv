<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Employee;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class EmployeeController extends Controller
{

    // EmployeeList
    public function EmployeeList()
    {
        $employee = Employee::latest()->get();
        return view('backend.employee.all_employee', compact('employee'));
    }

    // EmployeeAdd
    public function EmployeeAdd()
    {
        return view('backend.employee.add_employee');
    }

     // EmployeeStore
     public function EmployeeStore(Request $request)
     {
 
         $validateData = $request->validate(
             [
                 'name' => 'required|max:200',
                 'email' => 'required|unique:employees|max:200',
                 'phone' => 'required|max:200',
                 'address' => 'required|max:400',
                 'salary' => 'required|numeric|max:1000000',
                 'vacation' => 'required|max:200',
                 'city' => 'required|max:200',
                 'experience' => 'required',
                 'image' => 'required',
             ],
 
             [
                 'name.required' => 'El nombre es requerido',
                 'email.required' => 'El correo es requerido',
                 'phone.required' => 'El teléfono es requerido',
                 'address.required' => 'La dirección es requerida',
                 'salary.required' => 'El salario es requerido',
                 'vacation.required' => 'La vacación es requerida',
                 'city.required' => 'La ciudad es requerida',
                 'experience.required' => 'La experiencia es requerida',
                 'image.required' => 'La imagen es requerida',
             ]
         );
 
         $image = $request->file('image');
         $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
         Image::make($image)->resize(300, 300)->save('upload/employee/' . $name_gen);
         $save_url = 'upload/employee/' . $name_gen;
 
         Employee::insert([
 
             'name' => $request->name,
             'email' => $request->email,
             'phone' => $request->phone,
             'address' => $request->address,
             'experience' => $request->experience,
             'salary' => $request->salary,
             'vacation' => $request->vacation,
             'city' => $request->city,
             'image' => $save_url,
             'created_at' => Carbon::now(),
 
         ]);
 
         $notification = array(
             'message' => 'Empleado Registrado Exitosamente',
             'alert-type' => 'success'
         );
 
         return redirect()->route('all.employee')->with($notification);
     }

     // EmployeeEdit
    public function EmployeeEdit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('backend.employee.edit_employee', compact('employee'));
    }

    // EmployeeUpdate
    public function EmployeeUpdate(Request $request)
    {

        $employee_id = $request->id;
        $imagen = $request->imagen_original;

        $validateData = $request->validate(
            [
                'name' => 'required|max:200',
                'email' => 'required|max:200',
                'phone' => 'required|max:200',
                'address' => 'required|max:400',
                'salary' => 'required|max:200',
                'vacation' => 'required|max:200',
                'city' => 'required|max:200',
                'experience' => 'required',
            ],

            [
                'name.required' => 'El nombre es requerido',
                'email.required' => 'El correo es requerido',
                'phone.required' => 'El teléfono es requerido',
                'address.required' => 'La dirección es requerida',
                'salary.required' => 'El salario es requerido',
                'vacation.required' => 'La vacación es requerida',
                'city.required' => 'La ciudad es requerida',
                'experience.required' => 'La experiencia es requerida',
            ]
        );

        // si hay foto
        if ($request->file('image')) {

            $image = $request->file('image');

            // dd($imagen); // regresa "upload/employee/1780653224833182.jpg"
            unlink(public_path($imagen)); // para borrar la imagen anterior

            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('upload/employee/' . $name_gen);
            $save_url = 'upload/employee/' . $name_gen;

            Employee::findOrFail($employee_id)->update([

                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'experience' => $request->experience,
                'salary' => $request->salary,
                'vacation' => $request->vacation,
                'city' => $request->city,
                'image' => $save_url,
                'created_at' => Carbon::now(),

            ]);

            $notification = array(
                'message' => 'Empleado con Foto Actualizado Exitosamente',
                'alert-type' => 'success'
            );

            return redirect()->route('all.employee')->with($notification);

        } else {

            Employee::findOrFail($employee_id)->update([

                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'experience' => $request->experience,
                'salary' => $request->salary,
                'vacation' => $request->vacation,
                'city' => $request->city,
                'created_at' => Carbon::now(),

            ]);

            $notification = array(
                'message' => 'Empleado Actualizado Exitosamente',
                'alert-type' => 'success'
            );

            return redirect()->route('all.employee')->with($notification);

        } // End else Condition  

    }

    // EmployeeDelete
    public function EmployeeDelete($id){
        $employee_img = Employee::findOrFail($id);
        $img = $employee_img->image;
        unlink($img);

        Employee::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Empleado Eliminado Exitosamente',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

}
