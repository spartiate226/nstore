@extends('dashboard.layout',['title'=>'Nouveau produit'])
@section('contenue')

<div class="row">
<div class="col-md-12">
    <form action="{{url('dashboard/produit')}}" enctype="multipart/form-data" method="POST" class="card card-primary card-outline">
        @csrf
        <div class="card-header">
            <h3 class="card-title">Formulaire</h3>
        </div>
        <!-- /.card-header -->
        @include('alertpane')
        <div class="card-body">
            <section class="row m-0">
                <div class="form-group col-md-12">
                    <label for="">Titre</label>
                    <input type="text" name="nom" class="form-control">
                </div>
            </section>
            <section class="row m-0">
                <div class="form-group col-md-6">
                    <label for="">Disponibilité</label>
                    <select class="form-control" name="disponibilite">
                            <option value="En stock">En stock<option>
                            <option value="Hors stock">Hors stock<option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Categorie</label>
                    <select class="form-control" name="categorie_id">
                        @foreach(get_categorie(Auth::user()->boutique->id) as $categorie)
                        <option value="{{$categorie->id}}">{{$categorie->nom}}<option>
                        @endforeach
                    </select>
                </div>
            </section>

            <section class="row m-0">
                <div class="form-group col-md-6">
                    <label for="">Prix normal</label>
                    <input type="text" name="prix" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Prix promo</label>
                    <input type="text" name="prix_promo" class="form-control">
                </div>

            </section>
            <div class="form-group">
                    <textarea name="description" id="summernote" class="form-control" style="height: 300px">

                    </textarea>
            </div>
            <section class="row m-0">
                <div class="form-group col-md">
                    <div class="btn btn-default btn-file">
                        <i class="fas fa-paperclip"></i> Photo couverture
                        <input readonly type="text" name="image1" id="img1"  data-toggle="modal" data-target="#img1dialog" class="mediaSelector">
                    </div>
                    <p class="help-block">Max. 300kb</p>
                </div>
                <div class="form-group col-md">
                    <div class="btn btn-default btn-file">
                        <i class="fas fa-paperclip"></i> Photo de detail
                        <input readonly type="text" name="image2" id="img2"  data-toggle="modal" data-target="#img2dialog" class="mediaSelector">
                    </div>
                    <p class="help-block">Max. 300kb</p>
                </div>
                <div class="form-group col-md">
                    <div class="btn btn-default btn-file">
                        <i class="fas fa-paperclip"></i> Photo de detail
                        <input readonly type="text" name="image3" id="img3"  data-toggle="modal" data-target="#img3dialog" class="mediaSelector">
                    </div>
                    <p class="help-block">Max. 300kb</p>
                </div>
            </section>



            @include("media",['target'=>"img1dialog","trigger"=>"img1"])
             @include("media",['target'=>"img2dialog","trigger"=>"img2"])
             @include("media",['target'=>"img3dialog","trigger"=>"img3"])
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <div class="float-right">
                <button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Nettoyer</button>
                <button type="submit" class="btn btn-primary text-dark" style="background:#feb914 "><i class="far fa-hdd"></i> Publier</button>
            </div>
        </div>
        <!-- /.card-footer -->
    </form>


    <!-- /.card -->
</div>
</div>
@endsection
@section('script')
<script src="{{asset('plugins/codemirror/codemirror.js')}}"></script>
<script src="{{asset('plugins/codemirror/mode/css/css.js')}}"></script>
<script src="{{asset('plugins/codemirror/mode/xml/xml.js')}}"></script>
<script src="{{asset('plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>
<script>
    $(function () {
      // Summernote
      $('#summernote').summernote()

      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    })
  </script>
  <script src="{{asset('custom/phototeque.js')}}"></script>
@endsection
