@extends('layouts.master')

@section('content')
    <h1>新規人事作成</h1>
    <form action="{{ route('departmentsStore') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="director_id">役職</label>
                    <select name="director_id" class="form-control" >
                        <option value="0">割り当てる役職を選んでください</option>
                        <option value="1">技術部長</option>
                        <option value="2">人事部長</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-success float-right">
                        保存
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection