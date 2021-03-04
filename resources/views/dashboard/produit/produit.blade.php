@extends('dashboard.layout')
@section('contenue')
<a href="{{url('dashboard/add_prod')}}" class="btn btn-dark">Nouveau</a>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card card-primary card-outline">
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
                    <div class="mailbox-controls">
                        <!-- Check all button -->
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                        </button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="far fa-trash-alt"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fa fa-pen"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fa fa-eye"></i>
                            </button>
                        </div>
                        <div class="float-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                            <!-- /.btn-group -->
                        </div>
                        <!-- /.float-right -->
                    </div>
                    <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th></th>
{{--                                <th>Vendeur</th>--}}
                                <th>Nom</th>
                                <th>Categorie</th>
                                <th>Prix</th>
                                <th>Prix promo</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($produits as $produit)
                            <tr>
                                <td>
                                    <div class="icheck-primary">
                                        <input type="checkbox" value="" id="check1">
                                        <label for="check1"></label>
                                    </div>
                                </td>
{{--                                <td class="mailbox-star"></td>--}}
                                <td class="mailbox-name">{{$produit->nom}}</td>
                                <td class="mailbox-subject">{{$produit->categorie->nom}}</td>
                                <td class="mailbox-attachment">{{$produit->prix}} Fcfa</td>
                                <td class="mailbox-date"></td>
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
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="far fa-trash-alt"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fa fa-pen"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fa fa-eye"></i>
                            </button>
                        </div>
                        <div class="float-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                            <!-- /.btn-group -->
                        </div>
                        <!-- /.float-right -->
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
