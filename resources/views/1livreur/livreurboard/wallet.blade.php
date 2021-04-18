@extends("1livreur.livreurboard.layout")
@section("contenue")
<div class="container">
    <section class="card" style="margin-bottom:15px; padding:5px">
        <h3>Solde</h3>
        <div class="row">
            <section class="col s6">
                250000fcfa
            </section>
            <section class="col s6">
                <a href="{{url('livreur/withdraw')}}" class="btn black">Retirer</a>
            </section>
        </div>
    </section>
    <section class="card" style="margin-bottom:15px; padding:5px">
        <h3>Historique</h3>
        <table class="table-responsive">
            <thead>
                <tr>
                    <th>Date de retrait</th>
                    <th>Somme retirée</th>
                </tr>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </thead>
        </table>
    </section>
</div>
@endSection
