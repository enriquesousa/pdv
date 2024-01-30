<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    
    /**************
    *** Permisos
    ***************/

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


    /**************
    *** Roles
    ***************/

    // AllRoles
    public function AllRoles(){
        $roles = Role::all();
        return view('backend.pages.roles.all_roles',compact('roles'));
    }

    // AddRole
    public function AddRole(){
        return view('backend.pages.roles.add_role');
    }

    // StoreRole
    public function StoreRole(Request $request){

        $role = Role::create([
            'name' => $request->name,
        ]);

        $notification = [
            'message' => 'Rol Añadido Correctamente',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.roles')->with($notification);
       
    }

    // EditRole
    public function EditRole($id){
        $role = Role::findOrFail($id);
        return view('backend.pages.roles.edit_role',compact('role'));
    }

    // UpdateRole
    public function UpdateRole(Request $request){

        $role_id = $request->id;

        Role::findOrFail($role_id)->update([
            'name' => $request->name,
        ]);

        $notification = [
            'message' => 'Rol Actualizado Correctamente',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.roles')->with($notification);
       
    }

    // DeleteRole
    public function DeleteRole($id){

        Role::findOrFail($id)->delete();

        $notification = [
            'message' => 'Rol Eliminado Correctamente',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
       
    }


    /**************************
    *** Asignar Rol en Permisos
    ***************************/

    // AddRolesPermission
    public function AddRolesPermission(){

        $roles = Role::all();
        $permissions = Permission::all();
        $permission_groups = User::getPermissionGroups();
        return view('backend.pages.roles.add_roles_permission',compact('roles','permissions','permission_groups'));
       
    }

    // StoreRolesPermission
    public function StoreRolesPermission(Request $request){

        $data = array();
        $permissions = $request->permission;

        foreach($permissions as $key => $item){
            $data['role_id'] = $request->role_id;
            $data['permission_id'] = $item;
            DB::table('role_has_permissions')->insert($data);
        };

        $notification = [
            'message' => 'Permisos Asignados Correctamente',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.roles.permission')->with($notification);
       
    }

    // AllRolesPermission
    public function AllRolesPermission(){
       $roles = Role::all();
       return view('backend.pages.roles.all_roles_permission',compact('roles'));
    }

    // EditAdminRoles
    // Para editar permisos en un rol
    public function EditAdminRoles($id){
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        $permission_groups = User::getPermissionGroups();
        return view('backend.pages.roles.edit_roles_permission',compact('role','permissions','permission_groups'));
    }



}
