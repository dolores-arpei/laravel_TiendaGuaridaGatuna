<!-- layout maestro es la base de todas las páginas. Define la estructura HTML común y utiliza los partials para los elementos fijos.-->

<!DOCTYPE html>
<html lang="es">
<head>
    @include('partials.head')
</head>
<body class="bg-gray-50">
    <!-- Header usando partial -->
    @include('partials.header')

     <!-- Notificaciones Flash -->
    @include('partials.flash-messages')
    
    <!-- Contenido principal -->
    <main class="min-h-screen">
        @yield('content')
    </main>
    
    <!-- Footer usando partial -->
    @include('partials.footer')

    @stack('scripts')
</body>
</html>