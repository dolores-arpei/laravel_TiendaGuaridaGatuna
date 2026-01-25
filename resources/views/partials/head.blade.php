<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Guarida Gatuna - Tienda para gatos')</title>

<!-- Favicon -->
<link rel="icon"
    href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🐱</text></svg>">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: {
                    sans: ['Outfit', 'sans-serif'],
                },
                colors: {
                    primary: {
                        500: '#06b6d4', // Cyan 500
                        600: '#0891b2', // Cyan 600
                        700: '#0e7490', // Cyan 700
                    },
                    secondary: {
                        500: '#8b5cf6', // Violet 500
                        600: '#7c3aed', // Violet 600
                        700: '#6d28d9', // Violet 700
                    }
                }
            }
        }
    }
</script>
@stack('styles')