<x-layouts.app>

    <div class="flex justify-center">

        <div class="bg-white p-6 round-lg w-8/12">
            <form action="{{route('posts')}}" method="POST">
            @csrf
                <div class="mb-4">
                    <label for="body" class="sr-only">Body</label>
                    <textarea name="body" id="body" cols="30" rows="4" class="bg-ray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Post something!" ></textarea>
                </div>
                @error('body')
                <div class="text-red mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror

                <div>
                    <button type="submit" class="bg-blue-500 px-4 py-2 rounded font-medium text-white">Post</button>
                </div>
            </form>
        </div>
    </div>

</x-layouts.app>
