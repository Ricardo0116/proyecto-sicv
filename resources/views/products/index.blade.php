@extends('layouts.app')
@section('content')

<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="page-header">
<h2 class="pageheader-title">Productos Registrados</h2>


</div>
</div>
</div>

<div class="row">


<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

{{-- @if(session('crear'))
		<div class="alert alert-success">
			{{ session ('crear')}}
		</div>
		@endif
@if(session('eliminar'))
<div class="alert alert-danger">
	{{ session ('eliminar')}}
</div>
@endif
@if(session('actualizar'))
		<div class="alert alert-success">
			{{ session ('actualizar')}}
		</div>
		@endif --}}


<div class="card">
	<div>		
		<a class="btn btn-success mt-3 ml-3" href="{{url('productos/create')}}">Registrar Nuevo Producto</a>
	</div>
{{-- <hr> --}}

<div class="card-body">
<div class="table-responsive">
<table class="table table-striped table-bordered first">
<thead>
<tr class="text-center">
{{-- <th>ROL</th> --}}
<th>NOMBRE</th>
<th>GRAMOS</th>
<th>PRECIO</th>
{{-- <th></th>
<th></th> --}}
<th>ACCIONES</th>
</tr>
</thead>
<tbody>

<tr class="text-center">
<td>arequipe</td>
<td>500</td>
<td>5000</td>	
<td class="text-center">
	<form action="" method="">
		@method('DELETE')	
		<button type="submit" class="" href="">
			eliminar
		</button>
		
		<a class=""a href="">
			actualizar
		</a>
		<a class="" href="">
			detalles
		</a>
	</form>
</td>
</tr>
</tbody>

</table>
</div>
</div>
</div>
</div>
@endsection()