@extends('dashboard.layout')
@section('contenue')
    <div>
        <div class="form-group">
            <label>Lieu de reception du colis :</label>
            <select class="form-control" name="" id="">
                <option value="">Annexe</option>
            </select>
        </div>
        <div class="form-group">
            <label>Heure de reception du colis :</label>
            <input class="form-control" type="time" name="" id="">
        </div>
        <div>
            <label for="">Selectionner un Livreur :</label>
            <section class="row">
                <div class="form-group col-md-3">

                            <label class="card card-widget widget-user w-100" for="id">
                              <!-- Add the bg color to the header using any of the bg-* classes -->
                              <div class="widget-user-header bg-info">
                                <h3 class="widget-user-username">Alexander Pierce</h3>
                                <h5 class="widget-user-desc">Founder &amp; CEO</h5>
                              </div>
                              <div class="widget-user-image">
                                <img class="img-circle elevation-2" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
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
                            </label>
                   <div class="w-100 d-flex justify-content-center">
                    <input type="radio" name="" id="id">
                   </div>
                </div>
            </section>
        </div>
    </div>
@endsection

