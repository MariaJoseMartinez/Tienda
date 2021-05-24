<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        // $datos = \DB::table('empleados')->select('id', 'nombre', 'direccion', 'telefono', 'estudios')->get();
        //return view ('web_privada.empleado.empleados',compact('datos'));
        $datos['empleados'] = Empleado::paginate('10');
        return view('web_privada.empleado.empleados', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('web_privada.empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        try {
            $datosEmpleado = request()->except('_token');
        Empleado::insert($datosEmpleado);
            return redirect('empleado')->with('success', "Se ha creado un nuevo empleado");
        } catch (Exception $ex) {
            return redirect('empleado')->with('error', "No se ha podido crear el empleado : $ex");
        }
        
        //return response()->json($datosEmpleado);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $empleado = Empleado::findOrFail($id);
        return view('web_privada.empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        try {
            $datosEmpleado = request()->except(['_token', '_method']);
        Empleado::where('id', '=', $id)->update($datosEmpleado);
        $empleado = Empleado::findOrFail($id);
            return redirect('empleado')->with('success', "Se ha editado el empleado $id");
        } catch (Exception $ex) {
            return redirect('empleado')->with('error', "No se ha podido editar: $ex");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        try {
            Empleado::destroy($id);
            return redirect('empleado')->with('success', "Se ha eliminado el empleado $id");
        } catch (Exception $ex) {
            return redirect('empleado')->with('error', "No se ha podido eliminar: $ex");
        }
    }

}
