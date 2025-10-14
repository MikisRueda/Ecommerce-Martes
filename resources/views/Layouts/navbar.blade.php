<nav class="bg-gray-900/95 backdrop-blur-sm border-b border-gray-700 shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center">
        <!-- Logo o nombre de la tienda -->
        <a href="{{ url('/products') }}" class="flex items-center space-x-3 text-2xl font-extrabold text-gray-100 hover:text-indigo-400 transition-colors">
            <span>Mikis Shop</span>
        </a>

        <!-- Enlaces principales -->
        <div class="flex items-center space-x-8 font-semibold tracking-wide text-gray-300">
            <a href="{{ url('/products') }}" class="relative group hover:text-indigo-400 transition-colors">
                Inicio
                <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-indigo-400 transition-all group-hover:w-full rounded"></span>
            </a>
            <a href="{{ url('/products/create') }}" class="relative group hover:text-indigo-400 transition-colors">
                Crear Producto
                <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-indigo-400 transition-all group-hover:w-full rounded"></span>
            </a>
        </div>

        <!-- Iconos redes sociales -->
        <div class="flex space-x-4 ml-8">
            <a href="https://facebook.com" target="_blank" class="text-gray-400 hover:text-indigo-400 transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 5 3.66 9.13 8.44 9.88V15.3h-2.54v-3.3H10V8.99c0-2.52 1.49-3.9 3.78-3.9 1.09 0 2.23.2 2.23.2v2.44h-1.26c-1.24 0-1.63.77-1.63 1.56v1.97h2.78l-.44 3.3h-2.34v6.59C18.34 21.13 22 17 22 12z"/>
                </svg>
            </a>
            <a href="https://twitter.com" target="_blank" class="text-gray-400 hover:text-indigo-400 transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22.46 6c-.77.34-1.6.57-2.47.68a4.3 4.3 0 001.88-2.37 8.52 8.52 0 01-2.72 1.04 4.27 4.27 0 00-7.28 3.89A12.13 12.13 0 013 5.15a4.27 4.27 0 001.32 5.7 4.23 4.23 0 01-1.93-.53v.05a4.27 4.27 0 003.43 4.19 4.3 4.3 0 01-1.92.07 4.27 4.27 0 003.99 2.97A8.58 8.58 0 012 19.54a12.09 12.09 0 006.56 1.92c7.88 0 12.2-6.53 12.2-12.2l-.01-.56A8.72 8.72 0 0024 5.1a8.45 8.45 0 01-2.54.7z"/>
                </svg>
            </a>
            <a href="https://instagram.com" target="_blank" class="text-gray-400 hover:text-indigo-400 transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm0 3h10c1.66 0 3 1.34 3 3v10c0 1.66-1.34 3-3 3H7c-1.66 0-3-1.34-3-3V8c0-1.66 1.34-3 3-3zm5 4.5a4.5 4.5 0 100 9 4.5 4.5 0 000-9zm0 2a2.5 2.5 0 110 5 2.5 2.5 0 010-5zm4.75-3.75a1.25 1.25 0 100 2.5 1.25 1.25 0 000-2.5z"/>
                </svg>
            </a>
        </div>
    </div>
</nav>
