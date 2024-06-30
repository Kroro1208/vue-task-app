<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('management.departments.index', compact('departments'));
    }

    public function create()
    {
        Session::flash('success-message', '新規人事情報を作成しました');
        return view('management.departments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'director_id' => ['required']
        ]);

        Department::create([
            'user_id' => 1,
            'director_id' => $request->director_id,
            'name' => $request->name,
        ]);

        return to_route('departmentsIndex')->with([
            'message' => '削除に成功しました',
            'alert-type' => 'success'
        ]);
    }
// Requestクラスを設定してvalidationを使用する場合
//     public function store(StoreDepartmentRequest $request)
// {
// バリデーション済みデータを取得
//     $data = $request->validated();

//     Department::create([
//         'user_id' => 1,
//         'director_id' => $data['director_id'],
//         'name' => $data['name'],
//     ]);

//     return to_route('departmentsIndex')->with([
//         'message' => '削除に成功しました',
//         'alert-type' => 'success'
//     ]);
// }


    public function edit($id)
    {
        $department = Department::find($id);
        return view('management.departments.edit', compact('department'));
    }

    public function update(Request $request, $id)
    {
        Department::where('id', $id)->update([ // update()仕様
            'director_id' => $request->director_id,
            "name" => $request->name
        ]);

        return to_route('departmentsIndex');
    }

    // update()を使用しない場合
    // public function update(Request $request, $id)
    // {
    //     $department = Department::find($id);
    //     $department->director_id = $request->director_id;
    //     $department->name = $request->name;
    //     $department->save();

    //     return to_route('departmentsIndex');
    // }

    // Requestクラスを設定してvalidationを使用する場合
    // public function update(UpdateDepartmentRequest $request, $id)
    // {
    //     $data = $request->validated();
    //     Department::where('id', $id)->update($data);

    //     return to_route('departmentsIndex');
    // }



    public function delete($id)
    {
        Department::where('id', $id)->delete();
        return to_route('departmentsIndex')->with([
            'message' => '削除に成功しました',
            'alert-type' => 'info'
        ]);
    }
}
