
@extends ("layouts.layout")
@section ("contenido")

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
                                    <img src="{{asset('images/carne.jpg')}}" title="Ingredientes y receta" alt="Imagen de empanada de carne " width="150" height="120" />                                          </td>
                                </a>
                                <td>
                                    <b>Empanada de carne</b> 
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td width="300" class="bordes">
                        <table>
                            <tr>
                                <td>
                                    <a href="#">
                                    <img src="{{asset('images/atun.jpg')}}" title="Ingredientes y receta" alt="Imagen de empanada de at&uacute;n" width="150" height="120" />                                          </td>
                                </a>
                                <td>
                                    <b>Empanada de at&uacute;n</b> 
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
                                    <img src="{{asset('images/miniverdura.jpe')}}" title="Ingredientes y receta" alt="Imagen de la empanada mini de verdura" width="150" height="120" />                                          </td>
                                </a>
                                <td>
                                    <b>Empanada mini de verdura</b> 
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td width="300" class="bordes">
                        <table>
                            <tr>
                                <td>
                                    <a href="#">  
                                        <img src="{{asset('images/minicarne.jpg')}}" title="Ingredientes y receta" alt="Imagen de la empanada mini de carne" width="150" height="120" /> 
                                    </a>  
                                </td>
                                <td>
                                    <b>Empanada mini de carne</b> 
                                </td>
                            </tr>
                        </table>
                    </td>


                </tr>

            </table>
        </td>
    </tr>
</table>		   		
@endsection ("contenido")
