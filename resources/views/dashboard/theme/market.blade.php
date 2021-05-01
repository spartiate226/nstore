@extends('dashboard.layout')
@section('contenue')
    <div>
        <a href="{{url('dashboard/nayamaxtheme')}}" class="btn btn-warning">Themes Nayamax</a>
    </div>
    @include("alertpane")
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
                        <div  class="col-6 p-1"><a @if(Auth::user()->boutique->template->template!=basename($theme)) href="{{url('dashboard/changeTheme',['template'=>basename($theme)])}}" disabled @else style="background-color: rgba(0,0,0,0.3)" @endif  class="btn btn-success w-100">Activer</a></div>
                        <form class="col-6 p-1" action="{{url('deltheme',[basename($theme)])}}" method="POST">
                            @csrf
                            <button class="btn btn-danger w-100" @if(Auth::user()->boutique->template->template==basename($theme))  disabled @endif>Supprimer</button>
                        </form>
                    </section>
                </div>
            </section>
        @endforeach
    </div>
@endsection
