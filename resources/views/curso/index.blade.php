@extends('layouts.plantilla')
@section('title', 'Curso')
@section('content')
    <h1>Index Laravel Blade</h1>
    <a href="{{route(curso.create)}}">Crear Curso</a>
    <ul>
        @foreach ($curso as $item)
            <li>{{ $item->name }}</li>
        @endforeach
    </ul>
    {{ $curso->links() }}
@endsection()
