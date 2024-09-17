<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #d9d6d6;
        }

        nav {
            background-color: #80d177;
            color: #fff;
            padding: 10px;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        nav ul li a {
            color: #000000;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #395534;
        }
    </style>
</head>
<body>
    
    <nav>
        <ul>
            <li><a href="{{ route('clientes.index')}}">Clientes</a></li>
            <li><a href="{{ route('productos.index')}}">Productos</a></li>
            <li><a href="{{ route('pedidos.index')}}">Pedidos</a></li>
            <li><a href="{{ route('proveedores.index')}}">Proveedores</a></li>
            <li><a href="{{ route('empleados.index')}}">Empleados</a></li>
            <li><a href="{{ route('pagos.index')}}">Pagos</a></li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @guest
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('registro') ? 'active' : '' }}" aria-current="page"
                            href="{{ route('registro') }}">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}"
                            href="{{ route('login') }}">Login</a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button>logout</button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
</div>
</body>
</html>
