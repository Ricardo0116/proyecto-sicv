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
{{-- <th>identificador</th> --}}
<th>NOMBRE</th>
<th>GRAMOS</th>
<th>PRECIO</th>
{{-- <th></th>
<th></th> --}}
<th>ACCIONES</th>
</tr>
</thead>
<tbody>

@foreach($productos as $producto)

<tr class="text-center">
{{-- <td>{{ $producto->userproduct->name}}</td> --}}
<td>{{ $producto->nombre }}</td>
<td>{{ $producto->gramos }}</td>	
<td>{{ $producto->precio }}</td>	
<td class="text-center">
	<form action="{{ route('productos.destroy', $producto->idproductos) }}" method="POST">
		@csrf
		@method('DELETE')
		{{-- <button type="submit" class="" href="">
			<img src="{{url('img/delete.png')}}" alt="">
		</button>
		 --}}
		{{-- <a class=""a href="">
			<img src="{{url('img/actualizado.png')}}" alt="">
		</a> --}}
		<a class="" href="">
			<img src="{{url('img/detalles.png')}}" alt="">
		</a>
	</form>
</td>
</tr>
@endforeach()
</tbody>

</table>
</div>
</div>
</div>
</div>
@endsection()