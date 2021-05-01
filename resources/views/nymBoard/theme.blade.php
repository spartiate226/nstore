@extends('nymBoard.layout')
@section('contenue')
    <div>

        <form id="form" action="{{url('addTheme')}}" method="POST"  name="form" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Ajouter un theme</label>
                <input type="file" id="zip" accept="application/zip" name="theme" class="form-control mt-2">
                <button  type="submit" id="sub" class="btn btn-warning mt-2">Charger</button>
            </div>
        </form>
    </div>

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
                        <div class=""> <a href="" class="btn btn-danger w-100">Supprimer</a></div>
                    </section>
                </div>
            </section>
        @endforeach
    </div>
@endsection
