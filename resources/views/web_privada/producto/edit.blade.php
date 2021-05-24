<form action="{{ url('/producto/'.$producto->id) }}" method="post">
    @csrf
    {{method_field('PATCH')}}
    @include('web_privada.producto.form',['modo'=>'Añadir cantidad'])
</form>

