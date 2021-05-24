@extends ("layouts.layout")
@section ("contenido")

@if($message = Session::get('success'))
<div class="   p-4 mt-5  text-red-600 text-2xl text-center border-solid border-green-400  " role='alert' >   
        <p>{{$message}}</p> 
</div>
@endif
<div class="   p-4 mt-5 w-full" >   
        <h1 class=" flex justify-center  uppercase text-center text-yellow-900">Listado de pedidos</h1> 
        <a class="float-right boton text-center p-4" href="{{url('hacerPedido')}}">Hacer pedido</a>
</div>

<table class="p-4 m-5 border-solid border-2 border-green-400 w-full " >
    <thead>
        <tr>
            <th>Id</th>
            <th>Fecha</th>
            <th>Articulo</th>
            <th>Precio</th>
            <th>Cantiad</th>
            <th>Cliente</th>
        </tr> 
    </thead>
    <tbody>
        @forelse ($pedidos as $pedido)
        <tr>
            <td>{{$pedido->id}}</td>
            <td>{{$pedido->fecha}}</td>
            <td>{{$pedido->articulo}}</td>
            <td>{{$pedido->precio}}</td>
            <td>{{$pedido->cantidad}}</td>
            <td>{{$pedido->cliente}}</td>
            
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

@if($pedidos->count())
<div class="mt-3">
    {{$pedidos->links()}}
</div>
@endif
@endsection ("contenido")
