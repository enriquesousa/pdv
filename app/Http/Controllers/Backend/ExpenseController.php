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



}
