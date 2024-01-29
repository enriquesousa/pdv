<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    // AllPermission
    public function AllPermission(){
        $permissions = Permission::all();
        return view('backend.pages.permission.all_permission',compact('permissions'));
    }

    // AddPermission
    public function AddPermission(){
        return view('backend.pages.permission.add_permission');
    }

    // StorePermission
    public function StorePermission(Request $request){

        $role = Permission::create([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);

        $notification = [
            'message' => 'Permiso Añadido Correctamente',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.permission')->with($notification);
       
    }

    // EditPermission
    public function EditPermission($id){
        $permission = Permission::findOrFail($id);
        return view('backend.pages.permission.edit_permission',compact('permission'));
    }

    // UpdatePermission
    public function UpdatePermission(Request $request){

        $permission_id = $request->id;

        Permission::findOrFail($permission_id)->update([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);

        $notification = [
            'message' => 'Permiso Actualizado Correctamente',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.permission')->with($notification);
       
    }

    // DeletePermission
    public function DeletePermission($id){

        Permission::findOrFail($id)->delete();

        $notification = [
            'message' => 'Permiso Eliminado Correctamente',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
       
    }



}
