@extends('dashboard.layout')
@section('contenue')
    <h3>Mon profile</h3>
    <form action="{{url('updatecompte')}}"method="POST" class="card p-3">
        @include("alertpane")
        <section class="row">
            @csrf
            <input name="id" hidden type="number" value="{{Auth::user()->id}}">
            <div class="form-group col-md-6">
                <label>Ancien mot de passe</label>
                <input type="text" class="form-control" name="oldpass" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label>Nouveau mot de passe</label>
                <input type="text" class="form-control" name="newpass" placeholder="">
            </div>
        </section>
        <section class="row">
            <div class="form-group col-md-12">
                <label>Numero de telephone</label>
                <input type="text" class="form-control" name="tel" placeholder="">
            </div>
            <div class="form-group col-md-12">
                <label>Email</label>
                <input type="text" class="form-control" name="email" placeholder="">
            </div>
        </section>
        <button class="btn btn-warning">Mettre à jours</button>
    </form>
@endsection
