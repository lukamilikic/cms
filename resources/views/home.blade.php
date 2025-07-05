@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
    <!-- Main Content -->
    <div class="lg:col-span-3">
        <!-- Featured Article -->
        <div class="mb-8">
            <article class="bg-white rounded-lg shadow-sm overflow-hidden">
                <div class="aspect-w-16 aspect-h-9">
                    <img src="https://via.placeholder.com/800x450/cccccc/666666?text=Featured+Article" 
                         alt="Featured Article" 
                         class="w-full h-96 object-cover">
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-2">
                        <span class="bg-red-100 text-red-800 px-2 py-1 rounded-full text-xs font-medium mr-3">
                            NAJNOVIJE
                        </span>
                        <span>Pre 2 sata</span>
                        <span class="mx-2">•</span>
                        <span>Autor: Marko Petrović</span>
                    </div>
                    <h1 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-4 leading-tight">
                        Naslov glavnog članka koji privlači pažnju čitalaca
                    </h1>
                    <p class="text-gray-600 text-lg leading-relaxed mb-4">
                        Ovo je kratak opis glavnog članka koji objašnjava o čemu se radi i privlači čitaoce da nastave sa čitanjem. Tekst je informativan i privlačan.
                    </p>
                    <a href="#" class="text-red-600 hover:text-red-800 font-medium">
                        Čitaj više →
                    </a>
                </div>
            </article>
        </div>

        <!-- Latest Articles Grid -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Najnovije</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @for ($i = 1; $i <= 6; $i++)
                <article class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                    <div class="aspect-w-16 aspect-h-9">
                        <img src="https://via.placeholder.com/400x225/cccccc/666666?text=Article+{{ $i }}" 
                             alt="Article {{ $i }}" 
                             class="w-full h-48 object-cover">
                    </div>
                    <div class="p-4">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs font-medium mr-3">
                                KULTURA
                            </span>
                            <span>Pre {{ $i }} sata</span>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2 leading-tight">
                            Naslov članka broj {{ $i }} koji opisuje važnu vest
                        </h3>
                        <p class="text-gray-600 text-sm mb-3 line-clamp-3">
                            Kratak opis članka koji objašnjava sadržaj i privlači čitaoce da nastave sa čitanjem.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">Autor: Ana Marić</span>
                            <a href="#" class="text-red-600 hover:text-red-800 text-sm font-medium">
                                Čitaj više
                            </a>
                        </div>
                    </div>
                </article>
                @endfor
            </div>
        </div>

        <!-- Most Read Section -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Najčitanije</h2>
            <div class="bg-white rounded-lg shadow-sm p-6">
                <ol class="space-y-4">
                    @for ($i = 1; $i <= 5; $i++)
                    <li class="flex items-start space-x-4">
                        <span class="flex-shrink-0 w-8 h-8 bg-red-600 text-white rounded-full flex items-center justify-center text-sm font-bold">
                            {{ $i }}
                        </span>
                        <div class="flex-1">
                            <h3 class="text-lg font-medium text-gray-900 mb-1">
                                <a href="#" class="hover:text-red-600">
                                    Naslov najčitanijeg članka broj {{ $i }}
                                </a>
                            </h3>
                            <p class="text-sm text-gray-500">
                                Pre {{ $i * 2 }} sata • {{ rand(1000, 9999) }} pregleda
                            </p>
                        </div>
                    </li>
                    @endfor
                </ol>
            </div>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="lg:col-span-1">
        <!-- Newsletter Signup -->
        <div class="bg-gray-50 rounded-lg p-6 mb-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Pretplati se na newsletter</h3>
            <p class="text-gray-600 text-sm mb-4">
                Budite u toku sa najnovijim vestima i analizama.
            </p>
            <form class="space-y-3">
                <input type="email" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent" 
                       placeholder="Vaš email">
                <button type="submit" 
                        class="w-full bg-red-600 text-white py-2 px-4 rounded-md hover:bg-red-700 transition-colors">
                    Pretplati se
                </button>
            </form>
        </div>

        <!-- Categories -->
        <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Kategorije</h3>
            <ul class="space-y-2">
                <li><a href="#" class="text-gray-600 hover:text-red-600 flex items-center justify-between">
                    <span>Politika</span>
                    <span class="text-sm text-gray-400">24</span>
                </a></li>
                <li><a href="#" class="text-gray-600 hover:text-red-600 flex items-center justify-between">
                    <span>Ekonomija</span>
                    <span class="text-sm text-gray-400">18</span>
                </a></li>
                <li><a href="#" class="text-gray-600 hover:text-red-600 flex items-center justify-between">
                    <span>Kultura</span>
                    <span class="text-sm text-gray-400">32</span>
                </a></li>
                <li><a href="#" class="text-gray-600 hover:text-red-600 flex items-center justify-between">
                    <span>Sport</span>
                    <span class="text-sm text-gray-400">15</span>
                </a></li>
                <li><a href="#" class="text-gray-600 hover:text-red-600 flex items-center justify-between">
                    <span>Tehnologija</span>
                    <span class="text-sm text-gray-400">21</span>
                </a></li>
            </ul>
        </div>

        <!-- Tags -->
        <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Popularne oznake</h3>
            <div class="flex flex-wrap gap-2">
                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm hover:bg-gray-200 cursor-pointer">
                    #politika
                </span>
                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm hover:bg-gray-200 cursor-pointer">
                    #ekonomija
                </span>
                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm hover:bg-gray-200 cursor-pointer">
                    #kultura
                </span>
                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm hover:bg-gray-200 cursor-pointer">
                    #sport
                </span>
                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm hover:bg-gray-200 cursor-pointer">
                    #tehnologija
                </span>
                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm hover:bg-gray-200 cursor-pointer">
                    #lifestyle
                </span>
            </div>
        </div>

        <!-- Advertisement -->
        <div class="bg-gray-100 rounded-lg p-6 text-center">
            <p class="text-gray-500 text-sm mb-4">Reklama</p>
            <div class="bg-gray-200 w-full h-64 rounded-lg flex items-center justify-center">
                <span class="text-gray-500">300x250</span>
            </div>
        </div>
    </div>
</div>
@endsection