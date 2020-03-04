@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col">
              <h1> crearse un usuario </h1>

              @include('admin.users.form', [
                  'method' => 'post',
                  'url' => '/user',
              ])
          </div>
      </div>
  </div>


@endsection
