<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('management.departments.index');
    }

    public function create()
    {
        return view('management.departments.create');
    }

    public function store(Request $request)
    {
        Department::create([
            'user_id' => 1,
            'director_id' => $request->director_id,
            'name' => $request->name,
        ]);

        return to_route('departmentsIndex')->with('success', '登録に成功しました');
    }
}