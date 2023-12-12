@extends('layouts.app')

@section('titulo')
Bienvenidos a <span class="text-green-600 uppercase">Inam</span>
@endsection

@section('contenido')
<div class="overflow-x-auto">
  <table class="min-w-full table-auto">
    <thead>
      <tr>
        <th class="px-4 py-2 bg-green-600 text-white">ID</th>
        <th class="px-4 py-2 bg-green-600 text-white">Name</th>
        <th class="px-4 py-2 bg-green-600 text-white">Username</th>
        <th class="px-4 py-2 bg-green-600 text-white">Email</th>
        <th class="px-4 py-2 bg-green-600 text-white">Acciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
      <tr>
        <td class="border-white  border-b px-4 py-2 text-center bg-gray-100  ">{{ $user->id }}</td>
        <td class="border-white  border-b px-4 py-2 text-center bg-gray-100  ">{{ $user->name }}</td>
        <td class="border-white  border-b px-4 py-2 text-center bg-gray-100  ">{{ $user->username }}</td>
        <td class="border-white  border-b px-4 py-2 text-center bg-gray-100  ">{{ $user->email }}</td>
        <td class="border-white  border-b px-4 py-2 text-center bg-gray-100  ">
        <button value="" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
         Eliminar
        </button>

        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
        Actualizar
        </button>
        </td>
      </tr>
      @endforeach
      <!-- Puedes agregar más filas con datos aquí -->
    </tbody>
  </table>
</div>
@endsection
