<x-backend-layout>

    @section('content')
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>



        <x-jet-input type="text" placeholder="Texto a buscar" wire:model="search" />
        <p>{{ $search }}</p>


        <table class="table stripped">
            <thead>
                <tr class="">
                    <th class="cursor-pointer px-4 py-2" wire:click="order('id')">COD</th>
                    <th class="cursor-pointer px-4 py-2" wire:click="order('color')">Color</th>
                    <th class="cursor-pointer px-4 py-2" wire:click="order('estado')">Estado</th>
                    <th class="px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($colores as $color)
                    <tr>
                        <td>{{ $color->id }}</td>
                        <td>{{ $color->color }}</td>
                        <td>{{ $color->estado }}</td>
                        <td>
                            <button wire:click="editar({{ $color->id }})" type="button"
                                class="btn btn-warning">Editar</button>
                            <button wire:click="borrar({{ $color->id }})" type="button"
                                class="btn btn-danger">Borrar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="py-3">

            {{ $colores->links() }}

        </div>
    @endsection


</x-backend-layout>
