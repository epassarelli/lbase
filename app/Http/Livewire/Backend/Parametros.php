<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;
use App\Models\Parametro;
use Livewire\WithPagination;

class Parametros extends Component
{
    public $parametro, $descripcion, $default, $valor, $detalle, $relacionados, $id_parametro;

    public $modal = false;
    public $search;
    public $sort = 'id';
    public $order = 'desc';

    protected $parametros;

    use WithPagination;

    public function render()
    {
        $this->parametros = Parametro::where('descripcion', 'like', '%' . $this->search . '%')
            ->orWhere('detalle', 'like', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->order)
            ->paginate(5);

        //$this->parametros = Parametro::all();
        return view('livewire.backend.parametros', ['parametros' => $this->parametros]);
    }

    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal()
    {
        $this->modal = true;
    }

    public function cerrarModal()
    {
        $this->modal = false;
    }

    public function limpiarCampos()
    {
        $this->descripcion = '';
        $this->default = '';
        $this->valor = '';
        $this->detalle = '';
        $this->relacionados = '';
        $this->id_parametro = '';
    }

    public function editar($id)
    {
        $parametro = Parametro::findOrFail($id);
        $this->id_parametro = $id;
        $this->descripcion = $parametro->descripcion;
        $this->default = $parametro->default;
        $this->valor = $parametro->valor;
        $this->detalle = $parametro->detalle;
        $this->relacionados = $parametro->relacionados;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        Parametro::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        Parametro::updateOrCreate(
            ['id' => $this->id_parametro],
            [
                'descripcion' => $this->descripcion,
                'default' => $this->default,
                'valor' => $this->valor,
                'detalle' => $this->detalle,
                'relacionados' => $this->relacionados
            ]
        );

        session(['idCarrito' => $this->id_parametro]);

        session()->flash(
            'message',
            $this->id_parametro ? '??Actualizaci??n exitosa!' : '??Alta Exitosa!'
        );

        $this->cerrarModal();
        $this->limpiarCampos();
    }

    public function order($sort)
    {
        if ($this->sort == $sort) {

            if ($this->order == 'desc') {
                $this->order = 'asc';
            } else {
                $this->order = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->order = 'asc';
        }
    }
}
