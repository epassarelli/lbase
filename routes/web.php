<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Livewire\Carrito;
use App\Http\Livewire\MercadoPago;
use App\Http\Livewire\Nosotros;
use App\Http\Livewire\ProductosFront;
use App\Http\Livewire\ProductoFront;
use App\Http\Livewire\Sucursales;
use App\Http\Controllers\WebhooksController;
use App\Http\Controllers\MpController;
use App\Models\Galeria;
use App\Models\Producto_imagen;


Route::get('/shop', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/shop/{categoria}', [ProductoController::class, 'categoria'])->name('productos.categoria');
Route::get('/shop/{categoria}/{id}', ProductoFront::class)->name('productos.show');
Route::get('/carrito', Carrito::class)->name('carrito');

Route::get('/contacto', [ContactController::class, 'index'])->name('contacto');
Route::post('/contacto', [ContactController::class, 'store'])->name('contacto.store');

Route::get('/nosotros', Nosotros::class)->name('nosotros');
Route::get('/sucursales', Sucursales::class)->name('sucursales');
Route::get('preguntas-frecuentes', [FaqController::class, 'index'])->name('faqs.index');

// Pagos y métodos de pago
Route::get('/mercadopago', MercadoPago::class)->name('mercadopago');
Route::get('/pagomp/{datos}/pago', [MpController::class, 'pago'])->name('pagomp.pago'); //url de testing
Route::post('/webhooks',  WebhooksController::class);


Route::get('/', function () {

    $fotos_slider = Galeria::where('estado','=',1)->get();
    $destacados = Producto_imagen::select(['productos_imagenes.producto_id','productos.nombre','productos.desCorta','productos_imagenes.file_path'])
    ->join('productos', 'productos_imagenes.producto_id', '=', 'productos.id')
    ->where('productos.destacar', '=', 1)
    ->groupBy('productos_imagenes.producto_id','productos.nombre','productos.desCorta','productos_imagenes.file_path')
    ->get();
    for ($i = 0; $i < count($destacados); $i++) {
            $destacados[$i]->file_path = basename($destacados[$i]->file_path);
    }

    return view('welcome',['slider' => $fotos_slider,'destacados' => $destacados]);
})->name('welcome');
