<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    </head>
    <body>
        <a class="btn btn-danger" href="{{route('home')}}"> Home </a>
        <a class="btn btn-primary" href="{{route('product')}}"> Product </a>
        <a class="btn btn-success" href="{{route('list')}}"> Product List </a>
        <div>
            @yield('content')
        </div>
    </body>
</html>