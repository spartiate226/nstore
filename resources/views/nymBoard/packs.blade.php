@extends('nymBoard.layout')
@section('contenue')
    <div>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#boutiqueform">Ajouter un Packs</button>
            <div class="modal fade" id="boutiqueform">
                <div class="modal-dialog modal-xl">
                    <form action="{{url('addpack')}}" method="POST" class="modal-content">
                        @csrf
                        <div class="modal-header">
                            <button class="btn btn-dark" type="submit">Sauvegarder</button>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <fieldset class="card p-2">
                                    <section class="row m-0">

                                        <div class="form-group col-md-6 p-2">
                                            <label>Nom du pack</label>
                                            <input name="nom" class="form-control" type="text" placeholder="Indiquer le nom du pack">
                                        </div>
                                        <div class="form-group col-md-6 p-2">
                                            <label>Prix</label>
                                            <input name="prix" class="form-control" type="number" placeholder="Tarif">
                                        </div>
                                    </section>
                                    <section class="row m-0">

                                        <div class="form-group col-md-12 p-2">
                                            <label>Durée d'expiration</label>
                                            <input name="expiration" class="form-control" type="number" >
                                        </div>
                                    </section>
                                    <section class="row m-0">
                                        <div class="form-group col-md-6 p-2">
                                            <label>Nombre de comptes</label>
                                            <input name="compte" class="form-control" type="number" >
                                        </div>
                                        <div class="form-group col-md-6 p-2">
                                            <label>Nombre de themes</label>
                                            <input name="theme" class="form-control" type="number" >
                                        </div>
                                    </section>
                                </fieldset>
                                <fieldset class="card p-2">
                                    <div class="row">
                                        <section class="col-md-6">
                                            <h4>Traduction</h4>
                                            <div>
                                                <h6>Traduction manuelle</h6>
                                                <div class="p-2">
                                                    <input name="traduction_manuelle" value="true" class="" type="radio" >
                                                    <label>Oui</label>
                                                </div>
                                                <div class="p-2">
                                                    <input name="traduction_manuelle" class="" value="false" type="radio" >
                                                    <label>Non</label>
                                                </div>
                                            </div>
                                            <div>
                                                <h6>Traduction automatique</h6>
                                                <div class="p-2">
                                                    <input name="traduction_auto" value="true" class="" type="radio" >
                                                    <label>Oui</label>
                                                </div>
                                                <div class="p-2">
                                                    <input name="traduction_auto" class="" value="false" type="radio" >
                                                    <label>Non</label>
                                                </div>
                                            </div>
                                        </section>


                                        <section class="col-md-6">
                                            <h4>Livraison</h4>
                                            <div>
                                                <h6>Livraison externes</h6>
                                                <div class="p-2">
                                                    <input name="livraison_externe" value="true" class="" type="radio">
                                                    <label>Oui</label>
                                                </div>
                                                <div class="p-2">
                                                    <input name="livraison_externe" class="" value="false" type="radio">
                                                    <label>Non</label>
                                                </div>
                                            </div>
                                            <div>
                                                <h6>Livraison express</h6>
                                                <div class="p-2">
                                                    <input name="livraison_express" value="true" class="" type="radio">
                                                    <label>Oui</label>
                                                </div>
                                                <div class="p-2">
                                                    <input name="livraison_express" class="" value="false" type="radio">
                                                    <label>Non</label>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="row">
                                        <section class="col-md-6">
                                            <h4>Rapport du site</h4>
                                            <div class="p-2">
                                                <input name="rapport" value="true" class="" type="radio">
                                                <label>Oui</label>
                                            </div>
                                            <div class="p-2">
                                                <input name="rapport" class="" value="false" type="radio">
                                                <label>Non</label>
                                            </div>
                                        </section>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                    <!-- /.modal-content -->
                </div>
            </div>

    </div>



    <div class="row mt-3">
        <div class="col-md-12">
            @include('alertpane')
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Packs</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" placeholder="">
                            <div class="input-group-append">
                                <div class="btn btn-primary">
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
                                <th>Nom</th>
                                <th>durée</th>
                                <th>Comptes</th>
                                <th>Themes</th>
                                <th>Traduction Manuelle</th>
                                <th>Traduction Automatique</th>
                                <th>Livraison express</th>
                                <th>Livraison externe</th>
                                <th>Rapport</th>
                                <th>prix</th>
                                <th>action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(packs() as $pack)
                                    <tr>
                                        <td>
                                            <div class="">
                                                <input class="check" type="checkbox" value="{{$pack->id}}" name="check{{$pack->id}}" id="check">
                                                <label for="check1"></label>
                                            </div>
                                        </td>
                                        <td class="mailbox-star">{{$pack->nom}}</td>
                                        <td class="mailbox-star">{{$pack->expiration}}</td>
                                        <td class="mailbox-star">{{$pack->compte}}</td>
                                        <td class="mailbox-star">{{$pack->theme}}</td>
                                        <td class="mailbox-star">{{$pack->traduction_manuelle}}</td>
                                        <td class="mailbox-star">{{$pack->traduction_auto}}</td>
                                        <td class="mailbox-star">{{$pack->livraison_express}}</td>
                                        <td class="mailbox-star">{{$pack->livraison_externe}}</td>
                                        <td class="mailbox-star">{{$pack->rapport}}</td>
                                        <td class="mailbox-star">{{$pack->prix}}</td>
                                        <td class="mailbox-star">
                                            <button class="btn btn-success"><i class="fas fa-pen-alt  d-inline"></i></button>
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
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="far fa-trash-alt"></i>
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
