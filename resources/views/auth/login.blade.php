
<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login</title>

<link rel="stylesheet" href="{{url('css/app.css')}}">
<style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
<meta name="robots" content="noindex, nofollow">
</head>
<body>



<div class="splash-container">
<div class="card ">
<div class="card-header text-center"><a href="index"><img class="logo-img" src="{{url('img/logo1.png')}}" alt="logo"></a></div>
<div class="card-body">
<form action="{{route('login')}}" method="post">
    @csrf
{{-- 
<div class="form-group">

  <select class="form-control form-control-lg" name="name">
    <option value="1"></option>
    <option value="{{'role->name'}}">Rol: </option>
    <option value="{{'role->name'}}">Administrador</option>
    <option value="{{'role->name'}}">vendedor</option>
    <option value="{{'role->name'}}">cliente</option>
  </select>
</div> --}}

<div class="form-group">
<input name="email" class="form-control form-control-lg" id="username" type="text" placeholder="Username" autocomplete="off">
</div>
<div class="form-group">
<input name="password" class="form-control form-control-lg" id="password" type="password" placeholder="Password">
</div>
<div class="form-group">
{{-- <label class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
</label> --}}
</div>
<button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>

<a href="{{url('inicio')}}" class="btn btn-danger btn-lg btn-block">volver</a>
</form>
</div>
<div class="card-footer bg-white p-0  ">
<div class="card-footer-item card-footer-item-bordered">
<a href="{{url('register')}}" class="footer-link">Crar una Cuenta</a></div>
<div class="card-footer-item card-footer-item-bordered">
<a href="#" class="footer-link">Olvide mi Contraseña</a>
</div>
</div>
</div>
</div>






<script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v64f9daad31f64f81be21cbef6184a5e31634941392597" integrity="sha512-gV/bogrUTVP2N3IzTDKzgP0Js1gg4fbwtYB6ftgLbKQu/V8yH2+lrKCfKHelh4SO3DPzKj4/glTO+tNJGDnb0A==" data-cf-beacon='{"rayId":"6b6e67ca9a3bf25b","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.11.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>