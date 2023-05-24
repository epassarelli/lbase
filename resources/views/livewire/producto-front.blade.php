<div>

    <!-- <h1>Detalle del producto</h1>

    <div class="grid grid-cols-12 gap-6 pt-8">
        <div class="col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-6">
                    <img class="w-full h-96 object-cover object-center" src="{{ asset('storage/productos/' . $producto->imagen) }}" alt="{{ $producto->nombre }}">
                </div>
                <div class="col-span-6">
                    <h2 class="text-gray-900 font-bold text-3xl mb-2" id="producto_id" wire:model="producto_id"> Id
                        {{ $producto->id }}
                    </h2>
                    <h2 class="text-gray-900 font-bold text-3xl mb-2"> Nombre {{ $producto->nombre }}</h2>
                    <p class="text-gray-700 text-base">Desc. Corta {{ $producto->descCorta }}</p>
                    <p class="text-gray-700 text-base font-bold mt-2">Precio Lista {{ $producto->precioLista }}</p>
                    <p class="text-gray-700 text-base font-bold mt-2">Precio Oferta {{ $producto->precioOferta }}</p>
                    <p class="text-gray-700 text-base font-bold mt-2">Codigo {{ $producto->codigo }}</p>

                    <div class="mt-4">
                        <label class="block font-bold text-gray-700">Talle:</label>
                        <select class="form-select mt-1 block w-full" id="talle_id" wire:model="talle_id" wire:change="checkstock()">
                            <option value="0">Seleccione un Talle</option>
                            @foreach ($talles as $talle)
                            <option value="{{ $talle['talle_id'] }}">{{ $talle['talle'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-4">
                        <label class="block font-bold text-gray-700">Color:</label>
                        <select class="form-select mt-1 block w-full" id="color_id" wire:model="color_id" wire:change="checkstock()">
                            <option value="0">Seleccione un Color</option>
                            @foreach ($colores as $color)
                            <option value="{{ $color['color_id'] }}">{{ $color['color'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-4">
                        <button class="py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white font-bold rounded-md
                                       shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2" wire:click.prevent="incrementa()">
                            +
                        </button>
                        <input class="py-2 px-2 " type="numeric" id="cantidad" wire:model="cantidad" wire:change="checkstock()" />
                        <button class="py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white font-bold rounded-md
                                      shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2" wire:click.prevent="decrementa()">
                            -
                        </button>
                        @if (parametro(10) === 'S')
                        Disponibles<input class="py-2 px-2 " type="numeric" id="disponibles" wire:model="disponibles" disabled></input>
                        @endif
                    </div>

                    <div class="mt-4">
                        @if (parametro(10) === 'S')
                        <button class="py-2 px-4
                            {{ ($cantidad > $disponibles) | ($talle_id == 0) | ($color_id == 0)
                                ? 'bg-slate-100 hover:bg-slate-200 text-{212 212 216}'
                                : ' bg-blue-500 hover:bg-blue-600 text-white' }}
                                                           font-bold rounded-md
                            shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2
                            {{ ($cantidad > $disponibles) | ($talle_id == 0) | ($color_id == 0) ? 'disabled' : '' }}
                            " wire:click.prevent="agregarcarrito()">
                            {{ $cantidad > $disponibles && $talle_id > 0 && $color_id > 0 ? 'Sin stock disponible' : ' Agregar al carrito' }}

                        </button>
                        @else
                        <button class="py-2 px-4  bg-blue-500 hover:bg-blue-600 text-white  font-bold rounded-md shadow-md focus:outline-none focus:ring-2
                                         focus:ring-blue-500 focus:ring-offset-2 " wire:click.prevent="agregarcarrito()">Agregar al carrito</button>
                        @endif
                        <div>


                            {{-- @if (session('items'))
                                @foreach (session('items') as $item)
                                    {{ $item['producto_id'] }}
                            {{ $item['producto_nombre'] }}
                            {{ $item['producto_precio'] }}
                            {{ $item['color_id'] }}
                            {{ $item['color_nombre'] }}
                            {{ $item['talle_id'] }}
                            {{ $item['talle_nombre'] }}
                            {{ $item['cantidad'] }}
                            @endforeach
                            @else
                            @endif --}}

                        </div>




                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-3">
            {{-- @livewire('categorias-front') --}}
            <div class="grid grid-cols-1">
                <h3 class="block px-2 py-3 bg-gray-300">Otras categorias</h3>
                <ul role="list" class="px-2 py-3 font-medium text-gray-900">
                    @foreach ($categorias as $categoria)
                    <li class="block px-2 py-3 border-b">
                        <a href="{{ route('productos.categoria', $categoria['slug']) }}">
                            {{ $categoria['categoria'] }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div> -->

    <!-- lO ANTERIOR QUEDO COMENTADO HATA PROBAR QUE FUNCIONE BIEN EL DETALLE DEL PRODUCTO  -->
    <!-- DETALLE DEL PRODUCTO -->

    <div class="max-w-7xl grid grid-cols-1 lg:grid-cols-4 gap-12 mx-auto lg:px-8 py-12">
        <!-- Imagenes del producto  -->
        <div class="lg:col-span-2 px-6 lg:px-0">
            {{-- Componente de imágenes --}}
           <livewire:product-front-images>  
        </div>
        <!-- Nombre,Cantidad, precio, color del producto al agregar al carrito  -->
        <div>
            <!-- Nombre del producto  -->
            <div class="lg:max-w-7xl lg:grid-rows-[auto,auto,1fr] px-6 lg:px-0">
                <div class="col-span-2">
                    <h2 class="text-2xl font-bold text-gray-900 sm:text-3xl">Calzado caballeros</h2>
                </div>

                <!-- Precio - Precio con descuento -->
                <div class="mt-4 lg:row-span-3 lg:mt-0">
                    <h2 class="sr-only">Product information</h2>
                    <div>
                        <p class="text-3xl tracking-tight text-gray-900 mt-5">$10000.00</p>
                        <p class="text-gray-500 mt-2 line-through">$8300.40</p>
                    </div>

                    <!-- Reviews -->
                    <div class="mt-6">
                        <h3 class="sr-only">Reviews</h3>
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <!-- Active: "text-gray-900", Default: "text-gray-200" -->
                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                                <svg class="text-gray-200 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="sr-only">4 out of 5 stars</p>
                            <a href="#" class="ml-3 text-sm font-medium text-red-400 hover:text-red-600">117 reviews</a>
                        </div>
                    </div>

                    <!-- Selección de Colores -->
                    <form class="mt-10">
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">Color</h3>
                            <fieldset class="mt-4">
                                <legend class="sr-only">Choose a color</legend>
                                <div class="flex items-center space-x-3">
                                    <label class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 focus:outline-none ring-gray-400">
                                        <input type="radio" name="color-choice" value="White" class="sr-only peer/white" aria-labelledby="color-choice-0-label">
                                        <span id="color-choice-0-label" class="sr-only">White</span>
                                        <span aria-hidden="true" class="h-8 w-8 bg-white rounded-full border border-black border-opacity-10 peer-checked/white:ring-4 peer-checked/white:ring-red-500 hover:ring-4 hover:ring-red-400"></span>
                                    </label>
                                    <label class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 focus:outline-none ring-gray-400">
                                        <input type="radio" name="color-choice" value="Gray" class="sr-only peer/gray" aria-labelledby="color-choice-1-label">
                                        <span id="color-choice-1-label" class="sr-only">Gray</span>
                                        <span aria-hidden="true" class="h-8 w-8 bg-gray-200 rounded-full border border-black border-opacity-10 peer-checked/gray:ring-4 peer-checked/gray:ring-red-500 hover:ring-4 hover:ring-red-400"></span>
                                    </label>
                                    <label class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 focus:outline-none ring-gray-900">
                                        <input type="radio" name="color-choice" value="Black" class="sr-only peer/black" aria-labelledby="color-choice-2-label">
                                        <span id="color-choice-2-label" class="sr-only">Black</span>
                                        <span aria-hidden="true" class="h-8 w-8 bg-gray-900 rounded-full border border-black border-opacity-10 peer-checked/black:ring-4 peer-checked/black:ring-red-500 hover:ring-4 hover:ring-red-400"></span>
                                    </label>
                                </div>
                            </fieldset>
                        </div>

                        <!-- Selección de Talles -->
                        <div class="mt-10">
                            <div class="flex items-center justify-between">
                                <h3 class="text-sm font-medium text-gray-900">Talle</h3>
                                <a href="#" class="text-sm font-medium text-red-400 hover:text-red-500">Guía de Talles</a>
                            </div>
                            <fieldset class="mt-4">
                                <legend class="sr-only">Talles</legend>
                                <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                                    <label class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-not-allowed bg-gray-50 text-gray-200">
                                        <input type="radio" name="size-choice" value="XXS" disabled class="sr-only peer/xxs" aria-labelledby="size-choice-0-label">
                                        <span id="size-choice-0-label">XXS</span>
                                        <span aria-hidden="true" class="pointer-events-none absolute -inset-px rounded-md border-2 border-gray-200">
                                            <svg class="absolute inset-0 h-full w-full stroke-2 text-gray-200" viewBox="0 0 100 100" preserveAspectRatio="none" stroke="currentColor">
                                                <line x1="0" y1="100" x2="100" y2="0" vector-effect="non-scaling-stroke" />
                                            </svg>
                                        </span>
                                    </label>
                                    <label class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm hover:ring-4 hover:ring-red-400">
                                        <input type="radio" name="size-choice" value="XS" class="sr-only peer/xs" aria-labelledby="size-choice-1-label">
                                        <span id="size-choice-1-label">XS</span>
                                        <span class="pointer-events-none absolute -inset-px rounded-md peer-checked/xs:ring-4 peer-checked/xs:ring-red-500" aria-hidden="true"></span>
                                    </label>
                                    <label class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm hover:ring-4 hover:ring-red-400">
                                        <input type="radio" name="size-choice" value="S" class="sr-only peer/s" aria-labelledby="size-choice-2-label">
                                        <span id="size-choice-2-label">S</span>
                                        <span class="pointer-events-none absolute -inset-px rounded-md peer-checked/s:ring-4 peer-checked/s:ring-red-500" aria-hidden="true"></span>
                                    </label>
                                    <label class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm hover:ring-4 hover:ring-red-400">
                                        <input type="radio" name="size-choice" value="M" class="sr-only peer/m" aria-labelledby="size-choice-3-label">
                                        <span id="size-choice-3-label">M</span>
                                        <span class="pointer-events-none absolute -inset-px rounded-md peer-checked/m:ring-4 peer-checked/m:ring-red-500" aria-hidden="true"></span>
                                    </label>
                                    <label class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm hover:ring-4 hover:ring-red-400">
                                        <input type="radio" name="size-choice" value="L" class="sr-only peer/l" aria-labelledby="size-choice-4-label">
                                        <span id="size-choice-4-label">L</span>
                                        <span class="pointer-events-none absolute -inset-px rounded-md peer-checked/l:ring-4 peer-checked/l:ring-red-500" aria-hidden="true"></span>
                                    </label>
                                    <label class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm hover:ring-4 hover:ring-red-400">
                                        <input type="radio" name="size-choice" value="XL" class="sr-only peer/xl" aria-labelledby="size-choice-5-label">
                                        <span id="size-choice-5-label">XL</span>
                                        <span class="pointer-events-none absolute -inset-px rounded-md peer-checked/xl:ring-4 peer-checked/xl:ring-red-500" aria-hidden="true"></span>
                                    </label>
                                    <label class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm hover:ring-4 hover:ring-red-400">
                                        <input type="radio" name="size-choice" value="2XL" class="sr-only peer/2xl" aria-labelledby="size-choice-6-label">
                                        <span id="size-choice-6-label">2XL</span>
                                        <span class="pointer-events-none absolute -inset-px rounded-md peer-checked/2xl:ring-4 peer-checked/2xl:ring-red-500" aria-hidden="true"></span>
                                    </label>
                                    <label class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm hover:ring-4 hover:ring-red-400">
                                        <input type="radio" name="size-choice" value="3XL" class="sr-only peer/3xl" aria-labelledby="size-choice-7-label">
                                        <span id="size-choice-7-label">3XL</span>
                                        <span class="pointer-events-none absolute -inset-px rounded-md peer-checked/3xl:ring-4 peer-checked/3xl:ring-red-500" aria-hidden="true"></span>
                                    </label>
                                </div>
                            </fieldset>
                        </div>
                        <!-- Selección de la Cantidad y agregar al carrito-->
                        <div class="flex flex-wrap items-center justify-between mt-14 lg:gap-4 xl:gap-0">
                            <div class="flex gap-2 items-center">
                                <button class="w-8 h-10 border-2 border-red-400 text-red-400 rounded-md shadow-sm shadow-gray-400 hover:bg-red-500 hover:text-white hover:border-none">-</button>
                                <p class="text-xl text-center">5000</p>
                                <button class="w-8 h-10 border-2 border-red-400 text-red-400 rounded-md shadow-sm shadow-gray-400 hover:bg-red-500 hover:text-white hover:border-none">+</button>
                            </div>
                            <!-- Botón Agregar al Carrito  -->
                            <button type="submit" class="flex flex-1 ml-3 lg:ml-0 xl:ml-3 items-center justify-center rounded-md border border-transparent bg-red-500 px-8 py-2 text-base font-medium text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Agregar</button>
                        </div>
                    </form>
                    <p class="mt-4">Categorias: <strong class="text-red-700">Calzado caballeros</strong></p>
                </div>
            </div>
        </div>
        <!-- Buscardor y Categorias  -->
        <div class="px-6 lg:px-0">
            <!-- Buscador -->
            <h3 class="text-xl font-bold mt-1">Buscador</h3>
            <div class="flex lg:justify-between mt-3">
                <input type="search" name="" id="" placeholder="Buscar producto" class="rounded-lg border-2 border-gray-300 placeholder:text-gray-400 flex-1 lg:w-40 xl:flex-1 mr-3 focus:ring-red-400 focus:border-red-400">
                <button class="bg-red-500 p-3 w-12 h-12 rounded-lg lg:ml-0 hover:bg-red-600">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" height="24" viewBox="0 96 960 960" width="24">
                            <path d="M796 935 533 672q-30 26-69.959 40.5T378 727q-108.162 0-183.081-75Q120 577 120 471t75-181q75-75 181.5-75t181 75Q632 365 632 471.15 632 514 618 554q-14 40-42 75l264 262-44 44ZM377 667q81.25 0 138.125-57.5T572 471q0-81-56.875-138.5T377 275q-82.083 0-139.542 57.5Q180 390 180 471t57.458 138.5Q294.917 667 377 667Z" />
                        </svg>
                    </span>
                </button>
            </div>
            <!-- Categorias  -->
            <h3 class="text-xl font-bold mt-16">Categorias</h3>
            <div class="mt-5">
                <div class="flex items-center">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="rgb(185,28,28)" height="24" viewBox="0 96 960 960" width="32">
                            <path d="M375 829.566 318.434 773l198-198-198-198L375 320.434 629.566 575 375 829.566Z" />
                        </svg>
                    </span>
                    <a href="#" class="text-xl text-red-700 hover:text-red-400">Bolsos y Valijas</a>
                </div>
                <div class="flex items-center mt-3">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="rgb(185,28,28)" height="24" viewBox="0 96 960 960" width="32">
                            <path d="M375 829.566 318.434 773l198-198-198-198L375 320.434 629.566 575 375 829.566Z" />
                        </svg>
                    </span>
                    <a href="#" class="text-xl text-red-700 hover:text-red-400">Calzados caballeros</a>
                </div>
                <div class="flex items-center mt-3">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="rgb(185,28,28)" height="24" viewBox="0 96 960 960" width="32">
                            <path d="M375 829.566 318.434 773l198-198-198-198L375 320.434 629.566 575 375 829.566Z" />
                        </svg>
                    </span>
                    <a href="#" class="text-xl text-red-700 hover:text-red-400">Calzado damas</a>
                </div>
                <div class="flex items-center mt-3">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="rgb(185,28,28)" height="24" viewBox="0 96 960 960" width="32">
                            <path d="M375 829.566 318.434 773l198-198-198-198L375 320.434 629.566 575 375 829.566Z" />
                        </svg>
                    </span>
                    <a href="#" class="text-xl text-red-700 hover:text-red-400">Accesorios</a>
                </div>
                <div class="flex items-center mt-3">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="rgb(185,28,28)" height="24" viewBox="0 96 960 960" width="32">
                            <path d="M375 829.566 318.434 773l198-198-198-198L375 320.434 629.566 575 375 829.566Z" />
                        </svg>
                    </span>
                    <a href="#" class="text-xl text-red-700 hover:text-red-400">Carteras</a>
                </div>
                <div class="flex items-center mt-3">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="rgb(185,28,28)" height="24" viewBox="0 96 960 960" width="32">
                            <path d="M375 829.566 318.434 773l198-198-198-198L375 320.434 629.566 575 375 829.566Z" />
                        </svg>
                    </span>
                    <a href="#" class="text-xl text-red-700 hover:text-red-400">Billeteras</a>
                </div>
            </div>
        </div>
    </div>