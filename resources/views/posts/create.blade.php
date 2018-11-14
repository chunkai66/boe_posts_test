@extends('layouts.master')
@section('title', '新增公告')
@section('content')
    <div class="row">
        <div class="col-12">
            <h2>新增公告</h2>
            <a href="{{ route('posts.create') }}" class="">新增公告</a>
        </div>
    </div>
@endsection
