<form action="{{ url('/pedido/'.$producto->id) }}" method="post">
    @csrf
    {{method_field('PATCH')}}
    @include('web_privada.pedido.form',['modo'=>'Añadir cantidad'])
</form>

