@extends('layouts.public')
@section('title', 'Contacto - Guarida Gatuna')

@section('content')
    <div class="container mx-auto px-6 py-8">
        <div class="max-w-2xl mx-auto">
            <div class="mb-8 text-center">
                <h1 class="text-3xl font-bold text-gray-900 mb-4">Contacta con Guarida Gatuna</h1>
                <p class="text-gray-600">Estamos aquí para ayudarte. Envíanos un mensaje.</p>
            </div>


            


            <div class="bg-white rounded-lg shadow-lg p-8">
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nombre Completo</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" 
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" 
                               placeholder="Tu nombre" required>
                        @error('name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Correo Electrónico</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" 
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" 
                               placeholder="nombre@empresa.com" required>
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="subject" class="block mb-2 text-sm font-medium text-gray-900">Asunto</label>
                        <input type="text" id="subject" name="subject" value="{{ old('subject') }}" 
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" 
                               placeholder="¿En qué podemos ayudarte?" required>
                        @error('subject')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>



                    <div class="mb-6">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Mensaje</label>
                        <textarea id="message" name="message" rows="4" 
                                  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500" 
                                  placeholder="Escribe tu mensaje aquí..." required>{{ old('message') }}</textarea>
                        @error('message')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" 
                            class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center transition-colors duration-200">
                        Enviar Mensaje
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
