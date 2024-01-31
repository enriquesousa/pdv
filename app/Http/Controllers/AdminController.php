<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
       return view('backend.admin.all_admin', compact('allAdminUsers'));
    }





}
