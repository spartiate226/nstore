@extends('dashboard.layout')
@section('contenue')
    <div>
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <input type="number" hidden value="">
                <input class="form-control col-md-8 m-1 justify-content-between" type="file" name="media">
                <button class="btn btn-warning m-1 col-md-3">Televerser un fichier</button>
            </div>
        </form>
    </div>
    <div class="row border-top p-2">
        <section class="card col-md-3 p-2">
            <div class="card-body">
                <div class="card-img">
                    <img src="">
                </div>
                   <h4>nom</h4>
            </div>
            <div class="card-footer">
                <a><i class="fa fa-times"></i></a>
            </div>
        </section>
    </div>
@endsection
