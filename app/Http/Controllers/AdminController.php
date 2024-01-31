<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminController extends Controller
{

    public function AdminDestroy(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Admin desconectado con éxito',
            'alert-type' => 'info'
        );

        // return redirect('/'); //home page
        return redirect('/logout')->with($notification); //login page
    }

     // AdminLogoutPage
     public function AdminLogoutPage(){
         return view('admin.admin_logout');
     }

     public function AdminProfile(){
        // Para saber que usuario esta logueado
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile_view', compact('adminData'));
    }

    // AdminProfileStore
    public function AdminProfileStore(Request $request){

        // Para saber que usuario esta logueado
        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        // actualizar imagen
        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_image/' . $data->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_image'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Perfil actualizado con éxito',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    // ChangePassword
    public function ChangePassword(){
        return view('admin.change_password');
    }

    // UpdatePassword
    public function UpdatePassword(Request $request)
    {

        // Validación
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        // Match The Old Password 
        if (!Hash::check($request->old_password, auth::user()->password)) {

            $notification = array(
                    'message' => '¡La contraseña anterior no coincide!',
                    'alert-type' => 'error'
                );
            return back()->with($notification);
        }


        //// Update The New Password 
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        $notification = array(
            'message' => 'Cambio de contraseña exitoso',
            'alert-type' => 'success'
        );
        return back()->with($notification);

    }

    // PageAyuda
    public function PageAyuda(){
        return view('admin.page_ayuda');
    }


    /**********************************
     * Admin Configuración de Usuarios
     **********************************/

    // AllAdmin
    public function AllAdmin(){
       $allAdminUsers = User::latest()->get();
       // dd($allAdminUsers);
       return view('backend.admin.all_admin', compact('allAdminUsers'));
    }

    // AddAdmin
    public function AddAdmin(){
        $roles = Role::all();
        return view('backend.admin.add_admin', compact('roles'));
    }

    // StoreAdmin
    public function StoreAdmin(Request $request){

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        // Asegurarnos que el value del select role venga con nombre y no id, así me funciona a mi.
        if($request->roles){
            $user->assignRole($request->roles);
        };

        $notification = [
            'message' => 'Nuevo Administrador Registrado Correctamente',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.admin')->with($notification);
        
    }

    // EditAdmin
    public function EditAdmin($id){

        $adminUser = User::findOrFail($id);
        $roles = Role::all();
        return view('backend.admin.edit_admin', compact('adminUser', 'roles'));
    }

    // UpdateAdmin
    public function UpdateAdmin(Request $request){

        $admin_id = $request->id;

        $user = User::findOrFail($admin_id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        // detach role
        $user = User::findOrFail($admin_id);
        $user->roles()->detach();

        // Asegurarnos que el value del select role venga con nombre y no id, así me funciona a mi.
        if($request->roles){
            $user->assignRole($request->roles);
        };

        $notification = [
            'message' => 'Datos de Administrador Actualizados Correctamente',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.admin')->with($notification);
        
    }

    // DeleteAdmin
    public function DeleteAdmin($id){

        $adminUser = User::findOrFail($id);
        // usar is_null para que borrar al user de spatie model_has_roles
        if (!is_null($adminUser)) {
            @unlink(public_path('upload/admin_image/' . $adminUser->photo));
            User::findOrFail($id)->delete();
        }

        $notification = [
            'message' => 'Administrador Eliminado Correctamente',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    }


}
