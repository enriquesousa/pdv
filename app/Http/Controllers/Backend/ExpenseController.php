<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Expense;
use Illuminate\Support\Carbon;

class ExpenseController extends Controller
{
    // AddExpense
    public function AddExpense(){
        return view('backend.expense.add_expense');
    }

    // StoreExpense
    public function StoreExpense(Request $request){

        $mes = \Carbon\Carbon::parse($request->fecha)->locale('es')->isoFormat('MMMM');
        // dd($mes);

        $año = \Carbon\Carbon::parse($request->fecha)->locale('es')->isoFormat('YYYY');
        // dd($mes, $año);

        Expense::insert([
            'details' => $request->details, 
            'amount' => $request->amount,
            'month' => $mes,
            'year' => $año,
            'date' => $request->fecha,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Gasto Registrado con éxito',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
        
    }

    // TodayExpense
    public function TodayExpense(){
       $date = date('Y-m-d');
       $today = Expense::where('date', $date)->get();
       return view('backend.expense.today_expense', compact('today'));
    }

    // EditExpense
    public function EditExpense($id){
        $expense = Expense::find($id);
        return view('backend.expense.edit_expense', compact('expense'));
    }

    // UpdateExpense
    public function UpdateExpense(Request $request){

        $expense_id = $request->id;

        $mes = \Carbon\Carbon::parse($request->fecha)->locale('es')->isoFormat('MMMM');
        // dd($mes);

        $año = \Carbon\Carbon::parse($request->fecha)->locale('es')->isoFormat('YYYY');
        // dd($mes, $año);

        Expense::findOrFail($expense_id)->update([
            'details' => $request->details, 
            'amount' => $request->amount,
            'month' => $mes,
            'year' => $año,
            'date' => $request->fecha,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Gasto Actualizado con éxito',
            'alert-type' => 'success'
        );

        return redirect()->route('today.expense')->with($notification);
       
    }


    // MonthExpense
    public function MonthExpense(){
        $month = __(date("F"));
        // dd($month);
        $monthExpense = Expense::where('month', $month)->get();
        // dd($monthExpense);
        return view('backend.expense.month_expense', compact('monthExpense'));
    }

    // YearExpense
    public function YearExpense(){
        $year = __(date("Y"));
        $yearExpense = Expense::where('year', $year)->get();
        return view('backend.expense.year_expense', compact('yearExpense'));
    }



}
