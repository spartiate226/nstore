@extends('dashboard.layout')
@section('contenue')
    @include('user-register',['connect'=>'vendor',"role"=>3])
@endsection

