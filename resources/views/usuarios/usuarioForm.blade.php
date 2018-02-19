@extends('layouts.app')
@section('content')

<div class="col-md-8 offset-md-2">
  <div class="row">
    <dir class="col-md-12">
      <h2>
        Capturar nuevo usuario
      </h2>
    </dir>
  </div>
</div>

<div class="col-md-8 offset-md-2">
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
  
  <form action="{{ action('UserController@store')}}" method="POST">
    {{csrf_field()}}
    <div class="row">
      <dir class="col-md-10">
        <div class="form-group">
          <label for="name">Nombre</label>
          <input type="text" 
                 class="form-control" 
                 name="name" 
                 placeholder="Nombre del usuario"
                 value="{{ old('name') }}">
        </div>
        <div class="form-group">
          <label for="email">Correo electrónico</label>
          <input type="email" 
                 class="form-control" 
                 name="email" 
                 placeholder="Correo del usuario"
                 value="{{ old('email') }}">
        </div>
        <div class="form-group">  
          <label for="password">Contraseña</label>
          <input type="password" 
                 class="form-control" 
                 name="password" 
                 placeholder="Introduzca la contraseña">
        </div>        
        <div class="form-group">  
          <label for="password_confirmation">Contraseña</label>
          <input type="password" 
                 class="form-control" 
                 name="password_confirmation" 
                 placeholder="Confirme la contraseña">
        </div>
        </h3>
      </dir>
    </div>
    <button type="submit" class="btn btn-success">Aceptar</button>
  </form>
</div>
@endsection