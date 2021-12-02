@extends('layouts.plantilla')
@extends('layouts.navbar')
@section('title', 'edit courses')

@section('content')
<h1>
  aqui se pueden editar los cursos
</h1>

<form action="{{route('cursos.update', $curso)}}" method="POST">

    @csrf

    @method('put')

    <label>Nombre</label><br>
    <input type="text" name="name" class="border-2" value="{{old('name', $curso->name)}}">
<br>
    <label>
        @error('name')
        <br>
            <small>{{$message}}</small>
        <br>
        @enderror
    
        descripcion
    </label><br>
    <textarea name="descripcion" rows="5" class="border">{{old('descripcion',$curso->descripcion)}}</textarea>
    @error('descripcion')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
<br>

    <label>
        Categoria
    </label><br>
    <input type="text" name="categoria" class="border" value="{{old('categoria',$curso->categoria)}}">
    @error('categoria')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
    <br>

    <button class="btn btn-info my-3 text-white" type="submit">Actualizar formulario</button>
</form>
@endsection