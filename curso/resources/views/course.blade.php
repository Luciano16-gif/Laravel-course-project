<div class="bg-blue-400 flex justify-between items-center py-4 px-8">
    <div id="logo">
        <img src="https://cdn.akamai.steamstatic.com/steam/apps/1817230/header.jpg?t=1675188422" width="80px" alt="">
    </div>
    <div id="menu" class="flex space-x-5 items-center justify-end">
        <p>Inicio</p>
        <p>Nosotros</p>
        <p>Contactos</p>
        @auth
        <form action="" method="post">
            @csrf
            @method('PUT')
            <a href="{{ route('curso.editar', $course->id) }}">Editar</a>
        </form>
        <form class="flex items-center" action="{{ url('/curso/'.$course->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" onclick="return confirm('¿Borrar?');">Borrar blog</button>
        </form>
        @endauth
    </div>
</div>
@extends('layouts.web')

@section('content')
    <h1>{{$course->name}}</h1>
    <p>{{$course->description}}</p>
    @foreach($course->posts as $post)
    {{$post->name}}
    @endforeach
@endsection

