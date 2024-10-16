<!DOCTYPE html>
<html lang="en" class="h-full bg-neutral-800">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <title>FP PBKK</title>
    </head>

    <body class="h-full">
        <div class="min-h-full">
            <x-navbar />

            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
