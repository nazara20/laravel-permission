<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\PresentController;
use App\Http\Controllers\Admin\SalaryController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['role:super admin|karyawan|hr|keuangan|direktur']], function () {
    Route::get('admin/dashboard', DashboardController::class)->name('admin.dashboard');
    Route::get('admin/employee', [EmployeeController::class, 'index'])->name('admin.employee')->can('show employee');
    Route::get('admin/present', [PresentController::class, 'index'])->name('admin.present')->can('show present');
    Route::get('admin/salary', [SalaryController::class, 'index'])->name('admin.salary')->can('show salary');
});
