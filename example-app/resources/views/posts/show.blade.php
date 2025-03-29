

<x-layout>

    <x-slot:title>
       {{ $post->title }} | My latest App
    </x-slot:title>

    <h1>{{ $post->title }}</h1>
        {{-- <p class="back-link"><a href="/">Back</a></p> --}}
        {{-- <p class="back-link"><a href="/">Back</a></p> --}}
        <a href="{{ route('posts.edit', $post) }}">Edit</a>
        <form action="{{ route('posts.destroy', $post) }}" method="post">
            @method('delete')
            @csrf
            <button>Delete</button>
        </form>
    <p>{!! nl2br(e($post->body)) !!}</p>


    <p class="back-link"><a href="{{ route('posts.index')}}">Back</a></p>

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
