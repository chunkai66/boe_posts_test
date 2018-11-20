@extends('layouts.master')
@section('title', '顯示公告')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{ $post->title }}</h2>
                <a href="{{ route('posts.index') }}" class="btn-secondary btn-sm">返回</a>
                <a href="{{ route('posts.edit',$post->id) }}" class="btn-primary btn-sm">編輯</a>
                <a href="#" class="btn-danger btn-sm" onclick="document.getElementById('delete').submit()">刪除</a>
                <form method="post" action="{{ route('posts.destroy',$post->id) }}" id="delete">
                    @csrf
                    {{ method_field('DELETE') }}
                </form>
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
