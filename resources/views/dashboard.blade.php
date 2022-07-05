@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{url('css/css-alternos.css')}}">
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="page-header">
<h2 class="pageheader-title">Dashboard</h2>
</div>
</div>
</div>
<div class="admin-img">
    <img src="{{url('img/welcome.jpg')}}" alt="">
    <div class="admin ">
        {{-- <h1 class="display-4">Bienvenido Administrador</h1> --}}
    </div>
</div>
@endsection()
