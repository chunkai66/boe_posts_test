@extends('layouts.master')
@section('title', '顯示公告')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{ $post->title }}</h2>
                <a href="{{ route('posts.index') }}" class="btn-secondary btn-sm">返回</a>
                <a href="{{ route('posts.edit',$post->id) }}" class="btn-primary btn-sm">編輯</a>
                <a href="{{ route('posts.destroy',$post->id) }}" class="btn-danger btn-sm">刪除</a>
            </div>
            <div class="col-12">
                <div class="card-header"></div>
                <div class="card-body">
                    {{ $post->content }}
                </div>
            </div>
        </div>
    </div>
@endsection
