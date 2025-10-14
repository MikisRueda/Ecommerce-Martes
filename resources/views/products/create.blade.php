@extends('Layouts.app')

@section('title', 'Crear Producto')

@section('content')
    <h1 class="text-3xl font-semibold text-gray-200 mb-10 text-center">Añadir Nuevo Producto</h1>

    <form action="#" method="POST" class="max-w-xl mx-auto bg-gray-900 rounded-xl shadow-lg p-8 space-y-5 border border-gray-700">
        @csrf
        <div>
            <label class="block text-gray-400 font-semibold mb-1">Nombre del producto</label>
            <input type="text" name="name" class="w-full px-4 py-3 border border-gray-700 rounded-md bg-gray-800 text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" />
        </div>

        <div>
            <label class="block text-gray-400 font-semibold mb-1">Descripción</label>
            <textarea name="description" rows="4" class="w-full px-4 py-3 border border-gray-700 rounded-md bg-gray-800 text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent resize-none"></textarea>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <div>
                <label class="block text-gray-400 font-semibold mb-1">Precio</label>
                <input type="number" name="price" class="w-full px-4 py-3 border border-gray-700 rounded-md bg-gray-800 text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" />
            </div>

            <div>
                <label class="block text-gray-400 font-semibold mb-1">Categoría</label>
                <input type="text" name="category" class="w-full px-4 py-3 border border-gray-700 rounded-md bg-gray-800 text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" />
            </div>
        </div>

        <div>
            <label class="block text-gray-400 font-semibold mb-1">Imagen (URL)</label>
            <input type="text" name="image" class="w-full px-4 py-3 border border-gray-700 rounded-md bg-gray-800 text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" />
        </div>

        <button type="submit" class="w-full bg-indigo-600 text-white py-3 rounded-md hover:bg-indigo-700 transition-all font-semibold text-lg">
            Crear Producto
        </button>
    </form>
@endsection
