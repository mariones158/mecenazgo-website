@extends('layouts.app')

@section('title',)
     Mecenazgo

@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('css/estyle.css') }}"/>

@endsection

@section('content')


{{--
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="/img/OSS0530_gadget2Pnt.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/img/OSS0609_gadgetPlant.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/img/OSS0530_gadget2Pnt.jpg" alt="Third slide">
        </div>
      </div>


      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

 --}}


    <section class="proyectos-cont">
        @foreach ($projects as $project)

          <article class="proyecto">
            <div class="proyecto-photo">
                <a href="/projects/{{ $project->id }}">
                  @foreach ($project->photos as $photo)
                  <img  class="productPhotosHover" class="img-fluid" src="/img/projects/{{$photo->filename}}"
                                alt="">
                  @endforeach
              </a>

            </div>
            <h2><a href="/projects/{{ $project->id }}">{{ $project->name }}</a></h2>


            <a class="verMas" href="/projects/{{ $project->id }}">Ver más</a>
          </article>
        @endforeach
      </section>










        {{--       </div>
            </div>

            @empty

            Vuelve mas tarde

            @endforelse
        </div>
    @endif--}}


    @endsection
