@extends('layouts.app')
@section('content')


<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="page-header">
<h2 class="pageheader-title">Asignar Rol</h2>


</div>
</div>
</div>

<form class="splash-container" action="{{route('update-profile.store')}}" method="POST">
    @csrf
<div class="card">
<div class="card-header">
<h3 class="mb-1 text-center">Usuarios/Roles</h3>
<p></p>
</div>
<div class="card-body">

<div class="form-group">
    
{{-- <div class="form-group">
<input class="form-control form-control-lg" type="text" name="id" required="" placeholder="rol" autocomplete="off">
</div> --}}

<div class="form-group">
<input class="form-control form-control-lg" type="text" name="idrol" required="" placeholder="rol user" autocomplete="off">
</div>

{{-- <div class="form-group">
      
  <select class="form-control form-control-lg" name="genero">
    <option >Genero</option>
    <option >Masculino</option>
    <option >Femenino</option>
    <option >otro</option>
  </select>
      
</div>
 --}}


<div class="form-group">
<input class="form-control form-control-lg" type="text" name="idroles" required="" placeholder="rol" autocomplete="off">
</div>
<div class="form-group">
<input class="form-control form-control-lg" type="text" name="id" required="" placeholder="nombre user" autocomplete="off">
</div>

{{-- <div class="form-group">
      
  <select class="form-control form-control-lg" name="genero">
    <option >Genero</option>
    <option >Masculino</option>
    <option >Femenino</option>
    <option >otro</option>
  </select>
      
</div> --}}




<div class="form-group pt-2">
<button class="btn btn-block btn-primary" type="submit">Asignar Rol</button>
<a href="{{url('update-profile')}}" class="btn btn-block btn-danger">Volver</a>
</div>

</div>

</div>
</form>

@endsection()