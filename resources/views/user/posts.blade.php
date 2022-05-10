<x-layouts.app>

<div class="flex justify-center">

    <div class="w-8/12">
        <div class="p-6">
            <h1 class="text-2xl font-medium mb-1">
                {{$user->username}}
            </h1>
            <p>posted {{$posts->count()}} {{Str::plural('post',$posts->count())}} and recieved {{$user->recievedLikes->count()}} {{Str::plural('like',$user->recievedLikes->count())}} </p>
        </div>
        <div class="bg-white p-6 round-lg w-8/12">
        @if ($posts->count())
                @foreach ($posts as $post )

            <x-post :post="$post"/>
               @endforeach


            @else
                <p class="text-red font-medium">There are no Posts</p>
            @endif

        </div>

     </div>
</div>

</x-layouts.app>

