<x-layouts.app>

    <div class="flex justify-center">

        <div class="bg-white p-6 round-lg w-8/12">
        @auth

            <form action="{{route('posts')}}" method="POST" class="mb-4">
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

        @endauth
            @if ($posts->count())
                @foreach ($posts as $post )

                <div class="mb-4 ">

                    <a href="" class="font-bold">{{$post->user->username}}</a> <span class="text-gray-600 text-sm mx-3">{{$post->created_at->diffForHumans()}}</span>
                    <p class="text-red-500 mb-2">
                        {{$post->body}}
                    </p>

                    <div class="flex items-center">
                         @auth

                        @if (!$post->likedBy(auth()->user()))
                        <form class="mr-1" method="POST" action="{{route('posts.like', $post->id)}}">
                            @csrf
                            <button type="submit" class="text-blue-500">Like</button>
                        </form>
                        @else
                        <form class="mr-1" method="POST" action="{{route('posts.like', $post->id)}}">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="text-blue-500">Unlike</button>
                        </form>
                        @endif
                        @if ($post->ownedBy(auth()->user()))

                         <form method="POST" action="{{route('posts.destroy',$post)}}">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="text-blue-500 mx-4">Delete</button>

                        </form>
                        @endif
                         @endauth

                        <span>
                            {{$post->likes->count()}} {{Str::plural('like',$post->likes->count())}}
                        </span>
                    </div>
                </div>
                @endforeach


            @else
                <p class="text-red font-medium">There are no Posts</p>
            @endif
        </div>
    </div>

</x-layouts.app>
