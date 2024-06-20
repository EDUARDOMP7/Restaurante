<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <!-- Asumiendo que tienes archivos CSS personalizados compilados con Vite -->
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans antialiased">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-gradient-to-r from-blue-500 to-indigo-600 shadow-md">
            <div class="container mx-auto px-4 py-4 flex justify-between items-center">
                <a class="navbar-brand text-2xl font-bold text-white hover:text-gray-200" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler text-white focus:outline-none md:hidden" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto flex space-x-4">
                        <!-- Add your left side navbar items here -->
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto flex space-x-4 items-center">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white hover:text-gray-200"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white hover:text-gray-200"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <ul class="nav flex space-x-4 items-center">
                                <li class="nav-item">
                                    <a class="nav-link text-white hover:text-gray-200"
                                        href="{{ route('clients.index') }}">Clientes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white hover:text-gray-200"
                                        href="{{ route('orders.index') }}">Pedidos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white hover:text-gray-200"
                                        href="{{ route('table.index') }}">Mesas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white hover:text-gray-200"
                                        href="{{ route('reservation.index') }}">Reservaciones</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white hover:text-gray-200"
                                        href="{{ route('payment.index') }}">Pagos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white hover:text-gray-200"
                                        href="{{ route('employee.index') }}">Empleados</a>
                                </li>
                            </ul>

                            <li class="nav-item dropdown relative">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white hover:text-gray-200"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end absolute right-0 mt-2 w-48 bg-white border rounded-md shadow-lg"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item block px-4 py-2 text-gray-800 hover:bg-gray-100"
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-6 container mx-auto px-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <!-- Bootstrap JS (Popper.js is included if needed) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"
        integrity="sha384-oBqDVmMz4fnFO9gyb32Yv2OM0zYWlC8wxwBO7+8m9F3O8VGZE1ZDD1gIjDtC6JXu" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9c+Kuh6fSa1q0GnFU6I5G2yr4j5jvT+3o5ZtqQ5jRY5iF5YYdH9/5N2" crossorigin="anonymous">
    </script>

    <!-- Your custom scripts or Vite compiled JS -->
    @vite(['resources/js/app.js'])
</body>

</html>
