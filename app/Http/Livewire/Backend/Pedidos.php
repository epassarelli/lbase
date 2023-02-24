<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;
use Livewire\WithPagination;


use App\Models\Pedido;
use App\Models\Producto;
use App\Models\Color;
use App\Models\Talle;
use App\Models\Sku;
use App\Models\Formadeentrega;
use App\Models\Provincia;
use App\Models\Localidad;
use App\Models\Movimiento;






class Pedidos extends Component
{

    public $modal = false;
    public $modalitem = false;
    public $search;
    public $sort = 'id';
    public $order = 'desc';

    //campos vista
    public $nombre,$apellido,$entrega_id,$fecha,$telefono,$correo,$transac_mp;
    public $del_calle,$del_nro,$del_piso,$del_dpto,$del_costo,$status_mp;
    public $producto_id,$talle_id,$color_id,$cantidad,$precio,$total;
    public $formapago_id,$observaciones,$detail_mp;

    public $provincia_id = 0;
    public $localidad_id = 0;
    public $movimientos = array();
    // este campo activo o desactiva los imput de direccion
    // configurador en las formasdeentrega
    public $pidedirec = 0;
    public $cantitems = 0;
    public $edicion = false;


    //tablas usadas
    protected $productos,$colores,$talles,$pedidos,$entregas,$provincias,$localidades;

    protected $listeners = ['delete'];

    use WithPagination;


    public function render()
    {

        if ($this->fecha == null) {
            $this->fecha = date('Y-m-d H:i:s');
        }
        $this->cantitems  = count($this->movimientos);

        if ($this->entrega_id != 0) {
            $this->pidedirec = Formadeentrega::where('id',$this->entrega_id)
                 ->value('pidedirec');
            $this->delcosto = Formadeentrega::where('id',$this->entrega_id)
                 ->value('costo');


        }            
        if ($this->producto_id != 0) {

            //    $precio = Producto::where('id',$this->producto_id)
            //     ->value('preciolista');
                $precio = Producto::where('id',$this->producto_id)
                   ->first();

                $ldate = date('Y-m-d H:i:s');
                if(is_null($precio->ofertaDesde) or is_null($precio->ofertaHasta)) {
                    //no se cargaron datos de las fechas de las ofertas
                    $this->precio =  $precio->precioLista;
                }else{
                    if ($precio->ofertaDesde <= $ldate and $precio->ofertaHasta >= $ldate) {
                        $this->precio =  $precio->precioOferta;
                    }else{
                        $this->precio =  $precio->precioLista;
                    }
                }

                if (is_numeric($this->cantidad)) {
                   $this->total  =  $this->precio*$this->cantidad;
                  }else{
                    $this->total  =  0;
                }

        }



        $this->pedidos = Pedido::where('apellido', 'like', '%' . $this->search . '%')
        ->orderBy($this->sort, $this->order)
        ->paginate(5);

        $this->productos  = Producto::where('estado','=',1)->get();
        $this->colores  = Color::all();
        $this->talles  = Talle::all();
        $this->entregas  = Formadeentrega::where('estado','=',1)->get();
        $this->provincias  = Provincia::where('estado','=',1)->get();

        $this->localidades  = Localidad::where('estado','=',1)
                            ->where('provincia_id','=', $this->provincia_id)
                            ->orderby('nombre')
                            ->get();

        //dd(auth()->user());

        return view('livewire.backend.pedidos',
                        [
                         'pedidos' => $this->pedidos,
                         'productos' => $this->productos,
                         'colores' => $this->colores,
                         'talles' => $this->talles,
                         'entregas' => $this->entregas,
                         'provincias' => $this->provincias,
                         'localidades' => $this->localidades,
                        ]);
    }


