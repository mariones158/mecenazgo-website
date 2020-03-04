@extends('layouts.app')

@section('content')

  @foreach ($projects as $project)
    <section class="my-4 ">

      <div class="articulo pb-2 pl-2 d-lg-flex">
        <div class="col-lg-10 ">
          <div class="titulo">
            <h2 class="tituloMenu pl-3 pt-1"><a href="article/show/{{$project->id}}">{{$project->title}}</a></h2>
          </div>
          <div class="description">
            <h4>{{$articulo->description}}</h4>
          </div>
        </div>

      </div>

          </section>
@endsection
