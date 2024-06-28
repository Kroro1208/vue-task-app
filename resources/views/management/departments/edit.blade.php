@extends('layouts.master')

@section('content')
    <h1>人事情報更新</h1>
    <form action="{{ route('departmentsUpdate', $department->id) }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $department->name }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="director_id">役職</label>
                    <select name="director_id" class="form-control" >
                        <option value="0" selected>割り当てる役職を選んでください</option>
                        <option value="1" @if ($department->director_id=='1') selected @endif>技術部長</option>
                        <option value="2" @if ($department->director_id=='2') selected @endif>人事部長</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-success float-right">
                        更新
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection