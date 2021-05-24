<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::view ("panaderia", "web_publica.panaderia");
Route::view ("pasteleria", "web_publica.pasteleria");
Route::view ("empanadas", "web_publica.empanadas");
Route::view ("contacto", "web_publica.contacto");
Route::view ("index", "index");
//Route::view ("pedido", "web_privada.pedido")->name("pedido")->middleware("auth");
Route::view ("hacerPedido", "web_privada.pedido.hacerPedido");
Route::resource ("cliente", \App\Http\Controllers\ClienteController::class);
Route::resource ("empleado", App\Http\Controllers\EmpleadoController::class);
Route::resource ("factura", App\Http\Controllers\FacturaController::class);
Route::resource ("producto", App\Http\Controllers\ProductoController::class);
Route::resource ("pedido", App\Http\Controllers\PedidoController::class);
Route::resource ("idiomas", App\Http\Controllers\IdiomaController::class);