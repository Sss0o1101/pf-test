

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
    <p>{!! nl2br(e($post->body)) !!}</p>


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
