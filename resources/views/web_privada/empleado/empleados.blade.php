@extends ("layouts.layout")
@section ("contenido")

@if($message = Session::get('success'))
<div class="   p-4 mt-5  text-red-600 text-2xl text-center border-solid border-green-400  " role='alert' >   
        <p>{{$message}}</p> 
</div>
@endif
<div class="   p-4 mt-5 w-full" >   
        <h1 class=" flex justify-center  uppercase text-center text-yellow-900">Listado de empleados</h1> 
        <a class="float-right boton text-center p-4" href="{{url('empleado/create')}}">Añadir empleado</a>
</div>

<table class="p-4 m-5 border-solid border-2 border-green-400 w-full " >
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Estudios</th>
            <th>Idiomas</th>
            <th>Acciones</th>
        </tr> 
    </thead>
    <tbody>
        @forelse ($empleados as $empleado)
        <tr>
            <td>{{$empleado->id}}</td>
            <td>{{$empleado->nombre}}</td>
            <td>{{$empleado->direccion}}</td>
            <td>{{$empleado->telefono}}</td>
            <td>{{$empleado->estudios}}</td>
            <td>{{$empleado->idiomas}}</td>
            <td>
                <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}"> 
                    Editar 
                </a>
                |
                <form action="{{ url('/empleado/'.$empleado->id) }}" method="post">
                    @csrf
                    {{method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('¿Está seguro de que quiere borrar?')" value="Borrar" />
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7">
                <div class="bg-red-100 text-center border border-red-400 text-red-600 px-4 py-4">
                    <p><strong>No hay datos que mostrar</strong></p>
                </div>
            </td>
        </tr>
        @endforelse
    </tbody>
</table>

@if($empleados->count())
<div class="mt-3">
    {{$empleados->links()}}
</div>
@endif
@endsection ("contenido")
