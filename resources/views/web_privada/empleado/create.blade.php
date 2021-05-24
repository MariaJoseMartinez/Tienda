<form action="{{ url('/empleado') }}" method="post">
    @csrf
    @include('web_privada.empleado.form',['modo'=>'Crear'])
</form>
