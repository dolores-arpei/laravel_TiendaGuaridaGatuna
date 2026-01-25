# Tienda Guarida Gatuna

**Tienda Guarida Gatuna**, es una aplicación de comercio electrónico desarrollado como parte de mi formación en desarrollo web.

El objetivo de este proyecto es poner en práctica todo lo aprendido sobre **Laravel**, aplicando una arquitectura **MVC**, gestión de bases de datos y desarrollo de interfaces con Blade y Tailwind CSS.

[Enlace al Repositorio]https://github.com/dolores-arpei/laravel_TiendaGuaridaGatuna.git

## Descripción del Proyecto

Tienda Guarida Gatuna es una simulación de una tienda en línea real. En ella se ha implementado desde cero la lógica para que los usuarios puedan ver productos, gestionar un carrito de compras y realizar pedidos. 

## Características Principales (Lo que he implementado)

En este proyecto se han desarrollado las siguientes funcionalidades:

*   **Catálogo Público**: Una vista pública donde cualquiera puede ver los productos y ofertas.
*   **Carrito de Compras**: La lógica para añadir, actualizar y eliminar productos del carrito, visible tanto para invitados como usuarios registrados.
*   **Autenticación**: Laravel Breeze para el registro y login, pero personalizando las vistas.
*   **Lista de Deseos**: Una funcionalidad para guardar favoritos.
*   **Panel de Administración**: Una sección protegida donde administrar los productos (Crear, Editar, Borrar).
*   **Perfil**: Los usuarios pueden editar sus datos.

## Tecnologías Utilizadas

Para el desarrollo de este proyecto se ha utilizado el siguiente stack tecnológico:

*   **Laravel 12**: Como framework principal de Backend.
*   **Laravel Breeze**: Para el sistema de autenticación.
*   **Tailwind CSS**: Para la maquetación y diseño.
*   **Vite**: Para la compilación de assets.
*   **MySQL / SQLite**: Como base de datos.

## Instalación y Despliegue

Para probar el proyecto en un entorno local, seguir los siguientes pasos:

### Prerrequisitos
Tener instalado PHP 8.2, Composer y Node.js.

### Pasos
1.  **Clonar el repositorio**:
    ```bash
    git clone https://github.com/dolores-arpei/laravel_TiendaGuaridaGatuna.git
    cd MyShop
    ```
2.  **Instalar las dependencias**:
    ```bash
    composer install
    npm install
    ```
3.  **Configurar el entorno**:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
4.  **Base de datos**:
    ```bash
    php artisan migrate --seed
    ```

## Usuarios de Prueba

Para poder probar  los usuarios se han creado en los seeders:

**Administrador**
*   **Email**: `admin@guaridagatuna.com`
*   **Contraseña**: `password123`
*   **Rol**: Usuario
*   **Permisos**:
    *   Acceso completo al dashboard
    *   Gestión de productos (crear, editar, eliminar)
    *   Gestión de lista de deseos
    *   Gestión del carrito de compras
    *   Visualización del catálogo

**Usuario**
*   **Email**: `demo@example.com`
*   **Contraseña**: `password`
*   **Rol**: Usuario
*   **Permisos**:
    *   Acceso al dashboard (sin gestión de productos)
    *   Acceso a lista de deseos
    *   Acceso al carrito de compras
    *   Visualización del catálogo

## Estructura del Proyecto

Se ha organizado el código siguiendo el patrón MVC. A continuación se muestra la estructura detallada de los archivos más relevantes del proyecto:

```text
├── app
│   ├── Http
│   │   ├── Controllers      # Lógica de negocio
│   │   │   ├── Auth/                # Controladores de autenticación (Breeze)
│   │   │   ├── CartController.php   # Gestión del carrito
│   │   │   ├── CategoryController.php
│   │   │   ├── ContactController.php
│   │   │   ├── OfferController.php
│   │   │   ├── ProductController.php # Gestión de productos (Admin/Public)
│   │   │   ├── ProfileController.php
│   │   │   ├── WelcomeController.php
│   │   │   └── WishlistController.php
│   │   └── Middleware       # Filtros de peticiones (Auth, Admin, etc.)
│   └── Models               # Modelos de datos (Eloquent)
│       ├── Category.php
│       ├── Offer.php
│       ├── Product.php
│       └── User.php
├── database
│   ├── migrations/          # Estructura de la BBDD
│   └── seeders/             # Datos de prueba (DatabaseSeeder, UserSeeder...)
├── public/                  # Assets públicos (imágenes, build)
├── resources
│   ├── css/                 # Estilos (Tailwind - app.css)
│   ├── js/                  # Scripts (Alpine.js - app.js)
│   └── views/               # Vistas (Blade)
│       ├── admin/           # Vistas de administración
│       ├── auth/            # Vistas de login/registro
│       ├── cart/            # Vista del carrito
│       ├── categories/      # Vistas de categorías
│       ├── components/      # Componentes reutilizables (cards, inputs...)
│       ├── layouts/         # Plantillas base (app, guest)
│       ├── offers/          # Vistas de ofertas
│       ├── partials/        # Fragmentos de UI (header, footer)
│       ├── products/        # Vistas de productos
│       ├── welcome.blade.php # Página de inicio
│       └── contact.blade.php
├── routes
│   ├── web.php              # Rutas principales
│   └── auth.php             # Rutas de autenticación
└── tests/                   # Tests automatizados
```

## Características de Diseño

Diseño de la aplicación:
*   **Diseño Responsivo**: Se adapta a móviles y ordenadores.
*   **UI Moderna**: Estilos dados con Tailwind CSS para una apariencia limpia y profesional.
*   **Componentes**: Se ha modularizado el código usando componentes de Blade.
*   **Tipografía**: Se ha utilizado la fuente **Outfit** para todo el proyecto, obtenida de Google Fonts.
*   **Paleta de Colores**:
    *   **Primario (Cyan)**: `#06b6d4` (500), `#0891b2` (600), `#0e7490` (700)
    *   **Secundario (Violet)**: `#8b5cf6` (500), `#7c3aed` (600), `#6d28d9` (700)

## Funcionalidades Destacadas

*   **Gestión Dinámica de Carrito**: El carrito no se pierde si recargas la página.
*   **Control de Acceso (RBAC)**: Uso de Middleware para proteger rutas administrativas y asegurar que solo usuarios autorizados puedan gestionar productos.
*   **Ofertas**: Se calculan dinámicamente.

## Comandos Útiles

Estos son los comandos usados normalmente:
`php artisan serve` para arrancar y `npm run dev` para los estilos.

## Licencia

Este es un proyecto educativo y lo comparto bajo la **Licencia Creative Commons Atribución 4.0 (CC BY 4.0)**. Puedes usarlo para aprender, ¡pero acuérdate de mencionarme!

## Autora

**Dolores Argandoña Peiró**
Alumna de 2º Curso de Desarrollo de Aplicaciones Web - Desarrollo en entorno servicor - Curso 2025/2026.
