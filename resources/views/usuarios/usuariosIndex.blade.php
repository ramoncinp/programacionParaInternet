@extends('layouts.app')
@section('content')

<div class="row">
  <dir class="col-md-12">
    <h2>
      Lista de Usuarios
    </h2>
  </dir>
</div>

<div class="row">
  <div class="col-md-10">
    
    <table class="table table-bordered">
      <thead class="thead-dark">
        <tr>
          <th>Nombre</th>
          <th>Correo</th>
        </tr>
      </thead>
      <tbody>
        @foreach($usuarios as $usuario)
        <tr>
          <td>{{ $usuario->name }}</td>
          <td>{{ $usuario->email }} </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    
  </div>
</div>

@endsection