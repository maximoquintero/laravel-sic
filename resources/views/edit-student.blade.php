@vite('resources/css/app.css')

@extends ('plantilla')
@section('titulo')
    Editar estudiante
@endSection
@section('header')
    <h1>Editar</h1>
@endSection
@section('contenido')
<div class="m-10 py-10 px-24 bg-blue-100 border rounded-lg">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-24 w-auto rounded-full" src="data:image/jpeg;base64,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" alt="Your Company" />
    </div>
    <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="{{route('students.update',$student->id)}}" method="post">
        @csrf
        @method('put')
        <div class="">
              <label for="name_student" class="block text-sm font-medium leading-6 text-gray-900">Nombre estudiante</label>
              <div class="mt-2">
                <input type="text" name="name_student" value='{{$student->name_student}}' class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
              </div>
                @error('name_student')
                <div>{{$message}}</div>
                @enderror
            </div>
            <div>
              <div class="flex items-center justify-between">
                <label for="lastname_student" class="block text-sm font-medium leading-6 text-gray-900">Apellido</label>
              </div>
              <div class="mt-2">
                <input type="text" name="lastname_student" value='{{$student->lastname_student}}' class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
              </div>
                @error('lastname_student')
                <div>{{$message}}</div>
                @enderror
            </div>
            <div>
                <div class="flex items-center justify-between">
                  <label for="id_student" class="block text-sm font-medium leading-6 text-gray-900">Matricula</label>
                </div>
                <div class="mt-2">
                  <input type="number" name="id_student" value='{{$student->id_student}}' class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                </div>
                  @error('id_student')
                  <div>{{$message}}</div>
                  @enderror
            </div>
            <div>
                <div class="flex items-center justify-between">
                  <label for="birthday" class="block text-sm font-medium leading-6 text-gray-900">Cumpleaños</label>
                </div>
                <div class="mt-2">
                  <input type="date" name="birthday" value='{{$student->birthday}}' class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                </div>
                  @error('birthday')
                  <div>{{$message}}</div>
                  @enderror
            </div>
            <div>
                <div class="flex items-center justify-between">
                  <label for="comments" class="block text-sm font-medium leading-6 text-gray-900">Comentarios</label>
                </div>
                <div class="mt-2">
                  <input type="text" name="comments" value='{{$student->comments}}' class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                </div>
                  @error('comments')
                  <div>{{$message}}</div>
                  @enderror
            </div>
            <div class="">
              <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">editar</button>
            </div>
          </form>
          <div class="fixed left-5 top-20">
            <button class="bg-blue-900 text-white p-5 rounded-xl">
                <a class="" href="{{ route('students.index') }}">Volver</a>
            </button>
        </div>
          @endSection
          @section('footer')
    @Derechos reservados
@endSection