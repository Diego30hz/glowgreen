<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EcoCID @yield('titulo')</title>
        @vite('resources/css/app.css')
        
        
    </head>
    <body class="bg-slate-700 font-mono">
        <header class="bg-gray-800 p-5">
            <div class="container mx-auto flex justify-between items-center">
                <div class="flex items-center">
                    <i class="fas">
                        <img src="{{ asset('6.png') }}" alt="Logo de la Empresa" class="w-8 h-8 mr-2">
                    </i>
                    <h1 class="text-3xl font-black text-white">EcoCID</h1>
                </div>                
                <nav class="flex gap-4 mr-96">
                    <a class="font-bold uppercase text-white text-sm border border-white p-2 rounded hover:scale-110 transition-transform duration-300" href="#">Producto</a>
                    <a class="font-bold uppercase text-white text-sm border border-white p-2 rounded hover:scale-110 transition-transform duration-300" href="#">Nosotros</a>
                    <a class="font-bold uppercase text-white text-sm border border-white p-2 rounded hover:scale-110 transition-transform duration-300" href="#">Contactos</a>
                    <a class="font-bold uppercase text-white text-sm border border-white p-2 rounded hover:scale-110 transition-transform duration-300" href="#">Noticias</a>
                </nav>
                <nav class="flex gap-4">
                    <a class="font-bold uppercase text-white text-sm border border-white p-2 rounded hover:scale-110 transition-transform duration-300" href="#">Login</a>
                    <a class="font-bold uppercase text-white text-sm border border-white p-2 rounded hover:scale-110 transition-transform duration-300" href="#">Crear Cuenta</a>
                </nav>
            </div>
        </header>
        
        <main class="container mx-auto mt-40 text-white">
            <div class="md:flex md:justify-center">
                <div class="text-left md:w-1/2 md:ml-10 mt-5 md:mt-0">
                    <h2 class="text-4xl font-bold uppercase text-white text-center mb-8">
                    @yield('titulo')
                    </h2>
                    <p class="text-xl sm:text-1xl">
                    @yield('contenido')   
                    </p>
                </div>
            </div>            
        </main>
        <!-- ... Resto del contenido ... -->
    </body>
    <footer class="bg-black p-10 text-white mt-10 text-center font-bold uppercase">
        Ecocid - Todos los derechos reservados {{ now()->year }}            
    </footer>
</html>
