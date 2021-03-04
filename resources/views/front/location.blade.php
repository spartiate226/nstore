@extends('front.layout')
@section('contenu')
   <div class="h-100 d-flex justify-content-center">
       <div class="h-100 d-flex flex-column justify-content-center align-content-center w-25 card p-2">
           <h1 class="text-center mb-5">Localisation</h1>
           <button id="locatebtn" class="btn btn-danger">Lancer le processus de Localisation</button>
       </div>
   </div>
@endsection
@section('script')
    <script src="{{asset('custom/geolocation.js')}}"></script>
@endsection
