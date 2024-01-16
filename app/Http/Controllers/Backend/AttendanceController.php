<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Attendance;
use App\Models\Employee;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    // EmployeeAttendancesList
    public function ListEmployeeAttendances(){
        $allData = Attendance::orderBy('id','desc')->get();
        return view('backend.attendance.view_employee_attendances',compact('allData'));
    }

    // AddEmployeeAttendances
    public function AddEmployeeAttendances(){
        $employees = Employee::all();
        return view('backend.attendance.add_employee_attendances',compact('employees'));
    }


}
