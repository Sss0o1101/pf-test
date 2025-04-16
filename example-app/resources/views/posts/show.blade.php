

<x-layout>

    <x-slot:title>
       {{ $post->title }} | My latest App
    </x-slot:title>

    <h1>
        {{ $post->title }}
        {{-- <p class="back-link"><a href="/">Back</a></p> --}}
        {{-- <p class="back-link"><a href="/">Back</a></p> --}}
        <a href="{{ route('posts.edit', $post) }}">Edit</a>
        <form method="post" action="{{ route('posts.destroy', $post) }}" id="delete-form">
            @method('DELETE')
            @csrf
            <button>Delete</button>
        </form>
    </h1>
    <p>{!! nl2br(e($post->body)) !!}</p>  {{-- nl2br は、改行を <br> に変換する --}}


    {{-- <h2>Comments</h2>
    @foreach ($post->comments as $comment)
        <p>{{ $comment->body }}</p>
    @endforeach --}}

    <h2>Comments</h2>
    <ul>
    @forelse ($post->comments as $comment)
        <li>
            {{ $comment->body }}
            <form method="post" action="{{ route('posts.comments.destroy', [$post, $comment]) }}" class="comment-delete-form">  {{-- コメントを削除するためのルーティング --[$post, $comment] は、コメントを削除するためのルーティングの引数 --}}
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        </li>
    @empty
        <li>No comments yet</li>
    @endforelse
    </ul>

    {{-- コメントを追加するためのフォームを設置 --}}
    <h2>Add Comment</h2>
    <form method="post" action="{{ route('posts.comments.store', $post) }}">
        @csrf
        <div>
            <input type="text" name="body">  {{-- 送信したデータを受け取る際には、名前が必要 --}}
            @error('body')
                <p class="error">{{ $message }}</p>  {{-- エラーメッセージを表示 --}}
            @enderror
        </div>
        <div>
            <button>Add</button>
        </div>
    </form>



    <p class="back-link"><a href="{{ route('posts.index')}}">Back</a></p>

    <script>
        'use strict';
        // const deleteForm = document.getElementById('delete-form');
        // deleteForm.addEventListener('submit', function(e) {
        //     e.preventDefault();
        //     if (confirm('Are you sure you want to delete this post?')) {
        //         this.submit();
        //     }
        // });
        const form = document.querySelector('#delete-form');
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            if (confirm('Sure?') === false) {
                return;
            }

            form.submit();
        });

        // const deleteCommentForms = document.querySelectorAll('.delete-comment-form');
        // deleteCommentForms.forEach(function(form) {
        //     form.addEventListener('submit', function(e) {
        //         e.preventDefault();
        //         if (confirm('Sure?') === false) {
        //             return;
        //         }

        //         form.submit();
        //     });
        // });

        const commentForms = document.querySelectorAll('.comment-delete-form');

        commentForms.forEach((commentForm) => {
            commentForm.addEventListener('submit', (e) => {
                e.preventDefault();
                if (confirm('Sure?') === false) {
                    return;
                }

                commentForm.submit();
            });
        });









    </script>

</x-layout>

{{-- <h1>Hello World!!!</h1> --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('style.css') }}">
</head>
<body>

    <div class="container">

        <h1>{{ $post }}</h1>
        <p class="back-link"><a href="{{ route('posts.index')}}">Back</a></p>

    </div>

</body>
</html> --}}
