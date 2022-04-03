@extends('layouts.app')
@section('content')


<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="page-header">
<h2 class="pageheader-title">Crear Producto</h2>


</div>
</div>
</div>

<form class="splash-container" action="{{route('productos.store')}}" method="POST">
    @csrf
<div class="card">
<div class="card-header">
<h3 class="mb-1 text-center">Crear Nuevo Producto</h3>
<p></p>
</div>
<div class="card-body">

<div class="form-group">

<div class="form-group">
<input class="form-control form-control-lg" type="text" name="nombre" required="" placeholder="Nombre" autocomplete="off">
</div>
<div class="form-group">
<input class="form-control form-control-lg" type="text" name="gramos" required="" placeholder="Gramos" autocomplete="off">
</div>

<div class="form-group">
<input class="form-control form-control-lg" required="" type="text" name="precio" placeholder="Precio">
</div>

<div class="form-group">
<input class="form-control form-control-lg" required="" type="text" name="idvendedores" placeholder="Id vendedores">
</div>


<div class="form-group pt-2">
<button class="btn btn-block btn-primary" type="submit">Registrar</button>
<a href="{{url('productos')}}" class="btn btn-block btn-danger">Volver</a>
</div>

</div>

</div>
</form>

@endsection()