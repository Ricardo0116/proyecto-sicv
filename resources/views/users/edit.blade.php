@extends('layouts.app')
@section('content')


<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="page-header">
<h2 class="pageheader-title">Actualizar Usuarios</h2>


</div>
</div>
</div>

<form class="splash-container" action="{{route('usuarios.update', $usuarios->id)}}" method="POST">
    @csrf
    @method('PUT')
<div class="card">
<div class="card-header">
<h3 class="mb-1 text-center">Crear Nuevo Usuario</h3>
<p></p>
</div>
<div class="card-body">
<div class="form-group">
<input class="form-control form-control-lg" type="text" name="nombres" required="" placeholder="" autocomplete="off" value="{{$usuarios->nombres}}">
</div>
<div class="form-group">
<input class="form-control form-control-lg" type="text" name="apellidos" required="" placeholder="" autocomplete="off" value="{{$usuarios->apellidos}}">
</div>
<div class="form-group">
<input class="form-control form-control-lg" id="pass1" type="text"  name="genero" required="" placeholder="" value="{{$usuarios->genero}}">
</div>
<div class="form-group">
<input class="form-control form-control-lg" required="" type="text" name="barrio" placeholder="" value="{{$usuarios->barrio}}">
</div>

<div class="form-group pt-2">
<button class="btn btn-block btn-primary" type="submit">Actualizar</button>
<a href="{{url('usuarios')}}" class="btn btn-block btn-danger">Volver</a>
</div>

</div>

</div>
</form>

@endsection()