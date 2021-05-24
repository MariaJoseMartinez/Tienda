<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
       
        <head>
            <title>Migas amigas</title>
            <link rel="stylesheet" href="{{asset('css/app.css')}}" />
        </head>

        <body  class="body bg-yellow-200 h-screen">
            <div id= "app">

                <header class="h-15v flex flex-row justify-between">
                    <a class="self-start" href="index" >
                        <img src="{{asset('images/logo.jpg')}}" class="w-150 h-50 px-4 py-2" alt="Haz clic aquí para volver a la página de inicio">
                    </a>
                    <div class="text-center text-5xl py-10 px-50">Migas amigas</div>
                    @auth
                    <div>
                        <a class=" m-5 boton text-center flex justify-end">Usuario {{auth()->user()->name}}</a>
                    
                        <form action = "{{route('logout')}}" method = "POST">
                            @csrf
                            <input class=" m-5 boton text-center flex justify-end" type = "submit" value = "Logout">
                        </form>
                    </div>
                    @endauth
                    @guest
                    <div>
                        <a  class=" m-5 boton text-center flex justify-end" href="{{route('login')}}">Login</a>
                        <a  class=" m-5 boton text-center flex justify-end" href="{{route('register')}}">Registrarse</a>	
                    </div>
                    @endguest
                </header>
                <div class="h-10v">
                <x-layout.navegador>
                </x-layout.navegador>
                    </div>
                <!--<nav class= "bg-green-200 h-10v flex flex-row justify-self-start p-3" >
                    
                </nav> -->
                <!--<nav  class="bg-green-200 h-10v flex items">
                    <a class="m-4 nav inline-flex items-center" href="panaderia">Panader&iacute;a</a>
                    <a class="m-4 nav inline-flex items-center" href="pasteleria">Pasteler&iacute;a</a>
                    <a class="m-4 nav inline-flex items-center" href="empanadas">Empanadas</a>
                    <a class="m-4 nav inline-flex items-center" href="contacto">Contacto</a>
                    @auth
                    <a class="m-4 nav inline-flex items-center" href="facturas">Facturas</a>							
                    <a class="m-4 nav inline-flex items-center" href="clientes">Clientes</a>							
                    <a class="m-4 nav inline-flex items-center" href="pedido">Pedido</a>
                    @endauth
                </nav>-->	

                <main class="h-65v">
                    @yield("contenido")
                </main>
                <footer class="bg-green-200 h-10v flex flex-column justify arrond ">
                    <span>Copyright</span>
                    <span>Aviso legal</span>
                </footer>
            <script src="{{asset('js/app.js')}}"></script>
            </div>
            
        </body>

    </html>
