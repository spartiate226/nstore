
@extends('front.layout')
@section('contenu')
<form class="" action="{{url('commande/place')}}" method="POST">
    @csrf
    <section class="bg-dark">
        <h2 class="checkout-title text-center p-3"><span class="text-light">NAYA</span><span class="text-warning">MAX</span>  <span class="text-light">Checkout</span></h1>
    </section>
    <div class="container">
        <section class="row">
            <div class="col-md-7">
                <div class="p-3">
                    <h3>Address de livraison</h3>
                <div class="form-group">
                    <label for="">Nom</label>
                    <input class="form-control" type="text" name="client_nom" id="">
                </div>
                <div class="form-group">
                    <label for="">Prenom</label>
                    <input class="form-control" type="text" name="client_prenom" id="">
                </div>
                <div class="form-group">
                    <label for="">Numero</label>
                    <input class="form-control" type="text" name="client_tel" id="">
                </div>
                <div class="form-group">
                    <label for="">Quartier :</label>
                    <select class="form-control" name="quartier_id" id="">
                         @foreach ($pays as $pays)
                            @foreach ($pays->villes as $ville)
                                @foreach ($ville->zones as $zone)
                                    @foreach ($zone->quartiers as $quartier)

                            <option value="{{$quartier->id}}"><b>{{$quartier->nom}}</b> ({{$pays->nom}}-{{$ville->nom}})</option>
                                    @endforeach
                                @endforeach
                            @endforeach
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Bref description</label>
                   <textarea class="form-control" name="description" id="" cols="30" rows="7"></textarea>
                </div>
                <div class="form-group">
                    <input type="number" hidden name="longitude" value="0.0" id="longitude">
                    <input type="number" hidden name="latitude" value="0.0" id="latitude">
                    <p>NB :Cette procedure est obligatoire</p>
                    <button id="start" class="btn btn-danger"><i class="fa fa-map-marker"></i> Me localiser</button>
                    <span id="en-cours"></span>
                </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="border p-3">
                    <h3>Votre commande</h3>

                @foreach ($that->cart_total_byItem() as $produit)
                <input hidden type="text" name="prod{{$produit['id']}}" value="{{json_encode($produit)}}" id="">

                <section class="d-flex w-100 justify-content-between mt-3">
                    <span class="align-self-start">{{$produit['quantite']}}<i class="fa fa-times"></i> {{$that->getProduct($produit['id'])->nom}}</span>
                    <span class="align-self-end">{{$produit['total']}}</span>
                </section>

                @endforeach

               <section class="d-flex w-100 justify-content-between mt-3">
                  <span class="align-self-start">Total :</span>
                  <input type="number" hidden name="total" value="{{$that->cart_total()}}" id="">
                  <h3 class="align-self-end">{{$that->cart_total()}} Fcfa</h3>
               </section>

                <section class="mt-5">
                    <p>Paiement :<br>
                       <span>Orange</span>
                    </p>
                </section>

                <section class="mt-5">
                    <button class="btn btn-secondary w-100 d-block mb-5">Commander</button>
                </section>
                </div>
            </div>
        </section>
    </div>
</form>
@endsection
@section('script')
    <script src="{{asset('custom/geolocation.js')}}"></script>
@endsection
