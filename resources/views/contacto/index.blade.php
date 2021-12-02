@extends('layouts.plantilla')

@section('title', 'contacto')
@extends('layouts.navbar')
@section('content')
<h1>Dejanos un mensaje perro</h1>
@include('alert')
<form action="{{route('contacto.store')}}" method="POST">
    @csrf
    
    <label>Nombre:</label>
    <br>
    <input type="text" name="name" class="border">
<br>
@error('name')
<span style="transition: all 1s">{{$message}}</span>
@enderror
<br>
    <label>Correo:</label>
    <br>
    <input type="text" name="coreo" class="border">
<br>
@error('coreo')
<span>{{$message}}</span>
@enderror
<br>
    <label>Mensaje:</label>
    <br>
    <textarea name="mensaje"  cols="30" rows="10" class="border"></textarea>
    <br>
    @error('mensaje')
<span>{{$message}}</span>
@enderror
<br>

    <button type="submit" class="btn btn-success">Enviar</button>
</form>

@if(session('info'))
<script>alert("{{session('info')}}")</script>
@endif
@endsection

