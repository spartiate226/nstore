@extends('nymBoard.layout')
@section('contenue')
    @include('user-register',['connect'=>"admin","role"=>1])
@endsection
