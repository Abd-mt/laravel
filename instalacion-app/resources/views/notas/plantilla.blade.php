<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
</head>
<body>
<Header>
<h1>Mi espacio</h1>
<Nav>
    <ul>
        <li>
            <a> href =”{{route (‘home’)}}” class=”{{request()->routeIs(‘home’)?’active’:’’}}”>Home</a>
            @dump(request()->routeis(‘home’))
        </li>
        <li>
            <a> href =”{{route (‘NOMBRE DE MI RUTA)}}” class=”{{request()->routeIs(‘NOMBRE DE MI RUTA.*)?’active’:’’}}”>COMO QUIERO QUE SE MUESTRE</a>
            @dump(request()->routeis(‘NOMBRE DE MI RUTA))
        </li>
    </ul>
</nav>
</header>
    @yield('contenido')
</body>
</html>