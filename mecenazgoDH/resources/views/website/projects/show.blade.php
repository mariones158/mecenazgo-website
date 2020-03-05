@extends('layouts.app')


@section('title','Producto '.$project->name)


@section('css')
  <link rel="stylesheet" href="{{ asset('css/estyle.css') }}"/>
@endsection

@section('content')


<div class="card">
    <h1>{{$project->name}}</h1>
    <p>{{$project->description}}</p>
    @if (count($project->photos) !== 0)
        @foreach ($project->photos as $photo )
            <img src="{{ url("img/".$photo->source) }}" alt="" >
        @endforeach   revisar  codigo
    @else
        <img class="card-img-top" src="{{ url("img/default.png") }}" alt="Card image cap">
    @endif

    {{-- @auth

    @if (Auth::user()->role_id == 0)
    <a href="/entrepreneur/project/{{$project->id}}/edit">
        Editar
    </a>




        @endif

    @endauth --}}




</div>
@endsection
