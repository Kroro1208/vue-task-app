@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h1>Department</h1>
        </div>
        <div class="col-md-6">
            <a href="{{route('departmentCreate')}}" class="btn btn-dark mt-2 float-right">
                新規部門作成
            </a>
        </div>
    </div>
@endsection