<!Doctype html>
<html class="h-100">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{$that->slug}}</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/ionicon/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/elegantIcon/legant.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/stylecust.css')}}">
    {{$that->Topcss()}}
    {{$that->Topjs()}}
</head>
<body class="h-100">
 <div class="h-100 p-1">
     @yield('contenu')
 </div>
</body>
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
{{$that->Bottomjs()}}
@yield('script')
</html>
