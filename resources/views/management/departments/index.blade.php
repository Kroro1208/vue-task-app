@extends('layouts.master')

@section('content')
    <Departments />
    {{-- <div class="row">
        <div class="col-md-6">
            <h1>Department</h1>
        </div>
        <div class="col-md-6">
            <a href="{{route('departmentCreate')}}" class="btn btn-dark mt-2 float-right">
                新規部門作成
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>名前</th>
                            <th>役職</th>
                            <th>アクション</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departments as $department)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $department->name }}</td>
                                <td>{{ $department->director_id }}</td>
                                <td>
                                    <div class="float-left mx">
                                        <a href="{{ route('departmentsEdit', $department->id) }}" class="btn btn-success">
                                            <i class='fa fa-edit'></i>
                                        </a>
                                    </div>
                                    <div class="float-left mx-1">
                                        <form action="{{route('departmentsDelete', $department->id)}}" method="POST">
                                            @csrf
                                            <button class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}
@endsection