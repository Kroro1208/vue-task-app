<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('departments/index', function () {
    return view('management.departments.index');
})->name('departmentsIndex');

Route::get('users/index', function () {
    return view('management.users.index');
})->name('usersIndex');

Route::get('roles/index', function () {
    return view('management.roles.index');
})->name('rolesIndex');

Route::get('permissions/index', function () {
    return view('management.permissions.index');
})->name('permissionsIndex');
