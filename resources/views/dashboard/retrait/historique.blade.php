@extends('dashboard.layout')
@section('contenue')
@include('alertpane')

<div class="row mt-3">
    <div class="col-md-12">
        <div  class="card card-primary card-outline">
            @csrf
            @include("alertpane")
            <div class="card-header">
                <h3 class="card-title">Retrait</h3>


            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <div  class="mailbox-controls">
                {{$retraits->links("pagination.forproduct")}}
                </div>
                <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Montant</th>
                            <th>Moyent de paiement</th>
                            <th>statut</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($retraits as $retrait)
                            <tr>

                                {{--                                <td class="mailbox-star"></td>--}}
                                <td class="mailbox-name">{{$retrait->montant}}</td>
                                <td class="mailbox-subject">{{$retrait->moyen}}</td>
                                <td class="mailbox-attachment">{{$retrait->retrait_type_id}}</td>

                                <td class="mailbox-date">
                                    <a href="" class="btn btn-danger btn-sm">
                                        Annuler
                                    </a>
                                    <a href="" class="btn btn-success btn-sm">
                                        Retirer
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
                {{$retraits->links("pagination.forproduct")}}
                <!-- /.float-right -->
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>
</div>
@endsection
