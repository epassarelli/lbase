<?php

namespace App\View\Components;

use Illuminate\View\Component;

class producto extends Component
{
    public $image;
    public $nombre;
    public $descripcion;
    public $fechahoy;
    public $precioOferta;
    public $precioLista;
    public $ofertaDesde;
    public $ofertaHasta;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image, $nombre, $descripcion = "", $precioLista = '', $precioOferta = '', $fechahoy = '', $ofertaDesde = '', $ofertaHasta = "")
    {
        $this->image = $image;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->fechahoy = $fechahoy;
        $this->precioLista = $precioLista;
        $this->precioOferta = $precioOferta;
        $this->ofertaDesde = $ofertaDesde;
        $this->ofertaHasta = $ofertaHasta;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.producto');
    }
}
