
@extends ("layouts.layout")
@section ("contenido")
@if($message = Session::get('success'))
<div class="   p-4 mt-5  text-red-600 text-2xl text-center border-solid border-green-400  " role='alert' >   
        <p>{{$message}}</p> 
</div>
@endif
<div class="   p-4 mt-5 w-full" >
    <a class="float-right boton text-center p-4" href="{{url('/factura/create')}}">Añadir factura</a></div>
<tabla filas_serializadas='@json($filas)' campos_serializados=@json($campos) nombre_tabla='factura'>

    </tabla>
@endsection
