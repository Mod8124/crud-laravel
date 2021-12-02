@extends('layouts.plantilla')
@extends('layouts.navbar')
@section('title', 'creacion de cursos')

@section('content')
<h1>Hello in this place you can create you cources</h1>
@include('alert')
<form action="{{route('cursos.store')}}" method="POST">

    @csrf

    <label>Nombre</label><br>
    <input type="text" name="name" class="border-2" value="{{old('name')}}">
    @error('name')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
<br>
    <label>
    
        descripcion
    </label><br>
    <textarea name="descripcion" rows="5" class="border">{{old('descripcion')}}</textarea>
    @error('descripcion')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
<br>

    <label>
        Categoria
    </label><br>
    <input type="text" name="categoria" class="border" value="{{old('categoria')}}">
    @error('categoria')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror

    <br>

    <button class="btn btn-info my-3 text-white" type="submit">enviar formulario</button>
</form>

@endsection