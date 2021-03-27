
@extends('front.layout')
@section('contenu')
<div class="">
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
                    <input class="form-control" type="text" name="" id="">
                </div>
                <div class="form-group">
                    <label for="">Prenom</label>
                    <input class="form-control" type="text" name="" id="">
                </div>
                <div class="form-group">
                    <label for="">Numero</label>
                    <input class="form-control" type="text" name="" id="">
                </div>
                <div class="form-group">
                    <label for="">Quartier :</label>
                    <select class="form-control" name="" id="">
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
                   <textarea class="form-control" name="" id="" cols="30" rows="7"></textarea>
                </div>
                <div class="form-group">
                    <input type="number" hidden name="" id="longitude">
                    <input type="number" hidden name="" id="latitude">
                    <p>NB :Cette procedure est obligatoire</p>
                    <button id="start" class="btn btn-danger"><i class="fa fa-map-marker"></i> Me localiser</button>
                    <span id="en-cours"></span>
                </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="border p-3">
                    <h3>Votre commande</h3>
                    <?php
                foreach ($that->cart_total_byItem() as $produit) {

                ?>
                <section class="d-flex w-100 justify-content-between mt-3">
                    <span class="align-self-start"><?php echo $produit['quantite']."x  ".$that->getProduct($produit['id'])->nom?></span>
                    <span class="align-self-end"><?php echo $produit['total']?>Fcfa</span>
                </section>
                <?php
                }
                ?>
               <section class="d-flex w-100 justify-content-between mt-3">
                  <span class="align-self-start">Total :</span>
                  <h3 class="align-self-end"><?php echo $that->cart_total()?>Fcfa</h3>
               </section>

                <section class="mt-5">
                    <p>Paiement :<br>
                       <span>Orange</span>
                    </p>
                </section>

                <section class="mt-5">
                    <a href="" class="btn btn-secondary w-100 d-block mb-5">PAYER</a>
                </section>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
@section('script')
    <script src="{{asset('custom/geolocation.js')}}"></script>
@endsection
