@extends('layouts.master')
@section('title', '最新公告')
@section('content')
    <div class="row">
        <div class="col-12">
            <h2>最新公告</h2>
            <a href="{{ route('posts.create') }}" class="btn btn-success">新增公告</a>
        </div>
    </div>
@endsection
