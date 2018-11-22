@extends('layouts.master')
@section('title', '405錯誤')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>405 沒有授權</h2>
                <h4>錯誤提示： {{ $exception->getMessage() }}</h4>
            </div>
        </div>
    </div>
@endsection