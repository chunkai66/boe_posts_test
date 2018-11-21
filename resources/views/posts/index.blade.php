@extends('layouts.master')
@section('title', '最新公告')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>最新公告</h2>
                @auth
                    @if(auth()->user()->admin==1)
                        <a href="{{ route('posts.create') }}" class="btn btn-success">新增公告</a>
                    @endif
                @endauth
            </div>
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>
                            發表日期
                        </th>
                        <th>
                            發表人
                        </th>
                        <th>
                            標題
                        </th>
                        <th>
                            點閱數
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>
                                {{ $post->created_at }}
                            </td>
                            <td>
                                {{ $post->user->name }}
                            </td>
                            <td>
                                <a href="{{ route('posts.show',$post->id) }}">{{ $post->title }}</a>
                            </td>
                            <td>
                                {{ $post->views }}
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
