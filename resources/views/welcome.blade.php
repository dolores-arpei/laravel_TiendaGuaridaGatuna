@extends('layouts.public')
@section('title', 'Guarida Gatuna - Tienda para gatos')



@section('content')
    <!-- Hero Section -->
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-primary-500 to-secondary-600 text-white py-16 relative overflow-hidden">
        <!-- Optional Pattern overlay -->
        <div class="absolute inset-0 opacity-10">
            <svg class="h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 100 C 20 0 50 0 100 100 Z" fill="white" />
            </svg>
        </div>

        <div class="container mx-auto px-6 text-center relative z-10">
            <h2 class="text-5xl md:text-7xl font-extrabold leading-tight mb-8 drop-shadow-lg">
                Bienvenida a <span class="text-primary-100">Guarida Gatuna</span>
            </h2>
            <p class="text-xl md:text-3xl text-primary-50 mb-10 max-w-4xl mx-auto font-light leading-relaxed">
                Tu tienda especializada en gatos: <span class="font-semibold">comida</span>, <span
                    class="font-semibold">arena</span>, <span class="font-semibold">rascadores</span> y <span
                    class="font-semibold">juguetes</span> para una vida felina más feliz.
            </p>
            <div class="flex flex-wrap justify-center gap-6">
                <!-- Botón Principal -->
                <a href="{{ route('products.index') }}"
                    class="bg-white text-primary-600 font-bold py-4 px-10 rounded-full shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 hover:scale-105">
                    Ver Productos
                </a>
                <!-- Botón Secundario -->
                <a href="{{ route('products.on-sale') }}"
                    class="bg-transparent border-2 border-white text-white font-bold py-4 px-10 rounded-full hover:bg-white hover:text-secondary-600 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                    Ver Ofertas
                </a>
            </div>
        </div>
    </section>

    <!-- Categorías Destacadas -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <h3 class="text-3xl font-bold mb-12 text-center text-gray-900">
                Todo para tu gato, por categorías
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @forelse($featuredCategories as $category)
                    <x-category-card :category="$category" />
                @empty
                    <div class="col-span-full text-center py-12">
                        <p class="text-gray-500 text-lg">No hay categorías disponibles.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Productos Destacados -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6">
            <h3 class="text-3xl font-bold mb-12 text-center text-gray-900">
                Productos destacados para tu gato
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($featuredProducts as $product)
                    <x-product-card :product="$product" />
                @empty
                    <div class="col-span-full text-center py-12">
                        <p class="text-gray-500 text-lg">No hay productos destacados.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection