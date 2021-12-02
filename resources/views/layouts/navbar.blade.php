<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a  href="{{route('home')}}" class="navbar-brand {{request()->routeIs('home') ? 'text-white' : ''}}">Navbar
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{request()->routeIs('cursos.index') ? 'text-white' : ''}}" aria-current="page" href="{{route('cursos.index')}}">Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{request()->routeIs('cursos.*',) ? 'text-white' : ''}}" href="{{route('cursos.create')}}">Crear Cursos
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contacto.index')}}">Contactanos
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>