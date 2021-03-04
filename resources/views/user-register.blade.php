<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#boutiqueform">Ajouter une Utilisateur</button>
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
                        <h3 class="border-bottom">Utilisateur</h3>
                        <section class="row m-0">

                            <div class="form-group col-md-6 p-2">
                                <label>Nom :</label>
                                <input class="form-control" name="nom" type="text" placeholder="Nom">
                            </div>
                            <div class="form-group col-md-6 p-2">
                                <label>Prenom :</label>
                                <input class="form-control" name="prenom" type="text" placeholder="Prenom">
                            </div>

                        </section>
                        <section class="row m-0">
                            <div class="form-group col-md p-2">
                                <label>Numero de téléphone 1</label>
                                <input class="form-control" name="tel"  type="text" placeholder="numero de telephone">
                            </div>
                            @if($connect=="logis")
                            <div class="form-group col-md p-2">
                                <label>Villes</label>
                                <select class="form-control" name="zone_id">
                                    @foreach(packs() as $pack)
                                        <option value="{{$pack->id}}">{{$pack->nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @endif
                            <div class="form-group col-md p-2">
                                <label>Role</label>
                                <select class="form-control" name="role_id">
                                    @foreach(roles() as $role)
                                        <option @if(Auth::user()->role_id==3 && $role->id!=5) style="display: none" @endif @if(Auth::user()->role_id==1 && $role->id!=1) @if(Auth::user()->role_id==2 && $role->id!=2||$role->id!=4) style="display: none" @endif style="display: none" @endif value="{{$role->id}}">{{$role->nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </section>
                        <section class="row m-0">
                            @if($connect=="logis")
                            <div class="form-group col-md p-2">
                                <label>Zones</label>
                                <select class="form-control" name="zone_id">
                                    @foreach(packs() as $pack)
                                        <option value="{{$pack->id}}">{{$pack->nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @endif
                            <div class="form-group col-md p-2">
                                <label>Email</label>
                                <input class="form-control" name="email" type="text" placeholder="Deuxième numero de telephone">
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
                            <th>Prenom</th>
                            <th>Tel</th>
                            <th>Email</th>
                            <th>Zone</th>
                            <th>Role</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            @if($user->role_id!=6 && $user->role_id!=4 && $user->role_id!=2 && $user->role_id!=5)
                   @if($user->pseudonyme!="spartiate")
                        <tr>
                            <td>
                                <div class="">
                                    <input class="check" type="checkbox" value="{{$user->id}}" name="check{{$user->id}}" id="check">
                                    <label for="check1"></label>
                                </div>
                            </td>
                            <td class="mailbox-star">{{$user->nom}}</td>
                            <td class="mailbox-star">{{$user->prenom}}</td>
                            <td class="mailbox-name">{{$user->numero}}</td>
                            <td class="mailbox-subject">{{$user->email??"pas de mail"}}</td>
                            <td class="mailbox-attachment">{{$user->zone??"inconnu"}}</td>
                            <td class="mailbox-date"><button class="btn btn-secondary">{{$user->role->nom}}</button></td>
                        </tr>
                   @endif
                            @endif
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
