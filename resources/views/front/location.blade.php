@extends('front.layout')
@section('contenu')
<div class="row m-0 p-3">
    <section class="col-md">
        <h5>Contact Informations</h5>
        <div class="form-group p-3 mt-2">
             <input class="form-control" type="text" placeholder="Nom">
        </div>
        <div class="form-group p-3 mt-2">
             <input class="form-control" type="text" placeholder="Prenom">
        </div>
        <div class="form-group p-3 mt-2">
             <input class="form-control" type="text" placeholder="Telephone">
        </div>
        <div class="form-group p-3 mt-2">
           <textarea class="form-control" placeholder="Description du lieu">

           </textarea>
       </div>
        {{-- <div class="form-group p-3 mt-2">
             <select class="form-control" name="" id="">
                   <option value="">karpala</option>
             </select>
        </div> --}}
        <div class="form-group p-3">
            <button class="btn btn-dark w-100" data-toggle="modal" data-target="#gps">Me localiser</button>
        </div>
        <input type="text" id="longitude">
        <input type="text" id="latitude">
    </section>
    <section class="col-md">
     <h5>Moyent de paiement</h5>
    </section>
    <section class="col-md">
     <div class=" p-3">
         <section class="d-flex w-100 justify-content-between mt-3">
             <span class="align-self-start">3x Tomates</span>
             <span class="align-self-end">3000fcfa</span>
         </section>
         <section class="d-flex w-100 justify-content-between mt-3">
            <span class="align-self-start">3x Tomates</span>
            <span class="align-self-end">3000fcfa</span>
        </section>
        <section class="d-flex w-100 justify-content-between mt-3">
            <span class="align-self-start">3x Tomates</span>
            <span class="align-self-end">3000fcfa</span>
        </section>
        <section class="border-bottom"></section>
        <section class="d-flex w-100 justify-content-between mt-3">
            <span class="align-self-start">Total</span>
            <h4><b>5000fcfa</b></h4>
        </section>
     </div>
     <button class="btn btn-warning mt-3 w-100"  data-toggle="modal" data-target="#cmd"><h4>Terminer l'achat</h4></button>
    </section>
</div>


  <!-- Modal -->
  <div class="modal fade" id="gps" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Localisation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body d-flex justify-content-center">
           <div>
            <h5 id="en-cours" class="text-center">Cliquez ici :</h5>
             <section id="loader" style="display: none">
                <div  class="loader d-flex  justify-content-center">
                    <section class="h-100 d-flex flex-column justify-content-center">
                      <img src="{{asset('nayamax_logo.png')}}" style="width:50px;height:50px">
                    </section>
                 </div>
             </section>
            <button id="start"  class="btn btn-warning w-100 mt-4">Start</button>
           </div>
        </div>
      </div>
    </div>
  </div>




  <!-- Modal -->
  <div class="modal fade" id="cmd" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Paiement</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
    <script src="{{asset('custom/geolocation.js')}}"></script>
@endsection

