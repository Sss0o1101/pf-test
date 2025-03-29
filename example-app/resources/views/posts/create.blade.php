

<x-layout>

    <x-slot:title>
       Add New Post | My latest App
    </x-slot:title>

    <h1>Add new post</h1>
    <form>
        <div>
            <label>
                Title
                <input type="text">
            </label>
        </div>
        <div>
            <label>
                Body
                <textarea></textarea>
            </label>
        </div>
        <div>
            <button>Add</button>
        </div>
    </form>


    <p class="back-link"><a href="{{ route('posts.index')}}">Back</a></p>

</x-layout>
