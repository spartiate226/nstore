@extends('1livreur.layout')
@section('contenue')
    @include('user-register',['connect'=>"logis",'role'=>2])
@endsection
