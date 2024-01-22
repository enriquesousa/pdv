<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\SupplierController;
use App\Http\Controllers\Backend\SalaryController;
use App\Http\Controllers\Config\AniosController;
use App\Http\Controllers\Backend\AttendanceController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ExpenseController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| Mis Rutas
|--------------------------------------------------------------------------|
*/

Route::get('/admin/logout', [AdminController::class, 'AdminDestroy'])->name('admin.logout');
Route::get('/logout', [AdminController::class, 'AdminLogoutPage'])->name('admin.logout.page');

Route::middleware(['auth'])->group(function () {

    // Admin
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/change/password', [AdminController::class, 'ChangePassword'])->name('change.password');
    Route::post('/update/password', [AdminController::class, 'UpdatePassword'])->name('update.password');

    // Rutas Employees
    Route::controller(EmployeeController::class)->group(function () {
        Route::get('/all/employee', 'EmployeeList')->name('all.employee');
        Route::get('/employee/add', 'EmployeeAdd')->name('employee.add');
        Route::post('/employee/store', 'EmployeeStore')->name('employee.store');
        Route::get('/employee/edit/{id}', 'EmployeeEdit')->name('employee.edit');
        Route::post('/employee/update', 'EmployeeUpdate')->name('employee.update');
        Route::get('/employee/delete/{id}', 'EmployeeDelete')->name('employee.delete');    
    });

    // Rutas Customers
    Route::controller(CustomerController::class)->group(function () {
        Route::get('/all/customer', 'CustomerList')->name('all.customer');
        Route::get('/customer/add', 'CustomerAdd')->name('customer.add');
        Route::post('/customer/store', 'CustomerStore')->name('customer.store');
        Route::get('/customer/edit/{id}', 'CustomerEdit')->name('customer.edit');
        Route::post('/customer/update', 'CustomerUpdate')->name('customer.update');
        Route::get('/customer/delete/{id}', 'CustomerDelete')->name('customer.delete');    
    });

    // Rutas Proveedores
    Route::controller(SupplierController::class)->group(function () {
        Route::get('/all/supplier', 'SupplierList')->name('all.supplier');
        Route::get('/supplier/add', 'SupplierAdd')->name('supplier.add');
        Route::post('/supplier/store', 'SupplierStore')->name('supplier.store');
        Route::get('/supplier/edit/{id}', 'SupplierEdit')->name('supplier.edit');
        Route::post('/supplier/update', 'SupplierUpdate')->name('supplier.update');
        Route::get('/supplier/delete/{id}', 'SupplierDelete')->name('supplier.delete');
        Route::get('/supplier/detail/{id}', 'SupplierDetail')->name('supplier.detail');
    });

    // Rutas Advance Salary
    Route::controller(SalaryController::class)->group(function () {
        Route::get('/add/advance/salary', 'AddAdvanceSalary')->name('add.advance.salary');
        Route::post('/advance/salary/store', 'AdvanceSalaryStore')->name('advance.salary.store');
        Route::get('/all/advance/salary', 'AllAdvanceSalary')->name('all.advance.salary');
        Route::get('/edit/advance/salary/{id}', 'EditAdvanceSalary')->name('edit.advance.salary');
        Route::post('/advance/salary/update', 'AdvanceSalaryUpdate')->name('advance.salary.update');
        Route::get('/delete/advance/salary/{id}', 'AdvanceSalaryDelete')->name('delete.advance.salary');  
    });

    // Rutas Pay Salary
    Route::controller(SalaryController::class)->group(function () {
	    Route::get('/pay/salary', 'PaySalary')->name('pay.salary');
        Route::get('/pay/salary/other/month/{month}', 'PaySalaryOtherMonth')->name('pay.salary.other.month');
	    Route::get('/pay/now/salary/{id}/{month}/{year}/{avance_salario}/{SeDebe}/{advance_id}', 'PayNowSalary')->name('pay.now.salary');
        Route::post('/employee/salary/store', 'EmployeeSalaryStore')->name('employee.salary.store');
        Route::get('/month/salary', 'MonthSalary')->name('month.salary');
        Route::get('/history/salary/{id}', 'HistorySalary')->name('history.salary');
        Route::get('/history/detail/salary/{id}', 'HistoryDetailSalary')->name('history.detail.salary');
    });

    // Configuraciones Datos (Años) 
    Route::controller(AniosController::class)->group(function () {
        Route::get('/all/anios', 'AniosList')->name('all.anios');
        Route::get('/anio/add', 'AnioAdd')->name('anio.add');
        Route::post('/anio/store', 'AnioStore')->name('anio.store');
        Route::get('/anio/edit/{id}', 'AnioEdit')->name('anio.edit');
        Route::post('/anio/update', 'AnioUpdate')->name('anio.update');
        Route::get('/anio/delete/{id}', 'AnioDelete')->name('anio.delete');    
    });

    // Control de Asistencias
    Route::controller(AttendanceController::class)->group(function () {
	    Route::get('/list/employee/attendances', 'ListEmployeeAttendances')->name('employee.attendances.list');
	    Route::get('/add/employee/attendances', 'AddEmployeeAttendances')->name('add.employee.attendance');
	    Route::post('/store/employee/attendances', 'StoreEmployeeAttendances')->name('employee.attendances.store');
        Route::get('/edit/employee/attendances/{date}', 'EditEmployeeAttendances')->name('edit.employee.attendance');
        Route::get('/view/employee/attendances/{date}', 'ViewEmployeeAttendances')->name('view.employee.attendance');
    });

    // Categorías
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/list/category', 'ListCategory')->name('list.category');
        Route::post('/store/category', 'StoreCategory')->name('store.category');
        Route::get('/edit/category/{id}', 'EditCategory')->name('edit.category');
        Route::post('/update/category', 'UpdateCategory')->name('update.category');
        Route::get('/delete/category/{id}', 'DeleteCategory')->name('delete.category');
    });

    // Productos
    Route::controller(ProductController::class)->group(function () {
        Route::get('/list/product', 'ListProduct')->name('list.product');
        Route::get('/add/product', 'AddProduct')->name('add.product');
        Route::post('/store/product', 'StoreProduct')->name('store.product');
        Route::get('/edit/product/{id}', 'EditProduct')->name('edit.product');
        Route::post('/update/product', 'UpdateProduct')->name('update.product');
        Route::get('/delete/product/{id}', 'DeleteProduct')->name('delete.product');

        Route::get('/barcode/product/{id}', 'BarcodeProduct')->name('barcode.product');

        Route::get('/import/product', 'ImportProduct')->name('import.product');
        Route::get('/export/product', 'ExportProduct')->name('export.product');
        Route::post('/import/file/product', 'ImportFileProduct')->name('import.file.product');
    });

    // Expenses
    Route::controller(ExpenseController::class)->group(function () {
        Route::get('/add/expense', 'AddExpense')->name('add.expense');
        Route::post('/store/expense', 'StoreExpense')->name('store.expense');
    });


    
});



















