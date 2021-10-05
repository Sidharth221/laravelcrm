<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
//use App\Http\Controllers\DashboardCompanyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes(['register' => false]);

Route::middleware(['auth'])->group(function(){

Route::get('/', function () {
    return view('home');
});





Route::get('/dashboardCompany', [CompanyController::class, 'index'])->name ('company_index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('Dcompany','/CompanyForm');
Route::post('Dcompany', [CompanyController::class, 'store']);

Route::get('/company/edit/{id}', [CompanyController::class, 'edit'])->name ('company_edit');
Route::put('/company/edit/{id}', [CompanyController::class, 'update'])->name ('company_update');
Route::get('/company/delete/{id}', [CompanyController::class, 'destroy'])->name ('company_destroy');

Route::get('/dashboardEmployee', [EmployeeController::class, 'index'])->name ('employee_index');
Route::view('Demployee','/EmployeeForm');
Route::post('Demployee', [EmployeeController::class, 'store']);

Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name ('employee_edit');
Route::put('/employee/edit/{id}', [EmployeeController::class, 'update'])->name ('employee_update');
Route::get('/employee/delete/{id}', [EmployeeController::class, 'destroy'])->name ('employee_destroy');

});

//Route::get('/dashboard', [DashboardCompanyController::class, 'show_company'])->name('dashboard');
