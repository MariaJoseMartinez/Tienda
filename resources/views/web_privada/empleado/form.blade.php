<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <title>Migas amigas</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    </head>

    <body  class="body bg-yellow-200 h-screen">
        <div id= "app">
            <div  class=" bg-yellow-200 h-screen">
                <div class="text-center text-5xl py-10 px-50">Migas amigas</div>
                <h1 class="text-3xl text-yellow-900">{{$modo}} empleado</h1>
<label for='Id'>Id</label>
<input type="text" name="id" id="Id" value="{{isset($empleado->id)?$empleado->id:''}}">
<br>
<label for='nombre'>Nombre</label>
<input type="text" name="nombre" id="nombre" value="{{isset($empleado->nombre)?$empleado->nombre:''}}">
<br>
<label for='direccion'>Dirección</label>
<input type="text" name="direccion" id="direccion" value="{{isset($empleado->direccion)?$empleado->direccion:''}}">
<br>
<label for='telefono'>Teléfono</label>
<input type="text" name="telefono" id="telefono" value="{{isset($empleado->telefono)?$empleado->telefono:''}}">
<br>
<label for='estudios'>Estudios</label>
<input type="text" name="estudios" id="estudios" value="{{isset($empleado->estudios)?$empleado->estudios:''}}">
<br>
<label for='idiomas'>Idiomas</label>
<input type="text" name="idiomas" id="idiomas" value="{{isset($empleado->idiomas)?$empleado->idiomas:''}}">
<br>
<input type="submit" value="{{$modo}} datos">
<br>
    </div>
    </div>
    </div>
</body>
</html>
