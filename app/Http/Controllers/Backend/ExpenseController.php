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



}
