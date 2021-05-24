@extends ("layouts.layout")

@section("contenido")
<div class=" flex justify-center  uppercase text-center text-yellow-900">Datos del cliente {{ $cliente->nombre }}</div>    
    Nombre = {{$cliente->nombre}}<br />
    Dirección  = {{$cliente->direccion}}<br />
    Teléfono = {{$cliente->telefono}}<br />
@endsection
