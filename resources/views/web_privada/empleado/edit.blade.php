<form action="{{ url('/empleado/'.$empleado->id) }}" method="post">
    @csrf
    {{method_field('PATCH')}}
    @include('web_privada.empleado.form',['modo'=>'Editar'])
</form>

