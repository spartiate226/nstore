@extends('nymBoard.layout')
@section('contenue')
    <div>
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#boutiqueform">Ajouter une boutique</button>
        <div class="modal fade" id="boutiqueform">
            <div class="modal-dialog modal-xl">
                <form action="{{url('addBoutique')}}" method="Post" class="modal-content">
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
                                <h3 class="border-bottom">Boutique</h3>
                                <section class="row m-0">

                                    <div class="form-group col-md-12 p-2">
                                        <label>Nom de la boutique</label>
                                        <input class="form-control" name="bnom" type="text" placeholder="Indiquer le nom de la boutique">
                                    </div>

                                </section>
                                <section class="row m-0">
                                    <div class="form-group col-md-6 p-2">
                                        <label>Numero de téléphone 1</label>
                                        <input class="form-control" name="tel1"  type="text" placeholder="numero de telephone">
                                    </div>
                                    <div class="form-group col-md-6 p-2">
                                        <label>Numero de téléphone 2</label>
                                        <input class="form-control" name="tel2" type="text" placeholder="Deuxième numero de telephone">
                                    </div>
                                </section>
                                <section class="row m-0">
                                    <div class="form-group col-md-12 p-2">
                                        <label>Pack initial</label>
                                        <select class="form-control" name="pack_id">
                                            @foreach(packs() as $pack)
                                                <option value="{{$pack->id}}">{{$pack->nom}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </section>
                            </fieldset>
                            <fieldset class="card p-2">
                                <h3 class="border-bottom">Proprietaire</h3>
                                <section class="row m-0">
                                    <div class="form-group col-md-6 p-2">
                                        <label>Nom</label>
                                        <input class="form-control" name="nom" type="text" placeholder="numero de telephone">
                                    </div>
                                    <div class="form-group col-md-6 p-2">
                                        <label>Prenom</label>
                                        <input class="form-control" name="prenom" type="text" placeholder="Deuxième numero de telephone">
                                    </div>
                                </section>
                                <section class="row m-0">
                                    <div class="form-group col-md-6 p-2">
                                        <label>Numero de téléphone</label>
                                        <input class="form-control" name="numero" type="text" placeholder="numero de telephone">
                                    </div>
                                    <div class="form-group col-md-6 p-2">
                                        <label>Email</label>
                                        <input class="form-control" name="email" type="text" placeholder="Email">
                                    </div>
                                </section>
                            </fieldset>
                        </div>
                    </div>
                </form>
                <!-- /.modal-content -->
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12">
                <form class="card card-primary card-outline">
                    @csrf
                    <div class="card-header">
                        <h3 class="card-title">Boutiques</h3>

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
                            <button type="button"  class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                            </button>
                            <div class="btn-group">
                                <button type="submit" class="btn btn-default btn-sm">
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
                                    <th>Tel</th>
                                    <th>Url</th>
                                    <th>Proprietaire</th>
                                    <th>Nombre membres</th>
                                    <th>Nombre de produits</th>
                                    <th>Statut</th>
                                    <th>Inserer par:</th>
                                    <th>Pack</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($boutiques as $boutique)
                                <tr>
                                    <td>
                                        <div class="icheck-primary">
                                            <input type="checkbox" class="check" value="{{$boutique->id}}" name="check{{$boutique->id}}" id="check{{$boutique->id}}">
                                            <label for="check1"></label>
                                        </div>
                                    </td>
                                    <td class="mailbox-star">{{$boutique->bnom}}</td>
                                    <td class="mailbox-subject"></td>
                                    <td class="mailbox-name"><a href="{{url('store/'.$boutique->slug)}}">{{url('store/'.$boutique->slug)}}</a></td>
                                    <td class="mailbox-subject"></td>
                                    <td class="mailbox-attachment"></td>
                                    <td class="mailbox-subject"></td>
                                    <td class="mailbox-date">
                                        <div class="form-group">
                                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                                <label class="custom-control-label" for="customSwitch3">en ligne</label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="mailbox-date"></td>
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
                            </div>

                            <div class="float-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm">
                                        <i class="fas fa-chevron-left"></i>
                                    </button>
                                    <button type="submit" class="btn btn-default btn-sm">
                                        <i class="fas fa-chevron-right"></i>
                                    </button>
                                </div>
                                <!-- /.btn-group -->
                            </div>
                            <!-- /.float-right -->
                        </div>
                    </div>
                </form>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection
