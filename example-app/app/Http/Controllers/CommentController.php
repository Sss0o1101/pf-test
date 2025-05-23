<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    /**
     * コメントを保存
     */
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'body' => 'required',
        ]);

        $comment = new Comment();
        $comment->body = $request->body;
        $comment->post_id = $post->id;
        $comment->save();

        return redirect()->route('posts.show', $post);
    }


    /**
     * コメントを削除
     */
    public function destroy(Post $post, Comment $comment) //implicity model binding で、Post $post, Comment $comment を受け取る
    {
        $comment->delete();
        return redirect()->route('posts.show', $post);
    }









}
