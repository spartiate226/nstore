

$(function () {

    function gps(){
        var long=$('#longitude');
        var lat=$('#latitude');
        var textatente=$('#en-cours');
    if (navigator.geolocation){
        navigator.geolocation.getCurrentPosition(function (position) {
            long.val(position.coords.longitude);
            lat.val(position.coords.latitude);
            $('#en-cours').text('Localisé(é) avec une precision de '+position.coords.accuracy+" m");
        }, function (error) {
            console.log(error);
            $('#en-cours').text('Erreur lors de la localisation.Reessayez!');
        },{
            enableHighAccuracy:true,
            timeout:15000
        });
    }
    }

$('#start').click(function(){
    $('#en-cours').text('En cours...');
   gps();
});

});
