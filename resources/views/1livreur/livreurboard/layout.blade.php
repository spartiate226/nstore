<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="{{asset('assets/materialize/css/materialize.min.css')}}">
</head>
<body>
    <nav class="black " role="navigation">
        <div class="nav-wrapper container">
          <a id="logo-container" href="#" class="brand-logo">Logo</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="{{url("livreur/home")}}" class="">Mes commandes</a></li>
            <li><a href="{{url("livreur/wallet")}}" class="">Mon portefeuille</a></li>
            <li><a href="#" class="">Profile</a></li>
          </ul>

          <ul id="nav-mobile" class="sidenav">
            <li><a href="{{url("livreur/home")}}" class="">Mes commandes</a></li>
            <li><a href="{{url("livreur/wallet")}}" class="">Mon portefeuille</a></li>
            <li><a href="#" class="">Profile</a></li>
          </ul>
          <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
      </nav>
      <div>
          @yield('contenue')
      </div>
<script src="{{asset('assets/materialize/js/materialize.min.js')}}"></script>
</body>
</html>

