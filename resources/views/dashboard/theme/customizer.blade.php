@extends('dashboard.layout')
@section('contenue')
    <div class="container">
        <span id="customizer_url" hidden data-url="{{url('dashboard/customizer')}}" data-token="{{csrf_token()}}"></span>
        <div class="row">
            @foreach($config->getSections() as $section_label=>$section)
                <section class="col-md-6 p-1">
                    <div class="card">
                      <section class="card-body">
                          <h3>{{$section_label}}</h3>
                          <div class="row">
                              @foreach($config->sectionSettings($section_label) as $setting_label=>$setting)
                                  <div class="col-12">
                                      <div class="card">
                                          <div class="card-header">
                                              <h3 class="card-title">
                                                  <i class="fa fa-cog"></i>
                                                  {{$setting_label}}
                                              </h3>

                                              <div class="card-tools">
                                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                      <i class="fas fa-minus"></i>
                                                  </button>
                                              </div>
                                          </div>
                                          <div class="card-body">
                                              @foreach($config->settingControls($setting_label,$section_label) as $control_label=>$control)
                                                  <div class="form-group m-1">
                                                      <label>{{$control_label}}</label>
                                                      {{controlBlock($control,$control_label,$setting_label,$section_label)}}
                                                  </div>
                                              @endforeach
                                          </div>
                                      </div>
                                  </div>
                              @endforeach
                          </div>
                      </section>
                    </div>
                </section>
            @endforeach
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('custom/customizer.js')}}"></script>
    <script src="{{asset('custom/phototeque.js')}}"></script>
@endsection
