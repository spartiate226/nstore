@extends('1livreur.layout')
@section('contenue')
    @include('user-register',['connect'=>"livreur",'role'=>2])
@endsection
