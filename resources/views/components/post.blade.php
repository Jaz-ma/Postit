
    @props(['post'=>$post])

    <div class="mb-4 ">

                    <a href="{{route('users.posts',$post->user)}}" class="font-bold">{{$post->user->username}}</a> <span class="text-gray-600 text-sm mx-3">{{$post->created_at->diffForHumans()}}</span>
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
                        @can('delete',$post)
                         <form method="POST" action="{{route('posts.destroy',$post)}}">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="text-blue-500 mx-4">Delete</button>

                        </form>
                      @endcan
                         @endauth

                        <span>
                            {{$post->likes->count()}} {{Str::plural('like',$post->likes->count())}}
                        </span>
                    </div>
    </div>

