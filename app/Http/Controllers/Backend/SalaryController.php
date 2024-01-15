<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\AdvanceSalary;
use App\Models\Employee;
use App\Models\PaySalary;
use Carbon\Carbon;
use App\Models\Config\Anios;

class SalaryController extends Controller
{
    //////////////////////// Métodos de Avance de Salario /////////////////

    // AddAdvanceSalary
    public function AddAdvanceSalary()
    {
        $employee = Employee::latest()->get();
        $anios = Anios::latest()->get();
        return view('backend.salary.add_advance_salary', compact('employee', 'anios'));
    }

    // AdvanceSalaryStore
    public function AdvanceSalaryStore(Request $request)
    {

        $todos = $request->CheckEmployees;
        // dd($todos);

        // Si no esta puesto el checkbox de todos los empleados, si puedes validar a employee_id
        if ($todos == null) {
            
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

            // En la tabla 'advance_salaries' y tabla 'advance_salarios' se valida que no exista un registro con el mismo 'month' y 'year'
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

                return redirect()->route('all.advance.salary')->with($notification);
            } else {

                $notification = array(
                    'message' => 'Salario en Avanzado ya existe',
                    'alert-type' => 'warning'
                );

                return redirect()->route('all.advance.salary')->with($notification);
            }

        }else{

            $mensaje = null;

            $validateData = $request->validate(
                [
                    'month' => 'required',
                    'year' => 'required',
                ],
    
                [
                    'month.required' => 'El mes es requerido',
                    'year.required' => 'El año es requerido',
                ]
            );
    
            $month = $request->month;
            $year = $request->year;

            $empleados = Employee::latest()->get();

            foreach ($empleados as $key => $item) {

                $employee_id = $item->id;

                // En la tabla 'advance_salaries' y tabla 'advance_salarios' se valida que no exista un registro con el mismo 'month' y 'year'
                $advanced = AdvanceSalary::where('month', $month)->where('year', $year)->where('employee_id', $employee_id)->first();
                if ($advanced === NULL) {

                    AdvanceSalary::insert([
                        'employee_id' => $employee_id,
                        'month' => $request->month,
                        'year' => $request->year,
                        'advance_salary' => $request->advance_salary,
                        'created_at' => Carbon::now(),
                    ]);


                } else {

                    $mensaje = 'El registro ya existe';
                    
                }
                

            }

            if ($mensaje == null) {

                $notification = array(
                    'message' => 'Registros Agregados Exitosamente',
                    'alert-type' => 'success'
                );

            }else{

                $notification = array(
                    'message' => 'Algunos Registros Ya Existían',
                    'alert-type' => 'info'
                );
            }

            return redirect()->route('all.advance.salary')->with($notification);

        }

    }

    // AllAdvanceSalary
    public function AllAdvanceSalary()
    {
        $salary = AdvanceSalary::latest()->get();
        // dd($salary);
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

        // $employee = Employee::latest()->get();
        // dd($employee);

        // $employee = AdvanceSalary::where('year', Carbon::now()->format('Y'))->get();
        $employee = AdvanceSalary::where('year', date("Y", strtotime('-1 month')))->get();
        // dd($employee);
        return view('backend.salary.pay_salary', compact('employee'));
    }

    // PaySalaryOtherMonth
    public function PaySalaryOtherMonth($mes){  
        $employee = AdvanceSalary::where('month', $mes)->where('year', date("Y"))->latest()->get();
        // dd($employee);
        return view('backend.salary.pay_salary_other_month', compact('employee', 'mes'));
    }

    // PayNowSalary
    public function PayNowSalary($id, $month, $year, $avance_salario, $SeDebe, $advance_id){
       //dd($id, $month, $year, $avance_salario, $SeDebe, $advance_id); 
       $paySalary = Employee::findOrFail($id);
       return view('backend.salary.paid_salary', compact('paySalary', 'month', 'year', 'avance_salario', 'SeDebe', 'advance_id'));
    }

    // EmployeeSalaryStore
    public function EmployeeSalaryStore(Request $request){
       
        $employee_id = $request->employee_id;

        // Guardar el status de Salario Pagado en tabla 'advance_salaries'
        AdvanceSalary::findOrFail($request->advance_id)->update([
            'status' => $request->salary_status,
        ]);

        // Guardar el Salario Pagado con su status en tabla 'pay_salaries'
        PaySalary::insert([
            'employee_id' => $request->employee_id,
            'salary_month' => $request->salary_month,
            'year' => $request->salary_year,
            'paid_amount' => $request->paid_amount,
            'advance_salary' => $request->advance_salary,
            'due_salary' => $request->due_salary,
            'status' => $request->salary_status,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Salario de Empleado Pagado Exitosamente',
            'alert-type' => 'success'
        );
    
        return redirect()->route('pay.salary')->with($notification);

    }

    // MonthSalary
    public function MonthSalary(){
        // Lista los sueldos pagados del ultimo mes
        $paidSalary = PaySalary::where('year', date("Y", strtotime('-1 month')))->where('salary_month', __(date("F", strtotime('-1 month'))))->get();
        return view('backend.salary.month_salary', compact('paidSalary'));
    }

    // HistorySalary
    public function HistorySalary($id){
        $historySalary = AdvanceSalary::where('employee_id', $id)->get();
        // dd($historySalary);
        return view('backend.salary.history_salary', compact('historySalary'));
    }

    // HistoryDetailSalary
    public function HistoryDetailSalary($id){
        $user = AdvanceSalary::findOrFail($id);

        $user = [
            'id' => $user->id,
            'employee_id' => $user->employee_id,
            'month' => $user->month,
            'year' => $user->year,
            'advance_salary' => $user->advance_salary,
            'status' => $user->status,
            'created_at' => $user->created_at,
            'name' => $user->employee->name,
            'email' => $user->employee->email,
            'phone' => $user->employee->phone,
            'address' => $user->employee->address,
            'image' => $user->employee->image,
            'paid_amount' => $user->sueldoPagado->paid_amount,
        ];


        return response()->json($user);
    }

}
