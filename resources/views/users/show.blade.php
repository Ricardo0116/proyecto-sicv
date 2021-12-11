@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="page-header">
<h2 class="pageheader-title">Detalles de un Usuario</h2>
</div>
</div>
</div>
<form class="splash-container">
<div class="card">
<div class="card-header">
<h3 class="mb-1 text-center">Detalles</h3>
<p></p>
</div>
<div class="card-body">
<div class="form-group">
    <label class="form-control form-control-lg">Nombres: {{$usuarios->nombres}}</label>
</div>
<div class="form-group">
    <label class="form-control form-control-lg">Apellidos: {{$usuarios->apellidos}}</label>
</div>
<div class="form-group">
    <label class="form-control form-control-lg">Género: {{$usuarios->genero}}</label>
</div>
<div class="form-group">
    <label class="form-control form-control-lg">Barrio: {{$usuarios->barrio}}</label>
</div>
<div class="form-group pt-2">
<a href="{{url('usuarios')}}" class="btn btn-block btn-danger">Volver</a>
</div>
</div>
</div>
</form>
@endsection()