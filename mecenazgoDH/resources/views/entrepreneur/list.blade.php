@extends('layouts.app')
@section('title','Home Page')
@section('content')
    <main role="main">

        {{-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="{{URL::asset('img/OSS0609_gadgetPlant.jpg')}}" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="{{URL::asset('img/OSS0530_gadget2Pnt.jpg')}}" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="{{URL::asset('img/OSS0609_gadgetPlant.jpg')}}" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div> --}}


        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    @forelse($projects as $project)
                        <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" alt="Card image cap" src="{{url('images',$product->image)}}">
                            <div class="card-body">
                                <del>$ {{$project->name}}</del>
                                <span class="price text-muted float-right">$ {{$product->spl_price}}</span>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{url('projectsDetail',$project->id)}}" class="btn btn-sm btn-outline-secondary">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                        <h3>No Projects</h3>
                    @endforelse
                </div>
            </div>
        </div>

    </main>
@endsection


