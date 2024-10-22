<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('name')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex flex-col">

    @include('partials.navbar') 

    <header class="bg-white shadow">
        @yield('nav')
    </header>

    <main class="container mx-auto mt-4">
        @yield('contain')
    </main>

    <footer class="bg-white p-4 mt-8">
        @yield('footer')
    </footer>

</body>
</html>
