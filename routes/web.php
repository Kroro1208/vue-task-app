<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'dashboard']);

Route::get('departments/index', [DepartmentController::class, 'index'])->name('departmentsIndex');
Route::get('departments/create', [DepartmentController::class, 'create'])->name('departmentCreate');
Route::post('departments/store', [DepartmentController::class, 'store'])->name('departmentsStore');
Route::get('departments/edit/{id}', [DepartmentController::class, 'edit'])->name('departmentsEdit');
Route::post('departments/update/{id}', [DepartmentController::class, 'update'])->name('departmentsUpdate');
Route::post('departments/delete/{id}', [DepartmentController::class, 'delete'])->name('departmentsDelete');

// まとめて書くパターン
// Route::resource('departments', DepartmentController::class)->names([
//     'index' => 'departmentsIndex',
//     'create' => 'departmentCreate',
//     'store' => 'departmentsStore',
//     'edit' => 'departmentsEdit',
//     'update' => 'departmentsUpdate',
//     'destroy' => 'departmentsDelete',
// ]);


Route::get('users/index', [UserController::class, 'index'])->name('usersIndex');

Route::get('roles/index', function () {
    return view('management.roles.index');
})->name('rolesIndex');

Route::get('permissions/index', function () {
    return view('management.permissions.index');
})->name('permissionsIndex');
