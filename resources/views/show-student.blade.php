@vite('resources/css/app.css')

@extends ('plantilla')
@section('titulo')
    Estudiante
@endSection
@section('header')
    <h1>Vista de estudiante</h1>
@endSection
@section('contenido')
<!-- component -->
<div class="relative flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md mt-5 mb-10">
    <div class="relative mx-4 mt-4 h-90 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700 shadow-lg">
      <img src="{{ asset('img/usuario.jpg') }}" alt="profile-picture" />
    </div>
    <div class="p-6 text-center">
      <h4 class="mb-2 block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
        {{$student->name_student}}
      </h4>
      <p class="block bg-gradient-to-tr from-pink-600 to-pink-400 bg-clip-text font-sans text-base font-medium leading-relaxed text-transparent antialiased">
        {{$student->comments}}
      </p>
    </div>
    <div class="flex justify-center gap-7 p-6 pt-2">
      <i class="fab fa-facebook" aria-hidden="true"></i>
      <i class="fab fa-twitter" aria-hidden="true"></i>
      <i class="fab fa-instagram" aria-hidden="true"></i>
    </div>
  </div>
  {{-- <div class="w-full pt-5 px-4 mb-8 mx-auto ">
      <div class="text-sm text-gray-700 py-1">
          Made with <a class="text-gray-700 font-semibold" href="https://www.material-tailwind.com/docs/html/card?ref=tailwindcomponents" target="_blank">Material Tailwind</a> by <a href="https://www.creative-tim.com?ref=tailwindcomponents" class="text-gray-700 font-semibold" target="_blank"> Creative Tim</a>.
      </div>
  </div> --}}
  
  <!-- stylesheet -->
  <link
    rel="stylesheet"
    href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css"
  />
  
   <!-- Font Awesome Link -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
    crossorigin="anonymous"
  />
@endSection
@section('footer')
    @Derechos reservados
@endSection