    protected function rules() {
        if ($this->modalitem==1) {  //valida el item
                return [
                    'producto_id' => 'required|not_in:0',
                    'color_id' => 'required|not_in:0',
                    'talle_id' => 'required|not_in:0',
                    'cantidad' => 'required|not_in:0',
                ];
        }else{
            if ($this->pidedirec==1) { //valida pedido con direccion requerida
                return [
                    'entrega_id' => 'required|not_in:0',
                    'apellido' => 'required|string',
                    'nombre' => 'required|string',
                    'del_calle' => 'required',
                    'del_nro' => 'required',
                    'entrega_id' => 'required|not_in:0',
                    'provincia_id' => 'required|not_in:0',
                    'localidad_id' => 'required|not_in:0',
                    'telefono' => 'required',
                    'correo' => 'required|email'
                ]; 
            }else{  //valida pedido sin direccion requerida
                return [
                    'entrega_id' => 'required|not_in:0',
                    'apellido' => 'required|string',
                    'nombre' => 'required|string',
                    'entrega_id' => 'required|not_in:0',
                    'telefono' => 'required',
                    'correo' => 'required|email'
                ]; 
            }    
        }
    }

//agrega un nuevo pedido
public function crear()
{
    $this->limpiarCampos();
    $this->abrirModal();
}


public function finalizar()
{
    
    $this->indice_productos = count($this->movimientos);
    $costototal = 0;
    for($i=0;$i<count($this->movimientos);$i++) {
        $costototal = $costototal + ($this->movimientos[$i]['cantidad']*$this->movimientos[$i]['precio']);
    }


    Pedido::updateOrCreate(
        ['id' => $this->id,
        ],
        [
            'apellido'      => $this->apellido,
            'nombre'        => $this->nombre,
            'cantidadItems' => $this->indice_productos,
            'cliente_id'    => 0,
            'correo'        => $this->correo,
            'del_calle'     => $this->del_calle,
            'del_nro'       => $this->del_nro,
            'del_piso'      => $this->del_piso,
            'del_dpto'      => $this->del_dpto,
            'del_costo'     => $this->del_costo,
            'entrega_id'    => $this->entrega_id,
            'estado'        =>  1,
            'fecha'         => $this->fecha,
            'formaPago_id'  => $this->formapago_id,
            'provincia_id'  => $this->provincia_id,
            'localidad_id'  => $this->localidad_id,
            'observaciones' => $this->observaciones,
            'status_mp'     => $this->status_mp,
            'subTotal'      => $costototal,
            'sucursal_id'   => 0,
            'telefono'      => $this->telefono,
            'total'         => $this->del_costo+$costototal,
            'transac_mp'    => $this->transac_mp,
            'detail_mp'    => $this->detail_mp
        ]);

   
        for($i=0;$i<count($this->movimientos);$i++) {
             ////obtenemos la cantidad original de stock
             $canti_ori = Sku::where('producto_id',$this->movimientos[$i]['producto_id'])
                 ->where('talle_id',$this->movimientos[$i]['talle_id'])
                 ->where('color_id',$this->movimientos[$i]['color_id'])
                 ->value('stock');
            if($canti_ori===null) {
                   $canti_ori=0;
            }
            //// actualizamos stock sku
            $cantidad = $this->movimientos[$i]['cantidad']+$canti_ori;
            Sku::updateOrCreate(
                 ['producto_id' => $this->movimientos[$i]['producto_id'],
                  'talle_id'    => $this->movimientos[$i]['talle_id'],
                  'color_id'    => $this->movimientos[$i]['color_id'],
                 ],
                 [
                     'stock' =>$cantidad,
                     'estado' => 1
            ]);
            //// grabamos en historia en movimiento
            //obtengo el id del sku
            $sku_id = Sku::where('producto_id',$this->movimientos[$i]['producto_id'])
             ->where('talle_id',$this->movimientos[$i]['talle_id'])
             ->where('color_id',$this->movimientos[$i]['color_id'])
             ->value('id');
             Movimiento::Create([
                 'tipoMovimiento_id' => 2, 
                 'sku_id' => $sku_id,
                 'cantidad' => $cantidad,
                 'pedido_id' => 0,
                 'estado' => 0,   //no se que es
                 'user_id' => auth()->user()->id,
            ]);

        }       
        session()->flash('message','¡Actualización exitosa!');
        $this->emit('alertSave');
        $this->limpiarCampos();
        $this->movimientos=[];
    
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


    public function abrirModal()
    {
        $this->modal = true;
    }

    public function cerrarModal()
    {
        $this->modal = false;
        $this->movimientos=[];

    }


    //nuevo item del pedido
    public function nuevo() {
        $this->limpiarCamposItem();
        $this->abrirModalItem();
    }

    //elimina item
    public function delete($id)
    {
        unset($this->movimientos[$id]);
        //re acomoda el vector para que noque posiciones null
        $this->movimientos = array_values($this->movimientos);
    }

    //abre modal item
    public function abrirModalItem()
    {
        $this->modalitem = true;
    }

    //cierra modal item sin grabar
    public function cerrarModalItem()
    {
        $this->limpiarCampositem();
        $this->modalitem = false;
    }

   //guarda item
   public function guardaritem()
   {


    $this->validate();



       $this->indice_productos = count($this->movimientos);

       $this->producto_nombre  = Producto::where('id',$this->producto_id)->value('nombre');
       $this->color_nombre  = Color::where('id',$this->color_id)->value('color');
       $this->talle_nombre  = Talle::where('id',$this->talle_id)->value('talle');



      $this-> movimientos[ $this->indice_productos] = [
                        'producto_id' => $this->producto_id,
                        'producto_descripcion' => $this->producto_nombre,
                        'color_id' => $this->color_id,
                        'color' => $this->color_nombre,
                        'talle_id' => $this->talle_id,
                        'talle' =>  $this->talle_nombre,
                        'cantidad' => $this->cantidad,
                        'precio' =>  $this->precio];

       $this->emit('alertSave');
       $this->limpiarCamposItem();
       $this->modalitem=false;
   }



    //inicializa las propiedades para el alta del pedido
    public function limpiarCampos()
    {
         $this->apellido='';
         $this->nombre='';
         $this->indice_productos=0;
         $this->cliente_id=0;
         $this->correo='';
         $this->del_calle='';
         $this->del_nro='';
         $this->del_piso='';
         $this->del_dpto='';
         $this->del_costo=0;
         $this->entrega_id=0;
         $this->estado=1;
         $this->fecha=date('Y-m-d H:i:s');
         $this->formapago_id=0;
         $this->provincia_id=0;
         $this->localidad_id=0;
         $this->observaciones='';
         $this->status_mp='';
         $this->subTotal = 0;
         $this->sucursal_id= 0;
         $this->telefono='';
         $this->total=0;
         $this->transac_mp=0;
         $this->detail_mp='';
        
    }

    public function limpiarCamposItem()
    {
            $this->producto_id=0;
            $this->talle_id=0;
            $this->color_id=0;
            $this->cantidad=0;
            $this->precio=0;
            $this->total=0;

    }



}
