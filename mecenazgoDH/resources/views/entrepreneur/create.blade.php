@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>



@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1> nuevo proyecto</h1>
            @include('entrepreneur.form', [
                'method' => 'post',
                'url' => '/entrepreneur/form/add'
            ])
        </div>
    </div>
</div>
@endsection
