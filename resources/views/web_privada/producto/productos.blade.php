@extends ("layouts.layout")
@section ("contenido")

@if($message = Session::get('success'))
<div class="   p-4 mt-5  text-red-600 text-2xl text-center border-solid border-green-400  " role='alert' >   
    <p>{{$message}}</p> 
</div>
@endif
<div class="   p-4 mt-5 w-full" >   
    <h1 class=" flex justify-center  uppercase text-center text-yellow-900">Listado de productos</h1>
</div>

<table class="p-4 m-5 border-solid border-2 border-green-400 w-full " >
    <thead>
        <tr>
            <th>Articulo</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Añadir Cantidad</th>
            <th>Total</th>
        </tr> 
    </thead>
    <tbody>
        @forelse ($productos as $producto)
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->articulo}}</td>
            <td>{{$producto->precio}} €</td>
            <td>{{$producto->cantidad}} </td>
            <td>
                <a href="{{ url('/producto/'.$producto->id.'/edit') }}"> 
                    Añadir cantidad 
                </a>
            </td>
            <td>total</td>
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

@if($productos->count())
<div class="mt-3">
    {{$productos->links()}}
</div>
@endif
@endsection ("contenido")
