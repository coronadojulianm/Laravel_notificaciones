@extends('layouts.app')

@section('titulo')
INICIA SESION EN <span class="text-green-600 uppercase">Inam</span>
@endsection

@section('contenido')
<div class="md:flex md:justify-center items-center">
        <div class="md:w-6/12 mr-10 flex justify-center items-center">
            <img src="{{ asset('img/register.png') }}" alt="Imagen de registro" class="w-300">
        </div>
        <div class="md:w-4/12 bg-green-600 p-6 rounded-lg shadow-xl h-full">
            <form action="{{ route ('login')}}" method="post" novalidate>
                @csrf
                @if (session('mensaje'))
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ session('mensaje')}}</p>
                @endif
            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-black font-bold">Email</label>
                <input type="text" id="email" name="email" placeholder="Ingrese su email" class="border p-3 w-full rounded-lg">
                @error('email')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center font-bold">¡¡Error!! Debe ingresar su correo electrónico</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-black  font-bold">Contraseña</label>
                <input type="text" id="password" name="password" placeholder="Ingrese su contraseña" class="border p-3 w-full rounded-lg">
                @error('password')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center font-bold">¡¡Error!! Debe ingresar su contraseña</p>
                @enderror
            </div>
            <input type="submit" value="Iniciar Sesión" class="bg-blue-700 hover:bg-blue-600 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
        </form>
        </div>
    </div>
@endsection
