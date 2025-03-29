



<x-layout>

    <x-slot:title>
       Edit Post | My latest App
    </x-slot:title>

    <h1>Edit post</h1>
    <form method="post" action="{{ route('posts.update', $post) }}">
        @method('patch')  {{-- これを忘れると、CSRF トークンが一致しないというエラーが出る --}}
        @csrf  {{-- これを忘れると、CSRF トークンが一致しないというエラーが出る --}}
        <div>
            <label>
                Title
                <input type="text" name="title" value="{{ old('title' , $post->title) }}">  {{-- old は、前のリクエストの値を保持する --}}
            </label>
            @error('title')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label>
                Body
                <textarea name="body">{{ old('body' , $post->body) }}</textarea>
            </label>
            @error('body')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button>Update</button>
        </div>
    </form>


    <p class="back-link"><a href="{{ route('posts.show', $post) }}">Back</a></p>

</x-layout>
