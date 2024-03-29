<?php

namespace App\Http\Controllers;

use App\Http\Livewire\MercadoPago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Models\Log_pago;



class MpController extends Controller
{

    //este metodo recibe el pago de mercado pago cuando paga
    //pero solo si en mp le da click al boton volver al sitio
    //sino no manda nada
    //si el pago se efectuo, mp envia una notificacion
    //y lo recibinmos en el controller webhooks por post

    public function pago($datos, Request $request) {
            // return $request->all();
            $payment_id = $request->get('payment_id');
            $response = Http::get(
                config('services.mercadopago.url_getpago') .  $payment_id  . "?access_token=" . config('services.mercadopago.token')
            );


            $response_json = json_decode($response);
            //dump($response_jason->external_reference);
            //dump($response_jason->status);
            //dump($response_jason);
            //dump($response_jason->notification_url);


              //actualiza cabecera
            //vamos a grabar el pedido cuando viene por post unicamente
            //  Log_pago::Create(
            //     [
            //         'idpedido'        => $response_json->external_reference,
            //         'operacion_pago'  => $payment_id,
            //         'status'          => $response_json->status,
            //         'log'             => $response,
            //         'formapago_id'    => '2',
            //     ]);

            //no tiene emit porque no es un controlador livewire
                //$this->emit('mensajePositivo', ['mensaje' => 'El pago se realizo con exito']);
                return redirect()->to('/shop');

    }
}
