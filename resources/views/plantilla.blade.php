@vite('resources/css/app.css')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
</head>
<body class="">
    <header class="py-5 bg-blue-800">
        <b class="text-center text-3xl text-white">
        @yield('header')
        </b>
    </header>
    <main class="flex justify-center">
        @yield('contenido')
    </main>
    <footer class="fixed bottom-0 pl-10 py-1 bg-gray-300 w-full">
        @yield('footer')
    </footer>
</body>
</html>