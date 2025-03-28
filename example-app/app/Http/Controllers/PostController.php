<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    // private $posts = [
    //     'Title 0',
    //     'Title 1',
    //     'Title 2',
    // ];

    public function index() {
        // $posts = Post::all();
        // $posts = Post::orderBy('created_at', 'desc')->get();
        $posts = Post::latest()->get();  //created_at でソートして、降順で取得する
        return view('index')->with(['posts' => $posts]);
    }

    public function show(Post $post) {   //Implicit Binding は、URL の一部をパラメータ化している

        // $posts = [
        //     'Title 0',
        //     'Title 1',
        //     'Title 2',
        // ];

        // $post = Post::find($id);
        //$post = Post::findOrFail($id);                       //findOrFail は、見つからない場合は 404 エラーを返す
        return view('posts.show')->with(['post' => $post]);  //posts フォルダの show ビューを表示する

    }
}
