<x-layouts.app>

    <div class="flex justify-center">

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

</x-layouts.app>

