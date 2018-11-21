<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //用DB的方法
        //$posts = DB::select('select * from posts order by id DESC ');
        /**用eloquent
         * //使用forPage()排頁次，但是views要另外找用哪種方法顯示分頁
         * //$posts = Post::all()->sortByDesc('id')->forPage(2,3);
         * //利用eloguent的Post::orderBy排序
         *
         */
        $posts = Post::orderBy('id', 'DESC')->paginate(3);

        $data = [
            //Key => 值
            'posts' => $posts,
        ];
        return view('posts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $att['title'] = $request->input('title');
        $att['content'] = $request->input('content');
        $att['user_id'] = auth()->user()->id;
        $att['views'] = 0;
        //$att['created_at'] = now();
        //$att['updated_at'] = now();
        /*
        DB::insert('insert into posts (title, content, user_id, views, created_at, updated_at) values (?,?,?,?,?,?)',
            [$att['title'], $att['content'], $att['user_id'], $att['views'], $att['created_at'], $att['updated_at']]);
        */
        Post::create($att);

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //$post = DB::select("select * from posts where id=?", [$id]);
        //$post = Post::where('id','=',$id)->first();

        //dd($post);

        $data = [
            //Key => 值
            'post' => $post,
        ];
        return view('posts.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        //$post = DB::select("select * from posts where id=?", [$id]);
//        dd($post);

        $data = [
            //Key => 值
            'post' => $post,
        ];

        return view('posts.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $att['title'] = $request->input('title');
        $att['content'] = $request->input('content');

        $post->update($att);
        //DB::update('update posts set title=?,content=? where id =?',
        //    [$att['title'], $att['content'], $id]);

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        //DB::delete('delete from posts where id=?', [$id]);
        return redirect()->route('posts.index');
    }
}
