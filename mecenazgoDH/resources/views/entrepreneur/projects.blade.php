@extends('layouts.app')


@section('title')
     listado proyectos
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('css/estyle.css') }}"/>

@endsection


@section('content')



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
             <img class="d-block w-100" src="/img/OSS0530_gadget2Pnt.jpg" alt="Second slide">
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





            @foreach ($projects as $project)
            <div class="card mb-2" style="width: 18rem;">
              @if (count($project->image) !== 0)
              <img class="card-img-top" src="{{ url("img/".$project->image[0]->source) }}" alt="Card image cap">

              @else
              <img class="card-img-top" src="{{ url("img/OSS0609_gadgetPlant.jpg") }}" alt="Card image cap">
              @endif
              <div class="card-body">
                <h5 class="card-title">{{$project->name}}</h5>
                  <p class="card-text">{{$project->description_detail}}</p>
                  <a href="/products/{{$project->id}}" class="btn btn-primary">Ver detalle</a>





                  <!--RUTA A EDITAR -->

                  <buttom type= "submit" class=btn btn-success onclick="location.href='edit/{{ $projects->id }}' ">>
                    <i class="fa fa-pencil"></i>Editar
                </buttom>



                    </div>
                  </div>

                  @empty

                  Vuelve mas tarde

                  @endforelse
              </div>



          @endsection


