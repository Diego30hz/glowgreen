@extends('layouts.app')

@section('contenido')
<div class="min-h-screen flex flex-col md:flex-row">
    <!-- Contenedor del formulario a la izquierda -->
    <div class="w-full md:w-1/2 bg-gray-800 text-white p-8">
        <div class="w-full max-w-md">
            <h2 class="text-2xl mb-4">{{ __('Inicio de Sesion') }}</h2>
            <form action="{{ route('login') }}" method="POST" novalidate>
                @csrf
                @if (session('mensaje'))
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ session('mensaje') }}</p>
                @endif
                <div class="mb-4">
                    <label for="email" class="block text-sm uppercase font-bold mb-2">
                        Email
                    </label>
                    <input 
                        id="email" 
                        name="email"
                        type="email"
                        placeholder="Tu correo electronico"
                        value="{{ old('email') }}"  
                        class="border p-1 w-full rounded-lg text-black @error('email') border-red-500 
                        @enderror" 
                    />
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm uppercase font-bold mb-2">
                        Contraseña
                    </label>
                    <input 
                        id="password" 
                        name="password"
                        type="password"
                        placeholder="Tu contraseña"
                        value="{{ old('password') }}"  
                        class="border p-1 w-full rounded-lg text-black @error('password') border-red-500 
                        @enderror" 
                    />
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit" class="font-bold py-3 px-4 border border-white p-2 rounded-full hover:scale-110 transition-transform duration-300">
                        {{ __('Iniciar sesion') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Imagen a la derecha -->
    <div class="w-800 md:w-1/2 bg-cover bg-center" style="background-image: url('{{ asset('register.png') }}');"></div>
</div>
@endsection