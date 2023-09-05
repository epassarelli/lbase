<div
    class="bg-[#E4E4E4] overflow-hidden py-2 px-3 h-full shadow-md shadow-gray-400 rounded-md relative hover:bg-gray-300">
    <div class="w-full drop-shadow-md h-40">
        <img src="{{ asset('storage/productos/' . $image) }}" alt="{{ $nombre }}" class="w-auto object-contain">
    </div>
    <div class="mt-6">
        <h4 class="text-base line-clamp-2">{{ $nombre }}</h4>
        @if ($ofertaDesde <= $fechahoy and $ofertaHasta >= $fechahoy)
            <p class="mt-3 text-sm text-gray-400 line-through">$ {{ $precioLista }}</p>
            <span class="absolute top-2 z-10"><img src="{{ asset('img/oferta.png') }}" alt="producto en oferta"
                    class="w-16 opacity-75"></span>
            <p class="font-bold mt-3 text-xl">$ {{ $precioOferta }}</p>
        @else
            <p class="font-bold mt-5 text-xl">$ {{ $precioLista }}</p>
        @endif
    </div>
</div>
