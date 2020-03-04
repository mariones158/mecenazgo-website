@extends('layouts.app')

@section('content')
  <div class="col-10 rounded mx-auto d-block" id="articulo23">

      <div class="titulo">
        <h1>{{$project->title}}</h1>
      </div>


      <div class="description">
        <h6>{{$project->description}}</h6>
      </div>

  </div>
@endsection
