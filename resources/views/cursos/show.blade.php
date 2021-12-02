@extends('layouts.plantilla')
@extends('layouts.navbar')
@section('title', 'show courses')

@section('content')
<h1>
    aqui se muestran los cursos <br>
  <strong>ID</strong>  {{$curso->id}}  <br>
  <strong>Nombre</strong>  {{$curso->name}} - <br>
  <strong>Descripcion</strong>  {{$curso->descripcion}} <br>
  <strong>Categoria</strong> {{$curso->categoria}}
</h1>
<a href="{{route('cursos.edit', $curso)}}" class="btn btn-warning my-3">editar curso</a> <br>
<a href="{{route('cursos.index')}}" class="btn btn-secondary my-1">regresar</a>

<form action="{{route('cursos.destroy', $curso)}}" method="POST">
  @csrf
  @method('delete')
  <button type="submit" class="btn btn-danger" >Eliminar curso</button>
</form>

@endsection