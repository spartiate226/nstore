@extends('dashboard.layout')
@section('contenue')

    <div>
        @if ($livreurs==null)
        <form action="{{url('dashboard/Asklivraison',['commande'=>$commande])}}" method="GET">

            <div class="form-group">
                <label>Lieu de reception du colis :</label>
                <select class="form-control" name="annexe" id="">
                    @foreach (App\boutiqueAnnexe::where('boutique_id','=',Auth::user()->group->boutique->id)->get() as $annexe)
                    <option value="{{$annexe->id}}">{{$annexe->nom}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Heure de reception du colis :</label>
                <input class="form-control" type="time" name="heure" id="">
            </div>
            <div class="form-group">
                <label>Description du lieu :</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="5"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-warning">Suivant</button>
            </div>
        </form>
        @else
        <form action="{{url('dashboard/Asklivraison')}}" method="POST">
            @csrf
            <input hidden name="annexe_id" type="number" value="{{$info['annexe']}}">
            <input hidden type="time" name="heure" value="{{$info['heure']}}">
            <textarea hidden name="description" id="" cols="30" rows="10">{{$info['description']}}</textarea>
            <label for="">Selectionner un Livreur :</label>
            <section class="row">
                    @forelse ($livreurs as $livreur)
                    <div class="form-group col-md-3">

                                <label class="card card-widget widget-user w-100" for="id{{$livreur->id}}">
                                  <!-- Add the bg color to the header using any of the bg-* classes -->
                                  <div class="widget-user-header bg-info">
                                    <h3 class="widget-user-username">{{$livreur->nom}} {{$livreur->prenom}}</h3>
                                  </div>
                                  <div class="widget-user-image">
                                    <img class="img-circle elevation-2" src="{{asset('livreur_photo/'.$livreur->photo)}}" alt="User Avatar">
                                  </div>
                                  <div class="card-footer">
                                    <div class="row">
                                      <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                          <h5 class="description-header">3,200</h5>
                                          <span class="description-text">Jobs</span>
                                        </div>
                                        <!-- /.description-block -->
                                      </div>
                                      <!-- /.col -->
                                      <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                          <h5 class="description-header">13,000</h5>
                                          <span class="description-text">Notes</span>
                                        </div>
                                        <!-- /.description-block -->
                                      </div>
                                      <!-- /.col -->
                                      <div class="col-sm-4">
                                        <div class="description-block">
                                          <h5 class="description-header">ville</h5>
                                          <span class="description-text">Zone</span>
                                        </div>
                                        <!-- /.description-block -->
                                      </div>
                                      <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                  </div>
                                    <!-- /.row -->
                                </label>
                                <div class="w-100 d-flex justify-content-center">
                                    <input type="radio" value="{{$livreur->id}}" name="livreur_id" id="id{{$livreur->id}}">
                                   </div>
                    </div>
                    @empty
                     <h1>Vide</h1>
                    @endforelse

            </section>
            <div class="form-group">
                <button type="submit" class="btn btn-warning">Lancer la demande</button>
            </div>
        </form>
        @endif
    </div>
@endsection

