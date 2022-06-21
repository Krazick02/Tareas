@extends('layouts.plantilla')

@section('title','Editar')

@section('content')
    <h2>Editar tarea</h2>
    <form action="{{route('tarea.store')}}" method="POST">
        <x-tarea-form-body :tarea="$tarea"/>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
