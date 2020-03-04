@extends('layouts.app')

@section('content')



@section('title')
     listado proyectos
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('css/estyle.css') }}"/>

@endsection


@section('content')



<div class ="contenedor-proyecto">
    <div class= "row">
       <div class="col">

                        @foreach ($projects as $project )

                        <div class="card" style="width: 18rem;">
                            @if (count($project->image) !== 0)
                            <img class="card-img-top" src="{{ url("image/".$project->image[0]->source) }}" alt="Card image cap">

                            @else
                            <img class="card-img-top" src="{{ url("image/OSS0609_gadgetPlant.jpg") }}" alt="Card image cap">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{$project->name}}</h5>
                                <p class="card-text">{{$project->description}}</p>
                            <a href="/projects/{{$project->id}}" class="btn btn-primary">Ver</a>
                            </div>
                        </div>
                        @endforeach

         </div>
     </div>
  </div>

@endsection




