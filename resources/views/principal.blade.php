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
                    <a class="font-bold uppercase text-white text-sm border border-white p-2 rounded hover:scale-110 transition-transform duration-300" href={{ route('login') }}>Login</a>
                    <a class="font-bold uppercase text-white text-sm border border-white p-2 rounded hover:scale-110 transition-transform duration-300" href={{ route('register') }}>Crear Cuenta</a>
                </nav>
            </div>
        </header>
        
        <main class='text-white'>
            
            <div class="container mx-auto mt-5">
                <h1 class="text-3xl font-bold">Introducción a GreenGlow</h1>
                <div class="flex flex-col md:flex-row">   
                  <div class="md:w-1/2 md:mr-4 mt-20">
                    <p class="text-xl sm:text-1xl text-justify ">
                        La energía es el motor que impulsa nuestra sociedad moderna.Desde la iluminación de nuestras ciudades hasta la operación de complejas infraestructuras industriales, la electricidad y otras formas de energía son fundamentales para nuestro estilo de vida y bienestar. Sin embargo, a pesar de los avances tecnológicos y el crecimiento económico, la falta de energía sigue siendo un desafío crítico que enfrentamos a nivel global.
                    </p>
                  </div>
                  <div class="md:w-1/2 mt-4 md:mt-0 my-10">
                    <img src="{{ asset('2.jpg') }}" alt="Foto Ilustrativa" class="w-400 h-200 object-cover transition duration-300 transform hover:scale-110 hover:border-white border-4">
                  </div>
                </div>
            </div>            
        </main>

        <section class="bg-gray-800 text-white py-16">
            <div class="container mx-auto flex flex-col md:flex-row items-center">
                <div class="who_img-box mb-8 md:mb-0 md:mr-6">
                    <img src="images/pc.jpg" alt="Newsoft" class="w-full rounded-lg">
                </div>
                <div class="who_deail-box text-right md:w-1/2">
                    <h2 class="text-4xl font-semibold">
                        Who is Newsoft
                    </h2>
                    <p class="mt-4 ">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo nisi ut aliquip ex ea commodo
                    </p>
                    <div class="mt-8">
                        <a href="#" class="text-blue-500 font-semibold">Read More</a>
                    </div>
                </div>
            </div>
        </section>
        

        <section class="bg-black p-10 text-white">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold mb-6">Novedades</h2>
                <div class="grid grid-cols-3 gap-6">
                    <!-- Novedad 1 -->
                    <div class="bg-gray-700 p-4 rounded-lg">
                        <img src="{{ asset('esp.jpg') }}" alt="Novedad 1" class="w-full h-32 mb-2 object-cover">
                        <h3 class="text-xl font-bold mb-1">Esp 32</h3>
                        <p class="text-gray-300 text-sm">Fecha: 5 de Agosto, 2023</p>
                    </div>
                    <!-- Novedad 2 -->
                    <div class="bg-gray-700 p-4 rounded-lg">
                        <img src="{{ asset('sensor.png') }}" alt="Novedad 2" class="w-full h-32 mb-2 object-cover">
                        <h3 class="text-xl font-bold mb-1">Sensor de corriente</h3>
                        <p class="text-gray-300 text-sm">Fecha: 10 de Agosto, 2023</p>
                    </div>
                    <!-- Novedad 3 -->
                    <div class="bg-gray-700 p-4 rounded-lg">
                        <img src="{{ asset('monitor.jpg') }}" alt="Novedad 3" class="w-full h-32 mb-2 object-cover">
                        <h3 class="text-xl font-bold mb-1">Monitor de energia</h3>
                        <p class="text-gray-300 text-sm">Fecha: 15 de Agosto, 2023</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="bg-black p-10 text-white">
            <div class="container mx-auto py-16">
                <h1 class="text-2xl font-bold mb-4 text-center">Integrantes del Proyecto</h1>
        
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4-justify center gap-4 mx-auto">
                    <!-- Tarjeta circular para cada integrante -->
                    <div class="bg-white p-4 rounded-full shadow-lg">
                        <img src="imagen_integrante1.jpg" alt="Integrante 1" class="w-32 h-32 object-cover mx-auto rounded-full mb-2">
                        <h2 class="text-lg font-semibold text-center">Nombre del Integrante 1</h2>
                        <p class="text-gray-600 text-center">Descripción breve del Integrante 1 y su rol en el proyecto.</p>
                    </div>
        
                    <div class="bg-white p-4 rounded-full shadow-lg">
                        <img src="imagen_integrante2.jpg" alt="Integrante 2" class="w-32 h-32 object-cover mx-auto rounded-full mb-2">
                        <h2 class="text-lg font-semibold text-center">Nombre del Integrante 2</h2>
                        <p class="text-gray-600 text-center">Descripción breve del Integrante 2 y su rol en el proyecto.</p>
                    </div>
        
                    <div class="bg-white p-4 rounded-full shadow-lg">
                        <img src="imagen_integrante3.jpg" alt="Integrante 3" class="w-32 h-32 object-cover mx-auto rounded-full mb-2">
                        <h2 class="text-lg font-semibold text-center">Nombre del Integrante 3</h2>
                        <p class="text-gray-600 text-center">Descripción breve del Integrante 3 y su rol en el proyecto.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-black p-10 text-white py-16">
            <div class="container mx-auto">
                <h2 class="text-3xl font-semibold text-center mb-10">
                    Get in touch
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="col-md-6">
                        <div class="col-md-10 offset-md-2">
                            <div class="contact_img-box">
                                <img src="images/form-img.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 form_bg px-0">
                        <div class="col-md-10 px-0">
                            <form action="">
                                <div class="contact_form-container">
                                    <div>
                                        <input type="text" placeholder="Name"
                                            class="border rounded py-2 px-3 w-full">
                                    </div>
                                    <div>
                                        <input type="email" placeholder="Email"
                                            class="border rounded py-2 px-3 w-full mt-2">
                                    </div>
                                    <div>
                                        <input type="text" placeholder="Phone Number"
                                            class="border rounded py-2 px-3 w-full mt-2">
                                    </div>
                                    <div>
                                        <input type="text" placeholder="Message"
                                            class="border rounded py-2 px-3 w-full mt-2">
                                    </div>
                                    <div class="mt-3 flex justify-end">
                                        <button type="submit"
                                            class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">
                                            Send
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-black p-10 text-white py-16">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="col-md-4">
                        <div class="text-2xl font-semibold">
                            <h5>New software</h5>
                        </div>
                        <ul class="mt-4">
                            <li>
                                <a href="#" class="text-blue-500">About Us</a>
                            </li>
                            <li>
                                <a href="#" class="text-blue-500">About services</a>
                            </li>
                            <li>
                                <a href="#" class="text-blue-500">About Departments</a>
                            </li>
                            <li>
                                <a href="#" class="text-blue-500">Services</a>
                            </li>
                            <li>
                                <a href="#" class="text-blue-500">Contact Us</a>
                            </li>
                        </ul>
                        <ul class="mt-4 ml-3 md:ml-5">
                            <li>
                                <a href="#" class="text-blue-500">Loram ipusm</a>
                            </li>
                            <li>
                                <a href="#" class="text-blue-500">Loram ipusm</a>
                            </li>
                            <li>
                                <a href="#" class="text-blue-500">Loram ipusm</a>
                            </li>
                            <li>
                                <a href="#" class="text-blue-500">Loram ipusm</a>
                            </li>
                            <li>
                                <a href="#" class="text-blue-500">Loram ipusm</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="text-2xl font-semibold">
                            <h5>The Services</h5>
                        </div>
                        <ul class="mt-4">
                            <li>
                                <a href="#" class="text-blue-500">About Us</a>
                            </li>
                            <li>
                                <a href="#" class="text-blue-500">About services</a>
                            </li>
                            <li>
                                <a href="#" class="text-blue-500">About Departments</a>
                            </li>
                            <li>
                                <a href="#" class="text-blue-500">Services</a>
                            </li>
                            <li>
                                <a href="#" class="text-blue-500">Contact Us</a>
                            </li>
                        </ul>
                        <ul class="mt-4 ml-3 md:ml-5">
                            <li>
                                <a href="#" class="text-blue-500">Lorem ipsum dolor</a>
                            </li>
                            <li>
                                <a href="#" class="text-blue-500">sit amet, consectetur</a>
                            </li>
                            <li>
                                <a href="#" class="text-blue-500">adipiscing elit,</a>
                            </li>
                            <li>
                                <a href="#" class="text-blue-500">sed do eiusmod</a>
                            </li>
                            <li>
                                <a href="#" class="text-blue-500">tempor incididunt</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="text-2xl font-semibold">
                            <h5>Contact Us</h5>
                        </div>
                        <ul class="mt-4">
                            <li>
                                <a href="#" class="text-blue-500">About Us</a>
                            </li>
                            <li>
                                <a href="#" class="text-blue-500">About services</a>
                            </li>
                            <li>
                                <a href="#" class="text-blue-500">About Departments</a>
                            </li>
                            <li>
                                <a href="#" class="text-blue-500">Services</a>
                            </li>
                            <li>
                                <a href="#" class="text-blue-500">Contact Us</a>
                            </li>
                        </ul>
                        <ul class="mt-4 ml-3 md:ml-5">
                            <li>
                                <a href="#" class="text-blue-500">Lorem ipsum</a>
                            </li>
                            <li>
                                <a href="#" class="text-blue-500">dolor sit amet,</a>
                            </li>
                            <li>
                                <a href="#" class="text-blue-500">consectetur</a>
                            </li>
                            <li>
                                <a href="#" class="text-blue-500">adipiscing</a>
                            </li>
                            <li>
                                <a href="#" class="text-blue-500">elit, sed do eiusmod</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt-8 flex flex-col md:flex-row justify-between items-center">
                    <div class="social-box flex justify-center md:justify-start">
                        <a href="#">
                            <img src="images/fb.png" alt="">
                        </a>
                        <a href="#">
                            <img src="images/twitter.png" alt="">
                        </a>
                        <a href="#">
                            <img src="images/linkedin1.png" alt="">
                        </a>
                        <a href="#">
                            <img src="images/instagram1.png" alt="">
                        </a>
                    </div>
                    <div class="form_container mt-5 md:mt-0">
                        <form action="">
                            <label for="subscribeMail">Newsletter</label>
                            <input
                                type="email"
                                placeholder="Enter Your email"
                                id="subscribeMail"
                                class="border rounded py-2 px-3"
                            />
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <footer class="bg-black p-10 text-white mt-10 text-center font-bold uppercase">
            Ecocid - Todos los derechos reservados {{ now()->year }}            
        </footer>
        
    </body>
</html>
