
<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


@yield('css')
<link rel="stylesheet" href="{{url('css/app.css')}}">
<link rel="stylesheet" href="{{url('css/css-alternos.css')}}">

<title>100% Campesino</title>
<meta name="robots" content="nindex, nofollow">
</head>
<body>

<div class="dashboard-main-wrapper">

<div class="dashboard-header">
@include('layouts.components.navbar')
</div>

@include('layouts.components.sidebar')

<div class="dashboard-wrapper">
<div class="dashboard-ecommerce">
<div class="container-fluid dashboard-content ">




<div class="ecommerce-widget">
  @yield('content')
</div>
</div>
</div>



@include('layouts.components.footer')



</div>



</div>



<script src="{{url('js/app.js')}}"></script>


<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v64f9daad31f64f81be21cbef6184a5e31634941392597" integrity="sha512-gV/bogrUTVP2N3IzTDKzgP0Js1gg4fbwtYB6ftgLbKQu/V8yH2+lrKCfKHelh4SO3DPzKj4/glTO+tNJGDnb0A==" data-cf-beacon='{"rayId":"6b6df4434ba53ee1","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.11.0","si":100}' crossorigin="anonymous"></script>

@yield('js')
</body>
</html>