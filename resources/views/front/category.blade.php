
@extends('front.layout')
@section('contenu')
    @php
        template_page('category',$store,$that,$catid);
        @endphp
@endsection
