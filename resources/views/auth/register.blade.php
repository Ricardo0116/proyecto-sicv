
<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Concept - Bootstrap 4 Admin Dashboard Template</title>

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



<form class="splash-container" action="{{route('register')}}" method="POST">
    @csrf
<div class="card">
<div class="card-header">
    <a href="">
        <img class="logo-img" src="{{url('img/logo1.png')}}" alt="">
    </a>
</div>
<div class="card-body">
<div class="form-group">
<input class="form-control form-control-lg" type="" name="name" required="" placeholder="Username" autocomplete="off">
</div>
<div class="form-group">
<input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off">
</div>
<div class="form-group">
<input class="form-control form-control-lg" id="pass1" type="password"  name="password" required="" placeholder="Password">
</div>
<div class="form-group">
<input class="form-control form-control-lg" required="" type="Password" name="password_confirmation" placeholder="Confirm">
</div>
<div class="form-group">
<label class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox"><span class="custom-control-label">By creating an account, you agree the <a href="#">terms and conditions</a></span>
</label>
</div>
<div class="form-group pt-2">
<button class="btn btn-block btn-primary" type="submit">Registrar</button>
<a href="{{url('inicio')}}" class="btn btn-block btn-danger">Volver</a>
</div>

</div>
<div class="card-footer bg-white">
<p>¿ya tienes cuentas?  <a href="{{url('login')}}" class="text-secondary">Login</a></p>
</div>
</div>
</form>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v64f9daad31f64f81be21cbef6184a5e31634941392597" integrity="sha512-gV/bogrUTVP2N3IzTDKzgP0Js1gg4fbwtYB6ftgLbKQu/V8yH2+lrKCfKHelh4SO3DPzKj4/glTO+tNJGDnb0A==" data-cf-beacon='{"rayId":"6b6e8353f95c3ecd","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.11.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>