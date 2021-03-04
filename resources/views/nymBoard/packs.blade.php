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
                                            <label>Prix par mois</label>
                                            <input name="prix" class="form-control" type="number" placeholder="Tarif">
                                        </div>
                                    </section>
                                    <h4 class="m-2">fonctionnalité permises</h4>
                                    <section class="row m-0">
                                        @foreach(packs_fonctionnnalite() as $fonctionnalite)
                                        <div class="form-group col-md-3 p-2">
                                            <div class="border p-1">
                                                <input class="" name="fonct_{{$fonctionnalite->id}}" value="{{$fonctionnalite->id}}" type="checkbox">
                                                <label>   {{$fonctionnalite->nom}}</label>
                                            </div>
                                        </div>
                                        @endforeach

                                    </section>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                    <!-- /.modal-content -->
                </div>
            </div>



        <table class="table table-bordered table-light mt-4">
            <thead>
            <tr>
                <th>N°</th>
                <th>Nom</th>
                <th>Nombre abonnés</th>
                <th>Fonctionalités</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <th>N°</th>
                <th>Nom</th>
                <th>Nombre abonnés</th>
                <th>Fonctionalités</th>
                <th>Action</th>
            </tr>
            </tfoot>
        </table>
    </div>



    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Comptes</h3>

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
                                <th>prix</th>
                                <th></th>
                                <th>Email</th>
                                <th>Zone</th>
                                <th>Role</th>
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
                                        <td class="mailbox-star"></td>
                                        <td class="mailbox-star"></td>
                                        <td class="mailbox-name"></td>
                                        <td class="mailbox-subject"></td>
                                        <td class="mailbox-attachment"></td>
                                        <td class="mailbox-date"><button class="btn btn-secondary"></button></td>
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
