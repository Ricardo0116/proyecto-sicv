@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="{{ url('css/css-alternos') }}">
@endsection()


@section('content')

<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="page-header">
<h2 class="pageheader-title">Usuarios Registrados (General)</h2>


</div>
</div>
</div>

<div class="row">


<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

@if(session('crear'))
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
		@endif


<div class="card">
	<div>		
		<a class="btn btn-success mt-3 ml-3" href="{{url('usuarios/create')}}">Registrar Nuevo Usuario</a>
	</div>
{{-- <hr> --}}

<div class="card-body">
<div class="table-responsive">
<table id="usuarios" class="table table-striped table-bordered first">
<thead>
<tr class="text-center">
{{-- <th>ROL</th> --}}
<th>NOMBRE</th>
<th>APELLIDOS</th>
<th>GÉNERO</th>
<th>BARRIO</th>
<th>DIRECCIÓN</th>
<th>EMAIL</th>
{{-- <th>PASSWORD</th> --}}
<th>ACCIONES</th>
</tr>
</thead>
<tbody>
@foreach($usuarios as $usuario)
<tr>
{{-- <td>{{$usuario->nombry->name}}</td> --}}
<td>{{$usuario->name}}</td>
{{-- <td>{{$usuario->roles}}</td> --}}
<td>{{$usuario->apellidos}}</td>
<td>{{$usuario->genero}}</td>
<td>{{$usuario->barrio}}</td>
<td>{{$usuario->direccion}}</td>
<td>{{$usuario->email}}</td>
{{-- <td>{{$usuario->password}}</td> --}}

<td class="text-center">
	<form action="{{route('usuarios.destroy', $usuario->id)}}" method="POST">
		@csrf
		@method('DELETE')	
		
			
		<button type="submit" class="outline-none mr-2" href="">
		
			<img src="{{url('img/delete.png')}}" alt="">
		
		</button>
		
		<a class="mr-2"a href="{{route('usuarios.edit', $usuario->id)}}">
			<img src="{{url('img/actualizado.png')}}" alt="">
		</a>
		<a class="mr-2" href="{{route('usuarios.show', $usuario->id)}}">
			<img src="{{url('img/detalles.png')}}" alt="">
		</a>
		<a class="mr-2" href="{{ route('update-profile.index') }}">
			<img src="{{url('img/update-profile.png')}}" alt="">
		</a>
	</form>
</td>
</tr>
@endforeach()
</tbody>

</table>

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
@endsection()

<script>
	$(document).ready(function() {
    $('#usuarios').DataTable();
} );
</script>

</div>
</div>
</div>
</div>
@endsection()