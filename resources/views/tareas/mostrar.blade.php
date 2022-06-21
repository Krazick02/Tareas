@extends('layouts.plantilla')

@section('title','Tareas')

@section('content')
<h3>
    Tareas:
</h3>
<table class="table table-stipped table-hover">
    <thead>
        <tr>
            <td>Nombre</td>
            <td>Finalizada</td>
            <td>Fecha Limite</td>
            <td>Urgencia</td>
            <td>Descripcion</td>
            <td>Opciones</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($tareas as $tarea)
            <tr>
                <td>{{$tarea->nombre}}</td>
                <td>{{$tarea->finalizada()}}</td>
                <td>{{$tarea->fecha_limite->format('H:i d/m/y')}}</td>
                <td>{{$tarea->urgencia()}}</td>
                <td>{{$tarea->descripcion}}</td>
                <td>
                    <a href="{{route('tarea.edit',$tarea)}}">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
