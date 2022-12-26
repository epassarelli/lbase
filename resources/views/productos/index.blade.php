<x-app-layout>

    <x-header>
        Productos por categoría
    </x-header>

    <div class="bg-white">
        <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <h2 class="sr-only">Categorias</h2>

            <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 xl:gap-x-8">

                @foreach ($categorias as $categoria)
                    <a href="{{ route('productos.categoria', $categoria) }}" class="group">
                        <div
                            class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
                            <img src="{{ asset('storage/' . $categoria->imagen) }}" alt="{{ $categoria->categoria }}"
                                class="h-full w-full object-cover object-center group-hover:opacity-75">
                        </div>
                        <h3 class="mt-4 text-sm text-gray-700">{{ $categoria->categoria }}</h3>
                    </a>
                @endforeach

                <!-- More products... -->
            </div>
        </div>
    </div>

</x-app-layout>
