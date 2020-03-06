@extends('layouts.app')


@section('title','Proyecto '.$project->name)


@section('css')
  <link rel="stylesheet" href="{{ asset('css/estyle.css') }}"/>
@endsection


    @section('content')
      <div class="proyecto d-block" id="proyecto1">

          <div class="titulo">
            <h1>{{$project->title}}</h1>
          </div>

          <div class="">
            <h6>{{$project->description}}</h6>
          </div>

      </div>


    {{-- @auth

    @if (Auth::user()->user_type_id == 0)
    <a href="/entrepreneur/project/{{$project->id}}/edit">
        Editar
    </a>

<form action="/entrepreneur/project/{{$project->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('edit')
    <button class="btn btn-sm btn-outline-dark">editar</button>
</form>


@endauth --}}


</div>
@endsection



