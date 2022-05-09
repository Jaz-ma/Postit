<x-layouts.app>
    <div class="flex justify-center">


        <div class="bg-white p-6 round-lg w-4/12">

            <form method="POST" action="{{route('login')}}">
                @csrf

                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" placeholder="Your Username"
                    class="bg-gray-100 border-2 w-full rounded-lg p-6" value="{{old('username')}}">
                    @error('username')
                    <p class="text-red-500 text-sm mt-2">
                        {{$message}}
                    </p>
                @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Your Password"
                    class="bg-gray-100 border-2 w-full rounded-lg p-6" value="{{old('password')}}">
                    @error('password')
                    <p class="text-red-500 text-sm mt-2">
                        {{$message}}
                    </p>
                @enderror
                </div>

                <div class="mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember">Remember me</label>
                    </div>
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded w-full font-medium">Login</button>
                </div>

            </form>
        </div>
    </div>




</x-layouts.app>
