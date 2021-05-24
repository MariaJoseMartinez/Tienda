
@extends ("layouts.layout")
@section ("contenido")
@php
$opcion = filter_input(INPUT_POST, 'submit') ?? null;

switch ($opcion) {
case "Añadir":
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$pedido = $_POST['pedido'];
$pedido[$nombre] = $nombre;
$pedido[$cantidad] = $cantidad;
$pedido[$precio] = $precio;
break;
case "Ver Pedido":
$pedido = $_['pedido'];
$pedido = serialize( $pedido);
header("Location:pedido.php?pedido=$pedido");
exit;
}	
@end php
<table id="mainContent" style="margin:0px;">
    <tr>
        <td>
            <table width="100%">
                <tr>
                    <td width="300" class="bordes">
                        <table>
                            <tr>
                                <td width="150">
                                    <a href="#">
                                    <img src="{{asset('images/barra2.jpe')}}" title="Ingredientes y receta" alt="Imagen de barra " width="150" height="120" />                                          </td>
                                </a>
                                <td>
                                    <b>{{$dato->articulo}}</b>
                                    @auth
                                    <span>Precio:0,85€</span>
                                    @endauth
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td width="300" class="bordes">
                        <table>
                            <tr>
                                <td>
                                    <a href="#">
                                    <img src="{{asset('images/rustico.jpg')}}" title="Ingredientes y receta" alt="Imagen de barra r&uacute;stica" width="150" height="120" />                                          </td>
                                </a>
                                <td>
                                    <b>Barra r&uacute;stica</b> 
                                    @auth
                                    <span>Precio:1,50€</span>
                                    @endauth
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td width="300" class="bordes">
                        <table>
                            <tr>
                                <td>
                                    <a href="#">
                                    <img src="{{asset('images/integral.jpe')}}" title="Ingredientes y receta" alt="Imagen de barra integral" width="150" height="120" />                                          </td>
                                </a>
                                <td>
                                    <b>Barra integral</b> 
                                    @auth
                                    <span>Precio:1,20€</span>
                                    @endauth
                                </td>
                            </tr>
                        </table>
                    </td>

                    <td width="300" class="bordes">
                        <table>
                            <tr>
                                <td>
                                    <a href="#">
                                    <img src="{{asset('images/espiga.jpg')}}" title="Ingredientes y receta" alt="Imagen de barra de espiga" width="150" height="120" />                                          </td>
                                </a>
                                <td>
                                    <b>Barra de espiga</b>
                                    @auth
                                    <span>Precio:1€</span>
                                    @endauth									
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>	
                    <td width="300" class="bordes">
                        <table>
                            <tr>
                                <td>
                                    <a href="#">
                                    <img src="{{asset('images/sobao.jpe')}}" title="Ingredientes y receta" alt="Imagen del pan sobao" width="150" height="120" />                                          </td>
                                </a>
                                <td>
                                    <b>Pan sobao</b>
                                    @auth
                                    <span>Precio:1€</span>
                                    @endauth
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td width="300" class="bordes">
                        <table>
                            <tr>
                                <td>
                                    <a href="#">  
                                        <img src= "{{asset('images/centenoypasas.jpe')}}" title="Ingredientes y receta" alt="Imagen del pan de centeno y pasas" width="150" height="120" /> 
                                    </a>  
                                </td>
                                <td>
                                    <b>Pan de centeno y pasas</b>
                                    @auth
                                    <span>Precio:2€</span>
                                    @endauth
                                </td>
                            </tr>
                        </table>
                    </td>

                    <td width="300" class="bordes">
                        <table>
                            <tr>
                                <td>
                                    <a href="#">
                                    <img src="{{asset('images/molde.jpg')}}" title="Ingredientes y receta" alt="Imagen del pan de molde" width="150" height="120" />                                          </td>
                                </a>
                                <td>
                                    <b>Pan de molde</b> 
                                    @auth
                                    <span>Precio:1,20€</span>
                                    @endauth
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td width="300" class="bordes">
                        <table>
                            <tr>
                                <td>
                                    <a href="#">	
                                    <img src="{{asset('images/hogaza2.jpe')}}" title="Ingredientes y receta" alt="Imagen de la hogaza" width="150" height="120" />                                          	</td>
                                </a>
                                <td>
                                    <b>Hogaza</b>
                                    @auth
                                    <span>Precio:1,80€</span>
                                    @endauth                                            
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td width="300" class="bordes">
                        <table>
                            <tr>
                                <td>
                                    <a href="#">
                                    <img src="{{asset('images/hogazainteg.jpe')}}" title="Ingredientes y receta" alt="Imagen hogaza integral" width="150" height="120" />                                          	</td>
                                </a>
                                <td>
                                    <b>Hogaza integral</b>
                                    @auth
                                    <span>Precio:2€</span>
                                    <form action = "{{route('panaderia')}}" method = "POST">
                                        @csrf

                                        <label for="cant">Cantidad</label><input type ="text" name ="cantidad" size="15" id="cant"/><br>
                                        <input type='hidden' name='nombre' value='Hogaza integral'/>
                                        <input type='hidden' name='precio' value='2'/>
                                        <input type='hidden' name='cantidad' value='$cantidad'/>
                                        @php
                                        if (isset($pedido)) {
                                            echo <input type = 'hidden' name = 'pedido' value = '$pedido[]'/>
                                        }
                                        @endphp
                                        <input class=" m-5 boton flex items-end" type = "submit" value = "Añadir" >
                                    </form>
                                    @endauth                                            
                                </td>
                            </tr>
                        </table>
                    </td>

                    <td width="300" class="bordes">
                        <table>
                            <tr>
                                <td>
                                    <a href="#">
                                    <img src="{{asset('images/panecillo.jpe')}}" title="Ingredientes y receta" alt="Imagen de panecillo" width="150" height="120" />                                          	</td>
                                </a>
                                <td>
                                    <b>Panecillo</b>
                                    @auth
                                    <span>Precio:0,50€</span>
                                    @endauth                                           
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td width="300">
                        <table>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </td>
                    <td width="300">
                        <table>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
@auth

<form action = "{{route('panaderia')}}" method = "POST">
    @csrf
    <input class=" m-5 boton flex items-end" type = "submit" value = "Ver pedido">	</form>
<input type='hidden' name='pedido' value = '$pedido'/>
</form>
@endauth   

@endsection ("contenido")