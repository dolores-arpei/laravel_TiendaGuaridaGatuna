<div
    class="group bg-white rounded-lg shadow-lg p-6 product-card cursor-pointer {{ $class }} transition-all duration-300 hover:scale-105 hover:shadow-xl hover:bg-primary-50 border border-transparent hover:border-primary-200">
    @php
        // Pasamos el nombre a minúsculas para comparar mejor
        $name = strtolower($category->name);

        // Asignamos un icono según el nombre de la categoría
        $icon = match (true) {
            str_contains($name, 'aliment') => '🐟',   // Alimentación
            str_contains($name, 'arena') => '🧼',     // Arena y areneros
            str_contains($name, 'rascad') => '🪵',    // Rascadores
            str_contains($name, 'juguet') => '🧶',    // Juguetes
            default => '😺',                         // Por si no coincide
        };
    @endphp

    <div
        class="text-4xl text-primary-500 mb-4 transition-transform duration-300 group-hover:scale-110 group-hover:rotate-3">
        {{ $icon }}
    </div>

    <h4 class="text-xl font-bold mb-2 text-gray-900">{{ $category->name }}</h4>
    <p class="text-gray-600 mb-4">{{ $category->description }}</p>
    <a href="{{ route('categories.show', $category->id) }}"
        class="text-primary-600 font-semibold hover:text-primary-700 transition">
        Ver Productos →
    </a>
</div>