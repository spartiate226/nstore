@extends('dashboard.layout')
@section('contenue')
    <div class="row justify-content-center">
        <section class="row col-md-5 card p-3">
            <div class="col-md-12">
                <h5>Vous etes sur le point de retirer :</h5>
                <h3>{{Auth::user()->group->boutique->portefeuille->montant}} franc</h3>
                <p>Par :</p>
                <form action="{{url('retraitAsk')}}" method="POST" class="row">
                    @csrf
                    <input hidden type="radio" name="moyen" id="carte" value="2">
                    <input hidden type="radio" name="moyen" id="orange" value="1">
                    <div class="col-md-6 d-flex justify-content-center"><button id="carte-bt" class="btn btn-outline-dark"><i class="fas fa-credit-card"></i> Carte de credit</button></div>
                    <div class="col-md-6 d-flex justify-content-center"><button id="orange-bt" class="btn btn-outline-warning">Orange Money</button></div>
                </form>
            </div>
        </section>

    </div>
@endsection
@section("script")
    <script>
        var carte=$("#carte");
        var orange=$("#orange");
        var cartebt=$("#carte-bt");
        var orangebt=$("#orange-bt");

        $(document).submit((e)=> {
            var bt=$(e.originalEvent.submitter).attr("id");
            if( confirm("Voulez vous vraiment coninuer?")){
                if (bt=="carte-bt"){
                    carte.prop("checked", true);
                }
                if (bt=="orange-bt"){
                    orange.prop("checked", true);
                }
            }else{
                e.preventDefault();
            }

        });
    </script>
@endsection
