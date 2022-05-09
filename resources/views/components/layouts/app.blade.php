<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Postit</title>
</head>
<body class="bg-gray-200">
<nav class="flex justify-between p-6 -white mb-16 border-solid border-b-2 border-black">
    <ul class="flex items-center">
        <li class="p-3">
            <a href="/">home</a>
        </li>
        <li class="p-3">
            <a href="{{route('dashboard')}}">Dashboard</a>
        </li>
        <li class="p-3">
            <a href="{{route('posts')}}">Posts</a>
        </li>
    </ul>
    <ul class="flex items-center">
        @auth
        <li class="p-3">
            <a href="">{{auth()->user()->username}}</a>
        </li>
        <li class="p-3">
            <form method="POST" action="{{route('logout')}}">
            @csrf
                <button>Logout</button>
            </form>
        </li>
        @endauth

        @guest

        <li class="p-3">
            <a href="{{route('login')}}">Login</a>
        </li>
        <li class="p-3">
            <a href="{{route('register')}}">Register</a>
        </li>

        @endguest



    </ul>
</nav>
{{$slot}}
<x-flash-message/>
</body>
</html>
