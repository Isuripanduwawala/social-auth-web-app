<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    
    <style>
        body {
            font-family: 'Instrument Sans', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 min-h-screen flex items-center justify-center p-6">
    <div class="w-full max-w-md bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 transition-all">
        <div class="text-center mb-8">
            <!-- Laravel Logo -->
            <div class="flex justify-center mb-6">
                <svg class="w-16 h-16 text-red-500 dark:text-red-400" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 12L36 36" stroke="currentColor" stroke-width="4" stroke-linecap="round"/>
                    <path d="M16 12L40 36" stroke="currentColor" stroke-width="4" stroke-linecap="round"/>
                </svg>
            </div>
            
            <h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">
                Welcome to Laravel
            </h1>
            <p class="text-gray-600 dark:text-gray-300">
                Build something amazing today
            </p>
        </div>

        <!-- Login & Register Buttons -->
        <div class="space-y-4">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" 
                       class="block w-full py-3 px-4 text-center bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                        Go to Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" 
                       class="block w-full py-3 px-4 text-center bg-gray-800 dark:bg-gray-700 text-white rounded-lg hover:bg-gray-900 dark:hover:bg-gray-600 transition">
                        Log In
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" 
                           class="block w-full py-3 px-4 text-center bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                            Register
                        </a>
                    @endif
                @endauth
            @endif
        </div>
    </div>
</body>
</html>