@extends ("layouts.layout")
@section ("contenido")
<div class="border m-2 border-green-800" > 
    <h1 class="text-3xl text-yellow-700  text-center">Cliente: {{auth()->user()->name}}</h1>

    <fieldset class=" p-5 m-40 border border-yellow-800 w-1/2">

        <form   class="text-3xl" action="{{route('pedido.store')}}" method="POST">
            @csrf


            <label for="id">Id Pedido</label>
            <input class="border m-2 border-green-800 text-3xl text-blue-700" type="text" name="id"><br />
            <label for="articulo">Articulo</label>
            <input class="border m-2 border-green-800 text-3xl text-blue-700" type="text" name="articulo"><br />
            <label for="pedido">Precio</label>
            <input class="border m-2 border-green-800 text-3xl text-blue-700" type="number" name="precio"><br />
            <label for="cantidad">Unidades</label>
            <input class="border m-2 border-green-800 text-3xl text-blue-700" type="number" name="cantidad"><br />
            <label for="total">Total</label>
            <input class="border m-2 border-green-800 text-3xl text-blue-700" type="number" name="total"><br />
            <input class="border m-2 border-green-800 text-3xl text-blue-700" type="hidden" name="cliente" value="{{auth()->user()->name}}"><br />
            <input  class="border m-2 border-green-800 text-3xl text-blue-700" type="submit" value="Guardar" disabled>
        </form>

    </fieldset>
</div>
@endsection
