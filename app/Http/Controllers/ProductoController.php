<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['productos'] = Producto::paginate('10');
        return view('web_privada.producto.productos', $datos);
        //$datos = \DB::table('productos')->select('articulo', 'precio', 'cantidad')->get();
        //return view ('web_privada.producto.productos',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web_privada.producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $datosPedido = request()->except('_token');
        Pedido::insert($datosPedido);
            return redirect('producto')->with('success', "Se ha creado un nuevo producto");
        } catch (Exception $ex) {
            return redirect('producto')->with('error', "No se ha podido crear el producto : $ex");
        }
        
        //return response()->json($datosPedido);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('web_privada.producto.edit', compact('producto'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        try {
            $datosProducto = request()->except(['_token', '_method']);
            Producto::where('id', '=', $id)->update($datosProducto);
        $producto = Producto::findOrFail($id);
            return redirect('producto')->with('success', "Se ha modificado la cantidad ");
        } catch (Exception $ex) {
            return redirect('producto')->with('error', "No se ha podido modificar la cantidad: $ex");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        try {
            Producto::destroy($id);
            return redirect('producto')->with('success', "Se ha eliminado el producto $id");
        } catch (Exception $ex) {
            return redirect('producto')->with('error', "No se ha podido eliminar: $ex");
        }
    }
}
