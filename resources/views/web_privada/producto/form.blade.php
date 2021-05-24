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
                <h1 class="text-3xl text-yellow-900">{{$modo}}</h1>
                <label for='Id'>Id</label>
                <input type="text" name="id" id="Id" value="{{$producto->id}}">
                    <br>
                <label for='nombre'>Articulo</label>
                <input type="text" name="articulo" id="nombre" value="{{isset($producto->articulo)?$producto->articulo:''}}">
                    <br>
                <label for='precio'>Precio</label>
                <input type="text" name="precio" id="precio" value="{{isset($producto->precio)?$producto->precio:''}}">
                    <br>
                <label for='cantidad'>Cantidad</label>
                                        <input type="text" name="cantidad" id="cantidad" value="{{isset($producto->cantidad)?$producto->cantidad:''}}">
                                            <br>
                                                <br>
                                                    <br>
                                                        <input type="submit" value="{{$modo}}">
                                                            <br>
                                                                </div>
                                                                </div>
                                                                </body>
                                                                </html>