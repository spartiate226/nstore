@extends('dashboard.layout')
@section('contenue')

    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>

                            <p>Commandes</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>5000000FCFA</h3>

                            <p>Gain</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>

                            <p>Inscriptions</p>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>

                            <p>Produits</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-6 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-chart-pie mr-1"></i>
                                Ventes
                            </h3>
                            <div class="card-tools">
                                <ul class="nav nav-pills ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content p-0">
                                <!-- Morris chart - Sales -->
                                <div class="chart tab-pane active" id="revenue-chart"
                                     style="position: relative; height: 300px;">
                                    <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                                </div>
                                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                                </div>
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>


                <div class="col-6">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Annexes</h3>

                        <div class="card-tools">
                            <button class="btn btn-dark" data-toggle="modal" data-target="#modal-sm"><i class="fa fa-plus"></i></button>
                        </div>



                        <div class="modal fade" id="modal-sm">
                            <div class="modal-dialog modal-sm">
                              <form class="modal-content" action="{{url('dashboard/addAnnexe')}}" method="post">
                                @csrf
                                <div class="modal-header">
                                  <h4 class="modal-title">Ajout annexe</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Nom" name="nom" id="">
                                    </div>
                                    <input type="number" hidden name="longitude" value="0.0" id="longitude">
                                    <input type="number" hidden name="latitude" value="0.0" id="latitude">
                                    <div class="d-flex justify-content-center">
                                        <button id="start" style="border-radius:100%; height:150px;width:150px" type="button" class="btn btn-primary text-center"><span id="en-cours">Localiser</span></button>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                  <button type="submit" class="btn btn-primary">Ajouter</button>
                                </div>
                            </form>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>

                      </div>
                      <!-- /.card-header -->
                      <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed text-nowrap">
                          <thead>
                            <tr>
                              <th>Nom</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach (App\boutiqueAnnexe::where('boutique_id','=',Auth::user()->group->boutique->id)->get() as $annexe)
                              <tr>
                                <td>{{$annexe->nom}}</td>
                                <td class="text-center">
                                    <a href="#"><i class="fa fa-times"></i></a>
                                </td>
                              </tr>
                              @endforeach

                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>

@endsection
@section('script')
<script src="{{asset('custom/geolocation.js')}}"></script>
@endsection
