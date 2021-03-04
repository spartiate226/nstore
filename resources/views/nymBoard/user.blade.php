@extends('nymBoard.layout')
@section('contenue')
    @include('user-register',['connect'=>"admin"])
@endsection
