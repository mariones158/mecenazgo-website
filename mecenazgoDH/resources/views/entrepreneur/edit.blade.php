@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

    <div class="col-sm-offset-3 col-sm-6">
        <div class="panel-tittle">
             <h1>Proyectos</h1>
            </div>


        <div class="panel-body">
            <!-- Display Validation Errors -->
        @include('common.errors') <!--CODIGO PARA VER LOS ERRORES-->

        <form action = "/projects/{{ url ('cliente') }} /{{ $project->id }}" method "POST">  <!-- edit  button -->

            {{csrf_field() }}
            {{method_field('PUT') }}


            <div class="form-group">
                <label for="name" class="control-label">titulo</label>
                <input type="text" name="title"class="form-label" value="{{ $project->title}}">>
                </div>


            <div class="form-group">
                <label for="name" class="control-label">Nombre</label>
                <input type="text" name="name"class="form-label" value="{{ $project->name}}">>
                </div>


            <div class="form-group">
                <label for="name" class="control-label">descripcion</label>
                <input type="text" name="description"class="form-label" value="{{ $project->description}}">>
                </div>


            <div class="form-group">
                <label for="name" class="control-label">aporte</label>
                <input type="text" name="amount"class="form-label" value="{{ $project->amount}}">>
                </div>


            <div class="form-group">
                <input class="form-Control"   type="file" name="image">
                <p class="text-danger">{{ $errors->first('image')}}</p>
                <label for=""> Imagen </label>
            </div>


             <div class="form-group">
                <button type="submit" class="btn btn-default">
                <i class=""></i> Editar proyecto
                </button>fa fa-plus
            </div>


           {{--  <div class="form-group">
                <button class ="btn btn-primary">Guardar</button>
            </div> --}}

            </form>
            </div>
        </div>

        @endsection

