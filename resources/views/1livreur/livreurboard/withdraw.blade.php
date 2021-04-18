@extends("1livreur.livreurboard.layout")
@section("contenue")
<div class="container">
    <h2 class="center">Retrait</h2>
    <form class="card" style="padding:5px" action="">
       <section class="row">
        <div class="col s6 input">
            <label for="">Somme</label>
            <input type="text">
        </div>
        <div class="col s6 input">
            <label for="">Code</label>
            <input type="text">
        </div>
       </section>
       <section class="row ">
        <div class="col s6 input">
            <button class="btn">Retrait</button>
        </div>
       </section>
    </form>
</div>
@endSection
