@extends('dashboard.layout')
@section('contenue')
    <div>
        <button class="btn btn-warning">Telécharger plus de themes</button>
    </div>
    <div class="row mt-3">
        @foreach(list_themes(Auth::user()->boutique->id) as $theme)
            <section class="col-md-3 p-1">
                <div class="card p-2">
                    <img style="width: 100%;height: 200px" src="{{getThemeDetail($theme)['image']}}">
                    <div>
                        <h3>{{getThemeDetail($theme)['name']}}</h3>
                        <p>Par {{getThemeDetail($theme)['author']}}</p>
                    </div>
                    <section class="row">
                        <div  class="col-6 p-1"><a @if(Auth::user()->boutique->template->template!=getThemeDetail($theme)['name']) href="{{url('changeTheme',['template'=>getThemeDetail($theme)['name']])}}" @else style="background-color: rgba(0,0,0,0.3)" @endif  class="btn btn-success w-100">Activer</a></div>
                        <div class="col-6 p-1"> <a href="" class="btn btn-danger w-100">Supprimer</a></div>
                    </section>
                </div>
            </section>
        @endforeach
    </div>
@endsection
