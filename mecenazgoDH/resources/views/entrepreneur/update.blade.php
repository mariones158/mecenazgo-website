@extends('layouts.app')

@section('content')


<div class="col-md-12">

    <!-- TABLA-->

@if(count ($projects)>0)
     <div class="panel panel-default">
         <div class="panel-heading">

         </div>

<div class="panel-body">
<table class="table table-striped task-table">

       <thead>
           <th>Titulo</th>
           <th>Nombre</th>
           <th>Descripcion/th>
           <th>Aporte</th>

       </thead>
<tbody>
@foreach ($projects as $project)    <!--  recorremos proyecto -->
  <tr>
    <td class= "table-text"><div>{{ $project->title }}</div></td>  <!-- mostramos el nombre del proyecto -->
    <td class= "table-text"><div>{{ $project->name }}</div></td>
    <td class= "table-text"><div>{{ $project->description }}</div></td>
    <td class= "table-text"><div>{{ $project->amount }}</div></td>





    <td>
    <form action = "/projects/{{ url ('cliente') }} /{{ $project->id }}" method "POST">  <!-- delete  button -->

                            {{csrf_field() }}
                            {{method_field('DELETE') }}

                            <button type="submit" class="btn btn-danger">
                                <i class= "fa fas-trash"></i>Delete
                            </buttom>
    </form>

    </td>
</tr>

@endforeach
</tbody>

    </table>
</div>
     </div>
     @endif
         </div>
    @endsection
