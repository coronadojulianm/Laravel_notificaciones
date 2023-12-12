<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
    </head>
    <body>
        <header class="p-5 border-b bg-white shadow flex justify-between items-center">
            <h1 class="text-3xl font-black">
                <span class="text-green-600 uppercase">Inam</span>
            </h1>

            {{-- @if (auth()->user())
            <p>Autenticado</p>
            @else
            <p>No autenticado</p>
            @endif --}}

            @auth()
            <nav class=" flex gap-4 items-center">
                <a class="font-bold uppercase text-black" href="#">@<span class="font-bold uppercase">{{ auth()->user()->username}}</span></a>

                <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="font-bold uppercase text-black" >CERRAR SESIÓN</button>
                </form>
          </nav>
            @endauth

            @guest
            <nav class="">
                <a class="text-black hover:text-green-600 font-bold " href="{{route('loginDireccion')}}">LOGIN</a>
                <a class="text-black hover:text-green-600 font-bold " href="{{route('register')}}">CREAR CUENTA</a>
            </nav>
            @endguest

        </header>
        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>
            @yield('contenido')

        </main>
        <footer class="text-center p-5 text-gray-500 font-bold uppercase">
            INAM - Todos los derechos reservados {{date("Y")}}
        </footer>
    </body>
</html>
