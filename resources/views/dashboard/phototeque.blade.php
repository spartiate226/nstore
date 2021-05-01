@extends('dashboard.layout')
@section('contenue')
    <div>
        <form action="{{url('upload')}}" method="POST" enctype="multipart/form-data">
            @include('alertpane')
            @csrf
            <div class="form-group row">
                <input type="number" hidden value="">
                <input class="form-control col-md-8 m-1 justify-content-between" type="file" name="media">
                <button class="btn btn-warning m-1 col-md-3">Televerser un fichier</button>
            </div>
        </form>
    </div>
    <div class="row border-top p-2">
        @foreach(getMedia(Auth::user()->group->boutique_id) as $media)
            <div class="col-md-3 p-2">
                <section class="card">
                    <div class="card-body">
                        <div class="card-img">
                            <img class="w-100" style="height: 300px" src="{{themes_path()->url($media)}}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <form class="d-inline" action="{{url('delmedia')}}" method="POST">
                            @csrf
                            <input hidden type="text" name="media" value="{{$media}}">
                            <button title="Supprimer" type="submit" class="text-danger btn"><i class="fa fa-times"></i></button>
                        </form>
                    </div>
                </section>
            </div>
        @endforeach
    </div>
@endsection
