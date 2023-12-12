@extends('layouts.app')

@section('titulo')
REGISTRO <span class="text-green-600 uppercase">Inam</span>
@endsection

@section('contenido')
<div class="md:flex md:justify-center">
        <div class="md:w-6/12 mr-10 flex justify-center items-center">
            <img src="{{ asset('img/register.PNG') }}" alt="Imagen de registro" class="w-300 rounded-2xl">
        </div>
        <div class="md:w-4/12 bg-green-600 p-6 rounded-lg shadow-xl">
            <form action="" method="post">
                @csrf
            <div class="mb-5">
                <label for="name" class="mb-2 block uppercase font-bold">Nombre</label>
                <input type="text" id="name" name="name" placeholder="Ingrese su nombre" class="border p-3 w-full rounded-lg">
                @error('name')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center ">¡¡Error!! Debes ingresar tu nombre</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="username" class="mb-2 block uppercase font-bold">Nombre de usuario</label>
                <input type="text" id="username" name="username" placeholder="Ingrese nombre de usuario" class="border p-3 w-full rounded-lg">
                @error('username')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center ">¡¡Error!! Debe ingresar su nombre de usuario</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase font-bold">Email</label>
                <input type="text" id="email" name="email" placeholder="Ingrese su email" class="border p-3 w-full rounded-lg">
                @error('email')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center ">¡¡Error!! Debe ingresar su correo electrónico</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase font-bold">Contraseña</label>
                <input type="text" id="password" name="password" placeholder="Ingrese su contraseña" class="border p-3 w-full rounded-lg">
                @error('password')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center ">¡¡Error!! Debe ingresar su contraseña</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="passwordconfirmation" class="mb-2 block uppercase font-bold">Cofirmar contraseña</label>
                <input type="text" id="passwordconfirmation" name="passwordconfirmation" placeholder="Confirme su contraseña" class="border p-3 w-full rounded-lg">
                @error('passwordconfirmation')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center ">¡¡Error!! Debe ingresar su contraseña</p>
                @enderror
            </div>
            <input type="submit" value="Crear Cuenta" class="bg-blue-700 hover:bg-blue-600 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
        </form>
        </div>
    </div>
@endsection
