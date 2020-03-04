@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

    <div class="col-sm-offset-3 col-sm-6">
        <div class="panel-tittle">
             <h1>Proyectos</h1>
            </div>


        <div class="panel-body">
            <!-- Display Validation Errors -->


        <form action="{{url ('projects')}}" method="POST">

            {{ csrf_field() }}


            <div class="form-group">
                <label for="name" class="control-label">titulo</label>
                <input type="text" name="title"class="control-label">
                </div>


            <div class="form-group">
                <label for="name" class="control-label">Nombre</label>
                <input type="text" name="name"class="control-label">
                </div>


            <div class="form-group">
                <label for="name" class="control-label">descripcion</label>
                <input type="text" name="description"class="control-label">
                </div>


            <div class="form-group">
                <label for="name" class="control-label">aporte</label>
                <input type="text" name="amount"class="control-label">
                </div>


            <div class="form-group">
                <input class="form-Control"   type="file" name="image">
                <p class="text-danger">{{ $errors->first('image')}}</p>
                <label for=""> Imagen </label>
            </div>


             <div class="form-group">
                <button type="submit" class="btn btn-default">
                <i class=""></i> Agregar un proyecto
                </button>fa fa-plus
            </div>


           {{--  <div class="form-group">
                <button class ="btn btn-primary">Guardar</button>
            </div> --}}

            </form>
            </div>
        </div>

        @endsection

