@extends('layouts.public')
@section('title', ($onlyOnSale ?? false) ? 'Productos en Oferta - Guarida Gatuna' : 'Todos los Productos - Guarida Gatuna')

@push('styles')
    <style>
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
        }
    </style>
@endpush

@section('content')
    <div class="container mx-auto px-6 py-8">

        @if(($onlyOnSale ?? false) === true)
            <div class="bg-gradient-to-r from-primary-600 to-secondary-600 text-white rounded-lg shadow p-6 mb-6">
                <h1 class="text-3xl font-bold">🏷️ ¡Productos en Oferta!</h1>
            </div>

            <p class="text-gray-700 mb-6 font-semibold">
                Mostrando {{ $countOnSale ?? 0 }} productos en oferta
            </p>
        @else
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900 mb-4">Todos los Productos</h1>
                <p class="text-gray-600">Descubre todo lo que tenemos para tu gato.</p>
            </div>
        @endif

        <div class="product-grid">
            @forelse($products as $product)
                <x-product-card :product="$product" />
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-500 text-lg">
                        {{ ($onlyOnSale ?? false) ? 'No hay productos en oferta ahora mismo.' : 'No hay productos disponibles.' }}
                    </p>
                </div>
            @endforelse
        </div>
    </div>
@endsection