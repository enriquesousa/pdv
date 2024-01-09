<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\AdvanceSalary;
use App\Models\Employee;
use App\Models\PaySalary;
use Carbon\Carbon;

class SalaryController extends Controller
{
    //////////////////////// Métodos de Avance de Salario /////////////////

    // AddAdvanceSalary
    public function AddAdvanceSalary()
    {
        $employee = Employee::latest()->get();
        return view('backend.salary.add_advance_salary', compact('employee'));
    }

    // AdvanceSalaryStore
    public function AdvanceSalaryStore(Request $request)
    {

        $validateData = $request->validate(
            [
                'employee_id' => 'required',
                'month' => 'required',
                'year' => 'required',
                // 'advance_salary' => 'required|numeric|max:1000000',
            ],

            [
                'employee_id.required' => 'El empleado es requerido',
                'month.required' => 'El mes es requerido',
                'year.required' => 'El año es requerido',
                'advance_salary.required' => 'El salario es requerido, debe ser numérico, y no debe ser mayor a 1000000',
            ]
        );

        $month = $request->month;
        $year = $request->year;
        $employee_id = $request->employee_id;

        $advanced = AdvanceSalary::where('month', $month)->where('year', $year)->where('employee_id', $employee_id)->first();

        if ($advanced === NULL) {

            AdvanceSalary::insert([
                'employee_id' => $request->employee_id,
                'month' => $request->month,
                'year' => $request->year,
                'advance_salary' => $request->advance_salary,
                'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Salario en Avanzado Agregado Exitosamente',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        } else {

            $notification = array(
                'message' => 'Salario en Avanzado ya existe',
                'alert-type' => 'warning'
            );

            return redirect()->back()->with($notification);
        }
    }

    // AllAdvanceSalary
    public function AllAdvanceSalary()
    {
        $salary = AdvanceSalary::latest()->get();
        return view('backend.salary.all_advance_salary', compact('salary'));
    }

    // EditAdvanceSalary
    public function EditAdvanceSalary($id)
    {
        $employee = Employee::latest()->get();
        $salary = AdvanceSalary::findOrFail($id);
        return view('backend.salary.edit_advance_salary', compact('salary', 'employee'));
    }

    // AdvanceSalaryUpdate
    public function AdvanceSalaryUpdate(Request $request){

        $salary_id = $request->id;
    
        AdvanceSalary::findOrFail($salary_id)->update([
               'employee_id' => $request->employee_id,
               'month' => $request->month,
               'year' => $request->year,
               'advance_salary' => $request->advance_salary,
               'created_at' => Carbon::now(), 
           ]);
    
        $notification = array(
           'message' => 'Salario Avanzado Actualizado Exitosamente',
           'alert-type' => 'success'
       );
    
       return redirect()->route('all.advance.salary')->with($notification);
    }

    // AdvanceSalaryDelete
    public function AdvanceSalaryDelete($id){

        AdvanceSalary::findOrFail($id)->delete();
    
        $notification = array(
            'message' => 'Salario Avanzado Eliminado Exitosamente',
            'alert-type' => 'success'
        );
    
        return redirect()->back()->with($notification);
    }


    //////////////////////// Métodos Pay Salary - Salarios Pagados /////////////////

    // PaySalary
    public function PaySalary(){  
        $employee = Employee::latest()->get();
        return view('backend.salary.pay_salary', compact('employee'));
    }

    // PayNowSalary
    public function PayNowSalary($id){
       $paysalary = Employee::findOrFail($id);
       return view('backend.salary.paid_salary', compact('paysalary'));
    }



}
