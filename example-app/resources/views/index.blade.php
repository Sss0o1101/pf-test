

<x-layout>

    <x-slot:title>
        My latest App
    </x-slot:title>

    <h1>
        Posts
        <a href="{{ route('posts.create') }}">Add New Post</a>
    </h1>
        <ul>
            {{-- @foreach ($posts as $post)
                <li>{{ $post }}</li>
            @endforeach --}}

            @forelse ($posts as $post)
                <li>
                    {{-- <a href="/posts/{{$index}}">{{ $post }}</a> --}}
                    {{-- <a href="{{ route('posts.show', ['id' => $index]) }}">{{ $post }}</a> --}}
                    <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                </li>
            @empty
                <li>No posts found!</li>
            @endforelse

        </ul>

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
        <h1>Posts</h1>
        <ul>


            @forelse ($posts as $index => $post)
                <li>
                    <a href="{{ route('posts.show', $index) }}">{{ $post }}</a>
                </li>
            @empty
                <li>No posts found!</li>
            @endforelse

        </ul>
    </div>

</body>
</html> --}}
