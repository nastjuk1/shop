<!DOCTYPE html>
<html lang="ru" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'LUMEN Candles' }}</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        background: '#faf9f6',
                        surface: '#faf9f6',
                        primary: '#000000',
                        secondary: '#6b5c4c',
                        'on-primary': '#ffffff',
                        'on-background': '#1a1c1a',
                        'on-surface': '#1a1c1a',
                        'on-surface-variant': '#444748',
                        'surface-container-low': '#f4f3f1',
                        'surface-container': '#efeeeb',
                        'surface-container-high': '#e9e8e5',
                        'surface-container-lowest': '#ffffff',
                        outline: '#747878',
                        'outline-variant': '#c4c7c7',
                    },
                    fontFamily: {
                        serif: ['Playfair Display', 'serif'],
                        sans: ['Inter', 'sans-serif'],
                    },
                    spacing: {
                        'desktop': '80px',
                        'section': '120px',
                        'gutter': '24px',
                    }
                }
            }
        }
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-background text-on-background font-sans">
    @yield('content')
</body>
</html>