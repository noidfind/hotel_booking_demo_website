<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Otel Rezervasyon Sistemi</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <nav class="bg-white shadow-lg">
            <div class="max-w-7xl mx-auto px-4">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="flex-shrink-0 flex items-center">
                            <h1 class="heading-1">Otel Rezervasyon</h1>
                        </div>
                    </div>
                    <div class="flex items-center">
                        @if (Route::has('login'))
                            <div class="space-x-4">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="nav-link">Giriş Yap</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn-primary">Kayıt Ol</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </nav>

        <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="px-4 py-6 sm:px-0">
                <div class="card">
                    <div class="card-body">
                        <h2 class="heading-1 mb-4">Hoş Geldiniz</h2>
                        <p class="text-content mb-8">
                            Otel rezervasyon sistemimize hoş geldiniz. Burada en iyi otelleri bulabilir ve kolayca rezervasyon yapabilirsiniz.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                                <h3 class="heading-2 mb-3">Otelleri Keşfedin</h3>
                                <p class="text-content">En iyi otelleri keşfedin ve size en uygun olanı seçin.</p>
                            </div>
                            <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                                <h3 class="heading-2 mb-3">Kolay Rezervasyon</h3>
                                <p class="text-content">Birkaç tıklama ile odanızı ayırtın.</p>
                            </div>
                            <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                                <h3 class="heading-2 mb-3">En İyi Fiyatlar</h3>
                                <p class="text-content">Uygun fiyatlarla kaliteli konaklama imkanı.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
