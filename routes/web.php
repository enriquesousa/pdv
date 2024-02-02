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
use App\Http\Controllers\Backend\PosController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\RoleController;


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
})->name('home');

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
Route::get('/page/ayuda', [AdminController::class, 'PageAyuda'])->name('page.ayuda');

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
        Route::get('/today/expense', 'TodayExpense')->name('today.expense');
        Route::get('/edit/expense/{id}', 'EditExpense')->name('edit.expense');
        Route::post('/update/expense', 'UpdateExpense')->name('update.expense');
        Route::get('/month/expense', 'MonthExpense')->name('month.expense');
        Route::get('/year/expense', 'YearExpense')->name('year.expense');
    });

    // POS
    Route::controller(PosController::class)->group(function () {
        Route::get('/pos', 'Pos')->name('pos');
        Route::post('/add-cart','AddCart');
        Route::get('/all/items/en/carrito', 'AllItem');
        Route::post('/cart-update/{rowId}', 'CartUpdate');
        Route::get('/cart-remove/{rowId}', 'CartRemove');
        Route::post('/create-invoice', 'CreateInvoice');
    });

    // Orden
    Route::controller(OrderController::class)->group(function () {
        Route::post('/final/invoice', 'FinalInvoice')->name('final.invoice');
        Route::get('/pending/order', 'PendingOrder')->name('pending.order');
        Route::get('/detail/order/{order_id}', 'DetailOrder')->name('detail.order');
        Route::post('/order/status/update', 'OrderStatusUpdate')->name('order.status.update');
        Route::get('/complete/order', 'CompleteOrder')->name('complete.order');
        Route::get('/stock/manage', 'StockManage')->name('stock.manage');
        Route::get('/order/invoice-download/{order_id}', 'OrderInvoiceDownload');
    });


    // Permisos
    Route::controller(RoleController::class)->group(function () {
    Route::get('/all/permission', 'AllPermission')->name('all.permission');
        Route::get('/add/permission', 'AddPermission')->name('add.permission');
        Route::post('/store/permission', 'StorePermission')->name('store.permission');
        Route::get('/edit/permission/{id}', 'EditPermission')->name('edit.permission');
        Route::post('/update/permission', 'UpdatePermission')->name('update.permission');
        Route::get('/delete/permission/{id}', 'DeletePermission')->name('delete.permission');
    });

    // Roles
    Route::controller(RoleController::class)->group(function () {
        Route::get('/all/roles', 'AllRoles')->name('all.roles');
        Route::get('/add/role', 'AddRole')->name('add.role');
        Route::post('/store/role', 'StoreRole')->name('store.role');
        Route::get('/edit/role/{id}', 'EditRole')->name('edit.role');
        Route::post('/update/role', 'UpdateRole')->name('update.role');
        Route::get('/delete/role/{id}', 'DeleteRole')->name('delete.role');
    });

    // Asignar Rol en Permisos
    Route::controller(RoleController::class)->group(function () {
        Route::get('/add/roles/permission', 'AddRolesPermission')->name('add.roles.permission');
        Route::post('/store/roles/permission', 'StoreRolesPermission')->name('store.roles.permission');
        Route::get('/all/roles/permission', 'AllRolesPermission')->name('all.roles.permission');
        Route::get('/edit/admin/roles/{id}', 'EditAdminRoles')->name('edit.admin.roles');
        Route::post('/role/permission/update/{id}','RolePermissionUpdate')->name('role.permission.update');
        Route::get('/delete/admin/roles/{id}', 'DeleteAdminRoles')->name('delete.admin.roles');
    });

    // Admin Configuración de Usuarios
    Route::controller(AdminController::class)->group(function () {
        Route::get('/all/admin', 'AllAdmin')->name('all.admin');
        Route::get('/add/admin', 'AddAdmin')->name('add.admin');
        Route::post('/store/admin', 'StoreAdmin')->name('store.admin');
        Route::get('/edit/admin/{id}', 'EditAdmin')->name('edit.admin');
        Route::post('/update/admin', 'UpdateAdmin')->name('update.admin');
        Route::get('/delete/admin/{id}', 'DeleteAdmin')->name('delete.admin');
    });

    
});



















