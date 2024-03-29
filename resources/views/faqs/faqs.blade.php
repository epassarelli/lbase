<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Preguntas frecuentes
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 min-h-0 h-[500px]">

                <div class="my-4">
                    <p>Las preguntas frecuentes y respuestas que listamos a continuación son justamente aquellas que los
                        usuarios y/o clientes nos realizan a menudo.</p>
                    <p>Si no encontrás la respuesta que necesitás en las preguntas frecuentes, podés completar el
                        formulario
                        de contacto y enviarnos tu consulta.</p>
                </div>

                <div id="accordion-collapse" data-accordion="collapse">
                    @foreach ($faqs as $item)
                        <div class="bg-white border border-gray-200">
                            <h2 class="mb-0 flex justify-between items-center"
                                id="accordion-collapse-heading-{{ $item->id }}">
                                <button
                                    class="accordion-button relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none"
                                    type="button" data-accordion-target="#accordion-collapse-ask-{{ $item->id }}"
                                    aria-expanded="false" aria-controls="accordion-collapse-ask-{{ $item->id }}"
                                    onclick="cambiarPosicionArrow({{ $item->id }})"> {{ $item->pregunta }} </button>
                                <span class="rotate-90">
                                    <img src="{{ asset('/img/arrow.svg') }}" alt="desplegar menu"
                                        class="arrow w-6 transition-all duration-300 ease-in-out"
                                        id="arrow-{{ $item->id }}"">
                                </span>
                            </h2>
                            <div id="accordion-collapse-ask-{{ $item->id }}" class="hidden"
                                aria-labelledby="accordion-collapse-heading-{{ $item->id }}">
                                <div class="py-4 px-5">
                                    {{ $item->respuesta }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

<script>
    const cambiarPosicionArrow = (id) => {
        const arrow = document.getElementById(`arrow-${id}`);
        const arrows = document.getElementsByClassName('arrow');
        for (let i = 0; i < arrows.length; i++) {
            if (arrows[i].id !== `arrow-${id}`) {
                arrows[i].classList.remove('-rotate-180');
            }
        }
        arrow.classList.toggle('-rotate-180');
    }
</script>
