<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DZP</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
          integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</head>
<body class="flex flex-col min-h-screen bg-white">

<!-- Header -->
@include('sections.header')

<!-- Main Content -->
<main class="flex flex-col overflow-hidden">
    @yield('content')
</main>

<!-- Footer -->
@include('sections.footer')

</body>

<script>
    document.querySelectorAll('.scroll-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            const targetId = this.getAttribute('data-target');
            const targetEl = document.getElementById(targetId);
            if (!targetEl) return;

            // Smooth scroll with offset for fixed header (adjust offset)
            const headerOffset = 80;
            const elementPosition = targetEl.getBoundingClientRect().top;
            const offsetPosition = window.pageYOffset + elementPosition - headerOffset;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });

            // When scrolling finishes, trigger bounce animation
            // Since there's no native "scrollend", we use a timeout roughly matching scroll duration
            setTimeout(() => {
                targetEl.classList.add('bounce-effect');

                // Remove the class after animation ends to allow re-triggering
                targetEl.addEventListener('animationend', () => {
                    targetEl.classList.remove('bounce-effect');
                }, { once: true });

            }, 600); // timeout ~ scroll duration in ms, adjust if needed
        });
    });

</script>
</html>


