@extends('adminlte::page')

@section('content')

    <p>Welcome to this beautiful admin panel.</p>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <table class="table ">
        <thead>
            <tr>
                <th class="px-2 py-2 border bg-gray-300">9/1 al 13/1</th>
                <th class="px-2 py-2 border">16/1 al 20/1</th>
                <th class="px-2 py-2 border">23/1 al 27/1</th>
                <th class="px-2 py-2 border">30/1 al 3/2</th>
                <th class="px-2 py-2 border">6/2 al 10/2</th>
                <th class="px-2 py-2 border">13/2 al 17/2</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="px-2 py-2 border bg-green-500">
                    <div class="inline-flex">
                        <img class="img-thumbnail rounded-circle" width="32px" src="{{ asset('storage/edu.jpg') }}"
                            alt="Edu">
                        <span class="py-2"><a href="{{ route('testimonios') }}"> Bk-
                                Testimonios</a></span>
                    </div>
                </td>
                <td class="px-2 py-2 border">
                    <div class="inline-flex">
                        <img class="img-thumbnail rounded-circle" width="32px" src="{{ asset('storage/kari.jpg') }}"
                            alt="Kari">
                        <span class="py-2"><a href="{{ route('faqs') }}"> Bk- FAQs</a></span>
                    </div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td class="px-2 py-2 border bg-green-500">
                    <div class="inline-flex">
                        <img class="img-thumbnail rounded-circle" width="32px" src="{{ asset('storage/kari.jpg') }}"
                            alt="Kari">
                        <span class="py-2"><a href="{{ route('colores') }}"> Bk- Colores</a></span>
                    </div>
                </td>
                <td class="px-2 py-2 border bg-green-500">
                    <div class="inline-flex">
                        <img class="img-thumbnail rounded-circle" width="32px" src="{{ asset('storage/edu.jpg') }}"
                            alt="Edu">
                        <span class="py-2"><a href="{{ route('productos') }}"> Bk-
                                productos</a></span>
                    </div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td class="px-2 py-2 border bg-green-500">
                    <div class="inline-flex">
                        <img class="img-thumbnail rounded-circle" width="32px" src="{{ asset('storage/edu.jpg') }}"
                            alt="Edu">
                        <span class="py-2"><a href="{{ route('categorias') }}"> Bk-
                                Categorias</a></span>
                    </div>
                </td>
                <td class="px-2 py-2 border bg-green-500">
                    <div class="inline-flex">
                        <img class="img-thumbnail rounded-circle" width="32px" src="{{ asset('storage/quien.jpg') }}"
                            alt="Quien?">
                        <span class="py-2"><a href="{{ route('productos.index') }}"> Ft-
                                Categorias</a></span>
                    </div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td class="px-2 py-2 border bg-green-500">
                    <div class="inline-flex">
                        <img class="img-thumbnail rounded-circle" width="32px" src="{{ asset('storage/kari.jpg') }}"
                            alt="Kari">
                        <span class="py-2"><a href="{{ route('talles') }}"> Bk- talles</a></span>
                    </div>
                </td>
                <td class="px-2 py-2 border">
                    <div class="inline-flex">
                        <img class="img-thumbnail rounded-circle" width="32px" src="{{ asset('storage/edu.jpg') }}"
                            alt="Edu">
                        <span class="py-2"><a href="{{ route('productos') }}"> Bk-
                                Prod. Img-Color</a></span>
                    </div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td class="px-2 py-2 border">
                    <div class="inline-flex">
                        <img class="img-thumbnail rounded-circle" width="32px" src="{{ asset('storage/edu.jpg') }}"
                            alt="Edu">
                        <span class="py-2"><a href="{{ route('sitio') }}"> Bk-
                                sitio</a></span>
                    </div>
                </td>
                <td class="px-2 py-2 border bg-green-500">
                    <div class="inline-flex">
                        <img class="img-thumbnail rounded-circle" width="32px" src="{{ asset('storage/quien.jpg') }}"
                            alt="Quien?">
                        <span class="py-2"><a href="shop/1"> Ft-
                                Productos</a></span>
                    </div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td class="px-2 py-2 border bg-green-500">
                    <div class="inline-flex">
                        <img class="img-thumbnail rounded-circle" width="32px" src="{{ asset('storage/kari.jpg') }}"
                            alt="Kari">
                        <span class="py-2"><a href="{{ route('presentaciones') }}"> Bk-
                                presentaciones</a></span>
                    </div>
                </td>
                <td class="px-2 py-2 border">
                    <div class="inline-flex">
                        <img class="img-thumbnail rounded-circle" width="32px" src="{{ asset('storage/quien.jpg') }}"
                            alt="Quien?">
                        <span class="py-2"><a href="shop/1/1"> Ft-
                                Detalle Prod</a></span>
                    </div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td class="px-2 py-2 border bg-green-500">
                    <div class="inline-flex">
                        <img class="img-thumbnail rounded-circle" width="32px" src="{{ asset('storage/edu.jpg') }}"
                            alt="Edu">
                        <span class="py-2"><a href="{{ route('parametros') }}"> Bk-
                                parametros</a></span>
                    </div>
                </td>
                <td class="px-2 py-2 border bg-green-500">
                    <div class="inline-flex">
                        <img class="img-thumbnail rounded-circle" width="32px" src="{{ asset('storage/quien.jpg') }}"
                            alt="Quien?">
                        <span class="py-2"><a href="shop/1/1"> Ft-
                                Faqs</a></span>
                    </div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td class="px-2 py-2 border bg-green-500">
                    <div class="inline-flex">
                        <img class="img-thumbnail rounded-circle" width="32px" src="{{ asset('storage/kari.jpg') }}"
                            alt="Kari">
                        <span class="py-2"><a href="{{ route('formasdeentrega') }}"> Bk- formas de
                                entrega</a></span>
                    </div>
                </td>
                <td class="px-2 py-2 border">
                    <div class="inline-flex">
                        <img class="img-thumbnail rounded-circle" width="32px" src="{{ asset('storage/quien.jpg') }}"
                            alt="Quien?">
                        <span class="py-2"><a href="shop/1/1"> Ft-
                                Testimonios</a></span>
                    </div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td></td>
                <td class="px-2 py-2 border bg-green-500">
                    <div class="inline-flex">
                        <img class="img-thumbnail rounded-circle" width="32px" src="{{ asset('storage/quien.jpg') }}"
                            alt="Quien?">
                        <span class="py-2"><a href="{{ route('movimientos') }}">Bk-
                                Stock, ing y egr</a></span>
                    </div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td></td>
                <td class="px-2 py-2 border bg-green-500">
                    <div class="inline-flex">
                        <img class="img-thumbnail rounded-circle" width="32px" src="{{ asset('storage/quien.jpg') }}"
                            alt="Quien?">
                        <span class="py-2"><a href="{{ route('historias') }}"> Bk-
                                Stock vista</a></span>
                    </div>
                </td>
                <td><a href="{{ route('dashboard') }}">Pedidos (Falta)</a></td>
                <td><a href="{{ route('dashboard') }}">Stock (Falta)</a></td>
                <td><a href="{{ route('dashboard') }}">Movimientos de Stock (Falta)</a></td>
                <td>
                    <a href="{{ route('talles') }}">Contacto</a>
                </td>
            </tr>
        </tbody>

    </table>

@stop
