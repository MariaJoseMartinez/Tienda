<nav class= "bg-green-200 h-10v flex flex-row justify-self-start p-3" >
        <x-form.a class="m-4" href="panaderia">Panader&iacute;a</x-form.a>
        <x-form.a class="m-4" href="pasteleria">Pasteler&iacute;a</x-form.a>
        <x-form.a class="m-4" href="empanadas">Empanadas</x-form.a>
        <x-form.a class="m-4" href="contacto">Contacto</x-form.a>
        @auth
        <x-form.a class="m-4" href="pedido">Pedidos</x-form.a>
        <x-form.a class="m-4" href="producto">Productos</x-form.a>
        <x-form.a class="m-4" href="factura">Facturas</x-form.a>						
        <x-form.a class="m-4" href="cliente">Clientes</x-form.a>							
        <x-form.a class="m-4" href="empleado">Empleados</x-form.a>
        @endauth
</nav>
