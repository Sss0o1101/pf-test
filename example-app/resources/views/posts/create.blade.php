

<x-layout>

    <x-slot:title>
       Add New Post | My latest App
    </x-slot:title>

    <h1>Add new post</h1>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf  {{-- これを忘れると、CSRF トークンが一致しないというエラーが出る --}}
        <div>
            <label>
                Title
                <input type="text" name="title" value="{{ old('title') }}">  {{-- old は、前のリクエストの値を保持する --}}
            </label>
            @error('title')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label>
                Body
                <textarea name="body">{{ old('body') }}</textarea>
            </label>
            @error('body')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button>Add</button>
        </div>
    </form>


    <p class="back-link"><a href="{{ route('posts.index')}}">Back</a></p>

</x-layout>
