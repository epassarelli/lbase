<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">



        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">


            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4 grid grid-cols-1 sm:grid-cols-3 gap-2">


                <div>
                    <label for="estado_id" class="block text-gray-700 text-sm font-bold mb-2">Estado</label>
                    <select
                        class="shadow appearance-none border rounded py-2 px-0 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        wire:model="estado_id">
                        <option value="0">Selecciona un Estado</option>
                        @foreach ($estados_pedidos as $p)
                            <option value="{{ $p->id }}">{{ $p->nombre }}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="estado_id" />
                </div>


                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse col-span-3">

                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">

                        <button wire:click.prevent="guardarestado()" type="button"
                            class="inline-flex justify-center w-full rounded-md
                                    border border-transparent px-4 py-2 bg-purple-600 text-base leading-6 font-medium text-white shadow-sm
                                     hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition
                                     ease-in-out duration-150 sm:text-sm sm:leading-5">Guardar</button>


                        <button wire:click="cerrarModalEstado()" type="button"
                            class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">Cerrar</button>
                    </span>
                </div>

            </div>
        </div>


    </div>
