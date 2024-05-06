<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <style>
        /* style.css */
        .image-container {
            position: relative;
            display: inline-block;
        }

        .image {
            display: block;
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            /* Latar belakang transparan */
            border-radius: 10px;
            /* Atur radius sudut sesuai kebutuhan */
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .image-container:hover .overlay {
            opacity: 1;
        }

        .button-container {
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        
    </style>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-textbase dark:bg-textbase">
        @include('layouts.navigation')

        <!-- Page Heading -->
        {{-- @if (isset($header))
                <header class="bg-white dark:bg-base shadow">
                    <div class="max-w-2xl px-4 py-4 sm:px-6 lg:px-8 text-textbase">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>
