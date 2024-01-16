<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Attendance;
use App\Models\Employee;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    // ListEmployeeAttendances
    public function ListEmployeeAttendances(){
        $allData = Attendance::select('date')->groupBy('date')->orderBy('id','desc')->get();
        return view('backend.attendance.view_employee_attendances',compact('allData'));
    }

    // AddEmployeeAttendances
    public function AddEmployeeAttendances(){
        $employees = Employee::all();
        return view('backend.attendance.add_employee_attendances',compact('employees'));
    }

    // StoreEmployeeAttendances
    public function StoreEmployeeAttendances(Request $request){

        // Cuenta el numero de empleados
        $countEmployee = count($request->employee_id);

        for ($i=0; $i < $countEmployee ; $i++) { 
            $attend_status = 'attend_status'.$i;
            $attend = new Attendance();
            $attend->date = date('Y-m-d',strtotime($request->date));
            $attend->employee_id = $request->employee_id[$i];
            $attend->attend_status = $request->$attend_status;
            $attend->save();
         }
 
          $notification = array(
             'message' => 'Datos Guardados Correctamente',
             'alert-type' => 'success'
         );
 
         return redirect()->route('employee.attendances.list')->with($notification); 
    
    }


}
