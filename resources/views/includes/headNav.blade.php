<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

   <body>
    <header class="sticky top-0 bg-white shadow z-20">
        <div class="container flex flex-col sm:flex-row justify-between items-center mx-auto py-4 px-8">
            <div class="flex items-center text-2xl">
                <div class="w-20 mr-3">
                    <img src="../build/img/logo.png" alt="">
                </div>FootFits
            </div>
            <div class="flex ml-12 mt-4 sm:mt-0">
                <a class="px-4" href={{ __('/') }}>HOME</a>
                <a class="px-4" href={{ __('/products') }}>PRODUCTS</a>
                <a class="px-4" href={{ __('/about') }}>ABOUT</a>
                @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="px-4">LOGIN</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="px-4">REGISTER</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
        </div>
    </header>
   </body>

</html>


