@extends('layouts.plantilla')

@section('title','Crear')

@section('content')
    <h2>Registrar tarea</h2>
    <form action="{{route('tarea.store')}}" method="POST">
        <x-tarea-form-body/>
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

@endsection
