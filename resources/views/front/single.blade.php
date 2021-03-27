
@extends('front.layout')
@section('contenu')
    @php
        template_page('single',$store,$that,$id);
        @endphp
@endsection
