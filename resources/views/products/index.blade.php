@extends('Layouts.app')

@section('title', 'Productos')

@section('content')
    <div class="min-h-screen bg-gray-900 py-14 px-6 sm:px-10 lg:px-20">
        <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-100 mb-10 text-center tracking-tight">
            Todos nuestros productos
        </h1>

        <!-- Filtros / Barra superior (opcional, sin lógica) -->
        <div class="mb-8 flex items-center justify-between gap-4">
            <p class="text-gray-400 text-sm">
                Explora nuestra selección cuidadosamente curada. [memory:2]
            </p>
            <div class="hidden sm:flex items-center gap-2">
                <button class="text-gray-300 text-sm px-3 py-1.5 rounded-md border border-gray-700 hover:border-gray-600 hover:bg-gray-800 transition">
                    Más recientes
                </button>
                <button class="text-gray-300 text-sm px-3 py-1.5 rounded-md border border-gray-700 hover:border-gray-600 hover:bg-gray-800 transition">
                    Precio
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($products as $product)
                <div class="group relative bg-gray-850/60 backdrop-blur-sm rounded-xl border border-gray-800 overflow-hidden transition-transform duration-200 hover:-translate-y-1">
                    <!-- Borde superior sutil de acento -->
                    <span class="pointer-events-none absolute inset-x-0 top-0 h-0.5 bg-gradient-to-r from-indigo-600/60 via-indigo-500/40 to-green-400/50"></span>

                    <!-- Imagen con relación fija y hover suave -->
                    <div class="aspect-[16/11] overflow-hidden">
                        <img
                            src="{{ $product['image'] }}"
                            alt="{{ $product['name'] }}"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-[1.03]"
                            loading="lazy"
                        />
                    </div>

                    <!-- Contenido -->
                    <div class="p-5 flex flex-col gap-4">
                        <h2 class="text-lg font-semibold text-gray-100 tracking-tight line-clamp-1">
                            {{ $product['name'] }}
                        </h2>

                        <p class="text-gray-400 text-sm leading-relaxed line-clamp-3">
                            {{ $product['description'] }}
                        </p>

                        <div class="flex items-center justify-between pt-2">
                            <span class="text-xl font-bold text-green-400">
                                $ {{ number_format($product['price'], 0, ',', '.') }}
                            </span>

                            <a href="{{ url('/products/'.$product['id'].'/'.$product['category']) }}"
                               class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md font-medium transition focus:outline-none focus:ring-2 focus:ring-indigo-400/50">
                                Ver detalles
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-90" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 7l5 5-5 5M6 12h12" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Sombra de enfoque y borde en hover -->
                    <div class="absolute inset-0 pointer-events-none rounded-xl ring-1 ring-inset ring-transparent group-hover:ring-gray-700/70 transition"></div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
