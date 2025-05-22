<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Official .kh domain registration platform - Register your Cambodian domain name securely and efficiently">
    <meta name="keywords" content=".kh domain, domain registration, Cambodia domain, web hosting, domain names">
    <meta name="author" content="Domain .kh">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="ដែន .kh : សូមស្វាគមន៍ | .kh Domain Registration">
    <meta property="og:description" content="Official .kh domain registration platform - Register your Cambodian domain name securely and efficiently">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('img/logo.webp') }}">
    <meta name="twitter:card" content="summary_large_image">
    
    <title>ដែន .kh : សូមស្វាគមន៍ | .kh Domain Registration</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    
    <!-- Preload critical assets -->
    <link rel="preload" href="{{ asset('img/logo.webp') }}" as="image">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" as="style">
    
    <!-- Styles -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</head> 
<body class="min-h-screen flex flex-col">
    <header>
        @include('layout.header')
    </header>

    <main class="flex-grow">
        <section class="bg-white">
            <div class="mx-auto">
                @yield('content')
            </div>
        </section>  
    </main>
    
    <footer>
        @include('layout.footer')
    </footer>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>

    <script>
    document.addEventListener('alpine:init', () => {
        Alpine.store('lang', {
            value: 'en',
            toggle() {
                this.value = this.value === 'en' ? 'kh' : 'en';
            }
        });
    });
    </script>
</body>
</html>
