@extends('dashboard.layout')
@section('contenue')
    <div class="row mt-3">
        @foreach(market_themes() as $theme)
            <section class="col-md-3 p-1">
                <div class="card p-2">
                    <img style="width: 100%;height: 200px" src="{{MarketThemeDetail($theme)['image']}}">
                    <div>
                        <h3>{{MarketThemeDetail($theme)['name']}}</h3>
                        <p>Par {{MarketThemeDetail($theme)['author']}}</p>
                    </div>
                    <section class="">
                        @if(file_exists(themes_path()->path(Auth::user()->group->boutique->id."/themes/".basename($theme))))
                            <div class=""> <button disabled class="btn btn-outline-warning w-100">Deja téléchargé</button></div>
                        @else
                            <div class=""> <a href="{{url('theme_download',[basename($theme)])}}" class="btn btn-outline-warning w-100">Télécharger</a></div>
                        @endif
                    </section>
                </div>
            </section>
        @endforeach
    </div>
@endsection
