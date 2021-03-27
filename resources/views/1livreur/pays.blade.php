@extends('1livreur.layout')
@section('contenue')
    <div>
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#boutiqueform">Ajouter un Pays</button>
        <div class="modal fade" id="boutiqueform">
            <div class="modal-dialog modal-xl">
                <form action="{{url('1livreur/pays')}}" method="Post" class="modal-content">
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
                                <h3 class="border-bottom">Pays</h3>
                                <section class="row m-0">

                                    <div class="form-group col-md-12 p-2">
                                        <label>Nom</label>
                                        <input class="form-control" name="nom" type="text" placeholder="">
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
                        <h3 class="card-title">Pays</h3>

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
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pays as $pays)
                                    <tr>
                                        <td>
                                            <div class="icheck-primary">
                                                <input type="checkbox" class="check" value="{{$pays->id}}" name="check{{$pays->id}}" id="check{{$pays->id}}">
                                                <label for="check1"></label>
                                            </div>
                                        </td>
                                        <td class="mailbox-star">{{$pays->nom}}</td>
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
