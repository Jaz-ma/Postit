<x-layouts.app>
    <div class="flex justify-center">


        <div class="bg-white p-6 round-lg w-4/12">

            <form method="POST" action="{{route('register')}}">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your Name"
                    class="bg-gray-100 border-2 w-full rounded-lg p-6" value="{{old('name')}}">
                    @error('name')
                        <p class="text-red-500 text-sm mt-2">
                            {{$message}}
                        </p>
                    @enderror
                </div>
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
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your Email"
                    class="bg-gray-100 border-2 w-full rounded-lg p-6" value="{{old('email')}}">
                    @error('email')
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
                    <label for="password2" class="sr-only">Repeat Your Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Your Repeated Password"
                    class="bg-gray-100 border-2 w-full rounded-lg p-6" value="{{old('password_confirmation')}}">
                    @error('password_confirmation')
                    <p class="text-red-500 text-sm mt-2">
                        {{$message}}
                    </p>
                @enderror
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded w-full font-medium">Register</button>
                </div>

            </form>
        </div>
    </div>




</x-layouts.app>
