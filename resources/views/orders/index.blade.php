@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
@endsection()


@section('content')

<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="page-header">
<h2 class="pageheader-title">Usuarios Registrados (General)</h2>


</div>
</div>
</div>





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

@endsection()