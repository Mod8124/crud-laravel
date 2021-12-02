@extends('layouts.plantilla')
@section('title', 'index')
@extends('layouts.navbar')
@section('content')

<h1>Bienvenido a la pagina principal de cursos</h1>
<a href="{{route('cursos.create')}}" class="btn btn-success my-3">crear cursos</a>


@foreach($cursos as $item)
    <ul>
        <a href="{{route('cursos.show', $item)}}">{{$item->id}}</a>
        <li>
          {{$item->name}}
        </li>
        <li>
            {{$item->categoria}}
    </li>
    </ul>
@endforeach

{{$cursos->links()}}
 
@endsection