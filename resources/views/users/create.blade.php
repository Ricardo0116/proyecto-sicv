@extends('layouts.app')
@section('content')


<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="page-header">
<h2 class="pageheader-title">Crear Usuarios</h2>


</div>
</div>
</div>

<form class="splash-container" action="{{route('usuarios.store')}}" method="POST">
    @csrf
<div class="card">
<div class="card-header">
<h3 class="mb-1 text-center">Crear Nuevo Usuario</h3>
<p></p>
</div>
<div class="card-body">

<div class="form-group">
    


<div class="form-group">
<input class="form-control form-control-lg" type="text" name="nombres" required="" placeholder="Nombres" autocomplete="off">
</div>
<div class="form-group">
<input class="form-control form-control-lg" type="text" name="apellidos" required="" placeholder="Apellidos" autocomplete="off">
</div>

<div class="form-group">
      
  <select class="form-control form-control-lg" name="genero">
    <option >Genero</option>
    <option >Masculino</option>
    <option >Femenino</option>
    <option >otro</option>
  </select>
      
</div>

<div class="form-group">
<input class="form-control form-control-lg" required="" type="text" name="barrio" placeholder="Barrio">
</div>
<div class="form-group">
<input class="form-control form-control-lg" type="text" name="direccion" required="" placeholder="Direccion" autocomplete="off">
</div>
<div class="form-group">
<input class="form-control form-control-lg" type="text" name="email" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}" required="" placeholder="Email" autocomplete="off">
</div>

<div class="form-group">
<input class="form-control form-control-lg" type="password" name="password" required="" placeholder="Password" autocomplete="off">
</div>
{{-- <div class="form-group">
<input class="form-control form-control-lg" type="password" name="password_confirmation" required="" placeholder="Confirmar" autocomplete="off">
</div> --}}

<div class="form-group pt-2">
<button class="btn btn-block btn-primary" type="submit">Registrar</button>
<a href="{{url('usuarios')}}" class="btn btn-block btn-danger">Volver</a>
</div>

</div>

</div>
</form>

@endsection()