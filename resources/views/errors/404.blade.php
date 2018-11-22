@extends('layouts.master')
@section('title', '404錯誤')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>404 找不到網頁</h2>
                <h4>錯誤提示： {{ $exception->getMessage() }}</h4>
            </div>
        </div>
    </div>
@endsection