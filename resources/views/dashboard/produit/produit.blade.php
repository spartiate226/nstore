@extends('dashboard.layout')
@section('contenue')
<a href="{{url('dashboard/add_prod')}}" class="btn btn-dark">Nouveau</a>
    <div class="row mt-3">
        <div class="col-md-12">
            <form action="{{url("delprod")}}" METHOD="POST" class="card card-primary card-outline">
                @csrf
                @include("alertpane")
                <div class="card-header">
                    <h3 class="card-title">Produits</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" placeholder="">
                            <div class="input-group-append">
                                <div class="btn btn-primary" style="background:#feb914;color:#002a54">
                                    <i class="fas fa-search"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div  class="mailbox-controls">
                        <!-- Check all button -->
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                        </button>
                        <div class="btn-group">
                            <button type="submit" class="btn btn-default btn-sm">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </div>
                        {{$produits->links("pagination.forproduct")}}
                        <!-- /.float-right -->
                    </div>
                    <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th></th>
{{--                                <th>Vendeur</th>--}}
                                <th>id</th>
                                <th>Nom</th>
                                <th>Categorie</th>
                                <th>Prix</th>
                                <th>Statut</th>
                                <th>Prix promo</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($produits as $produit)
                            <tr>
                                <td>
                                    <div class="">
                                        <input type="checkbox" value="{{$produit->id}}" name="check{{$produit->id}}" >
                                        <label for="check1"></label>
                                    </div>
                                </td>
{{--                                <td class="mailbox-star"></td>--}}
                                <td class="mailbox-name">{{$produit->id}}</td>
                                <td class="mailbox-name">{{$produit->nom}}</td>
                                <td class="mailbox-subject">{{$produit->categorie->nom}}</td>
                                <td class="mailbox-attachment">{{$produit->prix}} Fcfa</td>
                                <td class="mailbox-date">{{$produit->disponibilite}}</td>
                                <td class="mailbox-date"></td>
                                <td class="mailbox-date">
                                    <a href="{{url('produpdate',[$produit->id])}}" class="btn btn-default btn-sm">
                                        <i class="fa fa-pen"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- /.table -->
                    </div>
                    <!-- /.mail-box-messages -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer p-0">
                    <div class="mailbox-controls">
                        <!-- Check all button -->
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                            <i class="far fa-square"></i>
                        </button>
                        <div class="btn-group">
                            <button type="submit" class="btn btn-default btn-sm">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </div>
                    {{$produits->links("pagination.forproduct")}}
                        <!-- /.float-right -->
                    </div>
                </div>
            </form>
            <!-- /.card -->
        </div>
    </div>
@endsection
