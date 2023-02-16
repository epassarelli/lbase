<<<<<<< HEAD @extends('adminlte::page') @section('title', 'Colores' )=======<x-slot name="header">
    <h1 class="text-gray-900"><a href="{{ route('dashboard') }}">Dashboard</a> | Gestión de Colores</h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

                <div class="grid grid-cols-1 sm:grid-cols-3">
                    <div>
                        <button wire:click="crear()"
                            class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3">+
                            Nuevo color</button>
                    </div>
                    <div class="py-3">
                        <x-jet-input type="text" placeholder="Texto a buscar" wire:model="search" class="w-full" />
                    </div>
                </div>

                @if ($modal)
                    @include('livewire.backend.colores-form')
                @endif

                <table class="table-auto w-full">
                    <thead>
                        <tr class="bg-gray-200 text-gray-700">
                            <th class="cursor-pointer px-4 py-2" wire:click="order('id')">ID
                                {{-- -- Ordenar -- --}}
                                @if ($sort == 'id')
                                    @if ($order == 'asc')
                                        <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                    @endif
                                @else
                                    <i class="fas fa-sort float-right mt-1"></i>
                                @endif
                            </th>
                            <th class="cursor-pointer px-4 py-2" wire:click="order('color')">Color
                                {{-- -- Ordenar -- --}}
                                @if ($sort == 'color')
                                    @if ($order == 'asc')
                                        <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                    @endif
                                @else
                                    <i class="fas fa-sort float-right mt-1"></i>
                                @endif
                            </th>
                            <th class="cursor-pointer px-4 py-2" wire:click="order('estado')">Estado
                                {{-- -- Ordenar -- --}}
                                @if ($sort == 'estado')
                                    @if ($order == 'asc')
                                        <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                    @endif
                                @else
                                    <i class="fas fa-sort float-right mt-1"></i>
                                @endif
                            </th>
                            <th class="px-4 py-2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($colores as $color)
                            <tr>
                                <td class="border px-4 py-2">{{ $color->id }}</td>
                                <td class="border px-4 py-2">{{ $color->color }}</td>
                                <td class="border px-4 py-2">@livewire(
                                    'toggle-button',
                                    [
                                        'model' => $color,
                                        'field' => 'estado',
                                    ],
                                    key($color->id)
                                )</td>
                                <td class="border px-4 py-2 text-center">
                                    <button wire:click="editar({{ $color->id }})"
                                        class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">Editar</button>
                                    <button wire:click="$emit('alertDelete',{{ $color->id }})"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Borrar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="py-3">

                    {{ $colores->links() }}

                </div>
                >>>>>>> productos

                @section('content_header')
                    <h1>Gestión de Colores</h1>
                @stop

                @section('content')

                    @if (session()->has('message'))
                        <div>
                            <h4>{{ session('message') }}</h4>
                        </div>
                    @endif

                    {{-- Minimal --}}
                    <x-adminlte-modal id="modalMin" title="Minimal" />
                    {{-- Example button to open modal --}}
                    <x-adminlte-button label="Open Modal" data-toggle="modal" data-target="#modalMin" />

                    <div class="grid grid-cols-1 sm:grid-cols-3">
                        <div>
                            <button wire:click="crear()"
                                class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3">+
                                Nuevo color</button>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" wire:click="crear()">
                                Launch demo modal
                            </button>
                        </div>
                        <div class="py-3">
                            <x-jet-input type="text" placeholder="Texto a buscar" wire:model="search" class="w-full" />
                        </div>
                    </div>

                    @if ($modal)
                        @include('livewire.backend.colores-form')
                    @endif

                    {{-- The best athlete wants his opponent at his best. --}}


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
                                    <td class="border px-4 py-2">{{ $color->id }}</td>
                                    <td class="border px-4 py-2">{{ $color->color }}</td>
                                    <td class="border px-4 py-2">{{ $color->estado }}</td>
                                    <td class="border px-4 py-2 text-center">
                                        <button wire:click="editar({{ $color->id }})"
                                            class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">Editar</button>
                                        <button wire:click="borrar({{ $color->id }})"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Borrar</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="py-3">

                        {{ $colores->links() }}

                    </div>


                    {{-- Modal --}}

                    <div class="modal" tabindex="-1" id="exampleModal">
                        {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> --}}
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Modal body text goes here.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>


                @stop

                @section('css')
                    <link rel="stylesheet" href="/css/admin_custom.css">
                @stop

                @section('js')
                    <script>
                        console.log('Hi!');
                    </script>
                @stop
