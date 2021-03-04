<!Doctype html>
<html class="h-100">
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

</head>
<body class="h-100">
 <div class="h-100 p-1">
     @yield('contenu')
 </div>
<div class="bg-secondary">
    <p class="m-0 p-1">Fièrement propulser par <b>NAYAMAX</b></p>
</div>
</body>
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
@yield('script')
</html>
