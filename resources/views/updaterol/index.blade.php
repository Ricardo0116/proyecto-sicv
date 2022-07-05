
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="{{ url('css/css-alternos') }}">
@endsection()


@section('content')

<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="page-header">
<h2 class="pageheader-title">Asignar Rol (General)</h2>


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
    <a class="btn btn-success mt-3 ml-3" href="{{url('update-profile/create')}}">Asignar Rol a Usuario</a>
    <a class="btn btn-danger mt-3 ml-3" href="{{url('usuarios')}}">Asignar Rol a Usuario</a>
  </div>
{{-- <hr> --}}

<div class="card-body">
<div class="table-responsive">
<table id="usuarios" class="table table-striped table-bordered first">
<thead>
<tr class="text-center">
{{-- <th>ROL</th> --}}
<th>id</th>
<th>rol</th>
<th>nombre</th>
<th>email</th>
<th>Acciones</th>
{{-- <th>DIRECCIÓN</th> --}}
{{-- <th>EMAIL</th> --}}
{{-- <th>PASSWORD</th> --}}
{{-- <th>ACCIONES</th> --}}
</tr>
</thead>
<tbody>
@foreach($roluser as $roluser)
<tr>
<td>{{$roluser->idrol}}</td>

<td>{{$roluser->rol->name}}</td>
<td>{{$roluser->user->name}}</td>
<td>{{$roluser->user->email}}</td>
{{-- <td>{{$roluser->user->email}}</td> --}}
{{-- <td>{{$roluser->barrio}}</td>
<td>{{$roluser->direccion}}</td>
<td>{{$roluser->email}}</td> --}}
{{-- <td>{{$usuario->password}}</td> --}}

<td class="text-center">
  <form action="{{ route('update-profile.destroy', $roluser->id) }}" method="POST">
    @csrf
    @method('DELETE') 
    @role('administrador')
      
    <button type="submit" class="mr-2" href="">
    
      <img src="{{url('img/delete.png')}}" alt="">
    
    </button>
    @endrole()
    <a class="mr-2"a href="">
      <img src="{{url('img/actualizado.png')}}" alt="">
    </a>
    <a class="mr-2" href="">
      <img src="{{url('img/detalles.png')}}" alt="">
    </a>
    {{-- <a class="mr-2" href="">
      <img src="{{url('img/update-profile.png')}}" alt="">
    </a> --}}
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