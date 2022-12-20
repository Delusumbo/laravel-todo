<form action="./todo" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-6">
        <label
            for="company"
            class="inline-block text-lg mb-2"
            >Todo</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="todo" value="{{old('todo')}}"
        />
        @error('todo')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>



    <div class="mb-6">
        <button
            class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
        >
            Add Todo
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
    </div>
</form>

