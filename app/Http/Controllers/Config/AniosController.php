<?php

namespace App\Http\Controllers\Config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Config\Anios;

class AniosController extends Controller
{
    // AniosList
    public function AniosList(){
        $anios = Anios::latest()->get();
        return view('backend.config.all_anios', compact('anios'));
    }

    // AnioAdd
    public function AnioAdd()
    {
        return view('backend.config.add_anio');
    }

    // AnioStore
    public function AnioStore(Request $request)
    {

        $validateData = $request->validate(
            [
                'anio' => 'required|max:4',
            ],

            [
                'name.required' => 'El Año es requerido, 4 dígitos',
            ]
        );


        Anios::insert([
            'anio' => $request->anio,
        ]);


        $notification = array(
            'message' => 'Año Registrado Exitosamente',
            'alert-type' => 'success'
        );

        return redirect()->route('all.anios')->with($notification);
    }

    // AnioEdit
    public function AnioEdit($id){
        $anio = Anios::findOrFail($id);
        return view('backend.config.edit_anio', compact('anio'));
    }

    // AnioUpdate
    public function AnioUpdate(Request $request){

        $anio_id = $request->id;

        $validateData = $request->validate(
            [
                'anio' => 'required|max:4',
            ],

            [
                'name.required' => 'El Año es requerido, 4 dígitos',
            ]
        );


        Anios::findOrFail($anio_id)->update([
            'anio' => $request->anio,
        ]);

        $notification = array(
            'message' => 'Año Actualizado Exitosamente',
            'alert-type' => 'success'
        );

        return redirect()->route('all.anios')->with($notification);
    }

    // AnioDelete
    public function AnioDelete($id){

        Anios::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Año Eliminado Exitosamente',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }



}
