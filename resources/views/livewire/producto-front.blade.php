<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <h1>Detalle del producto</h1>


    {{-- <div class="grid grid-cols-12 gap-6 pt-8">
        <div class="col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-4">
                    <img class="w-full h-96 object-cover object-center" src="{{ $producto->imagen }}"
                        alt="{{ $producto->nombre }}">
                </div>
                <div class="col-span-8">
                    <h2 class="text-gray-900 font-bold text-3xl mb-2">{{ $producto->nombre }}</h2>
                    <p class="text-gray-700 text-base">{{ $producto->descripcion }}</p>
                    <p class="text-gray-700 text-base font-bold mt-2">{{ $producto->precio }}</p>

                    <div class="mt-4">
                        <label class="block font-bold text-gray-700">Talle:</label>
                        <select class="form-select mt-1 block w-full" id="talle">
                            @foreach ($producto->talles as $talle)
                                <option>{{ $talle->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-4">
                        <label class="block font-bold text-gray-700">Color:</label>
                        <select class="form-select mt-1 block w-full" id="color">
                            @foreach ($producto->colores as $color)
                                <option>{{ $color->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-4">
                        <button
                            class="py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white font-bold rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-3">
            {{-- @livewire('categorias-front') --}}
</div>
</div> --}}


</div>