<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AmbatuEat - Restaurant Reservation</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                body {
                    font-family: 'Instrument Sans', sans-serif;
                }
            </style>
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center justify-center min-h-screen flex-col">
        
        <main class="w-full lg:max-w-4xl max-w-[335px] flex flex-col lg:flex-row items-center justify-between gap-8">
            <!-- Left Content Area -->
            <div class="flex flex-col space-y-6 lg:w-1/2">
                <h1 class="text-4xl lg:text-5xl font-medium dark:text-[#EDEDEC]">AmbatuEat</h1>
                <p class="text-lg dark:text-[#EDEDEC] text-[#4a4a47]">
                    Elevate your dining experience with hassle-free reservations at your favorite restaurant.
                </p>
                <div class="flex gap-4 mt-4">
                    @if (Route::has('login'))
                        @auth
                            <a 
                                href="{{ url('/dashboard') }}" 
                                class="inline-block px-6 py-2.5 bg-[#1b1b18] hover:bg-[#323231] dark:bg-[#EDEDEC] dark:hover:bg-[#d1d1d0] dark:text-[#1b1b18] text-white rounded-md text-sm font-medium transition-colors"
                            >
                                Make Reservation
                            </a>
                        @else
                            <a 
                                href="{{ route('register') }}" 
                                class="inline-block px-6 py-2.5 bg-[#1b1b18] hover:bg-[#323231] dark:bg-[#EDEDEC] dark:hover:bg-[#d1d1d0] dark:text-[#1b1b18] text-white rounded-md text-sm font-medium transition-colors"
                            >
                                Get Started
                            </a>
                            <a 
                                href="{{ route('login') }}" 
                                class="inline-block px-6 py-2.5 border border-[#19140035] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:hover:border-[#62605b] dark:text-[#EDEDEC] rounded-md text-sm font-medium transition-colors"
                            >
                                Sign In
                            </a>
                        @endauth
                    @endif
                </div>
            </div>
            
            <!-- Right Image Area -->
            <div class="lg:w-1/2 flex justify-center items-center">
                <div class="relative w-72 h-72 lg:w-80 lg:h-80 overflow-hidden rounded-lg">
                    <img src="https://images.unsplash.com/photo-1556742205-e10c9486e506?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxzZWFyY2h8MXx8cmVzdGF1cmFudHxlbnwwfHwwfHx8MA%3D%3D" alt="Restaurant Interior" class="object-cover w-full h-full" />
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-[#1b1b18]/70 to-transparent p-4">
                        <p class="text-white text-sm">Modern dining experience</p>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>