<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <div class="container my-4">
      <a class="btn btn-primary" href="{{ route('xInicio') }}">Inicio</a>
      <a class="btn btn-primary" href="{{ route('xGaleria') }}">Galeria</a>
      <a class="btn btn-primary" href="{{ route('xLista') }}">Lista</a>
      <a class="btn btn-warning" href="{{ route('xSeguimiento') }}">Seguimiento</a>
    </div>


    <div class="container my-4">
      @yield('titulo')
    </div>

    <div class="container my-4">
      @yield('seccion')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>