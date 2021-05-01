@extends('dashboard.layout')
@section('contenue')
<div class="row m-0">
    <div class="col-lg-6 col-6">
        <!-- small box -->
        <div class="small-box bg-info" >
            <div class="inner" style="height: 250px">
                <h1 style="font-size: 85px">{{Auth::user()->group->boutique->portefeuille->montant}}</h1>

                <p>Disponible</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="{{url("dashboard/demande_retrait")}}" class="small-box-footer">Faire un retrait <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-6 col-6">
        <!-- small box -->
        <div class="small-box bg-info" >
            <div class="inner" style="height: 250px">
                <h1 style="font-size: 85px">{{Auth::user()->group->boutique->portefeuille->states->sum('montant')}}</h1>

                <p>Total perçue</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="{{url('dashboard/historique_retrait')}}" class="small-box-footer">Historiques <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
@endsection
