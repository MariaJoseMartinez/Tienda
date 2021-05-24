<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Arr;

class FacturaController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //$datos = \DB::table('facturas')->select('id', 'fecha', 'importe', 'cliente')->get();
        //return view ('web_privada.facturas',compact('datos'));
        $facturas = Factura::All();
        $campos = $facturas[0]->getAttributes();
        unset($campos['created_at']);
        unset($campos['updated_at']);
        $campos = array_keys($campos);
        return view("facturas.listado", ['filas' => $facturas, 'campos' => $campos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $clientes = Cliente::All('id');
        return view('facturas.create', ['clientes' => $clientes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $factura = new Factura($request->input());
        $factura->saveOrFail();
        $facturas = Factura::All();
        return view('facturas', ['facturas' => $facturas]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function show(Factura $factura) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function edit(Factura $factura) {
        $clientes = Cliente::All('id');
        return view('facturas.edit', ['factura' => $factura, 'clientes' => $clientes]);
        //$clientes = Cliente::findOrFail($id);
        //return view('web_privada.factura.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factura $factura) {
        $factura->fill($request->input())->saveOrFail();
        return redirect()->route('facturas.listado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factura $factura) {
        $factura->delete();
        return redirect()->route('facturas.listado');
    }

}
