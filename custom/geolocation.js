

$(function () {

    function gps(){
        var long=$('#longitude');
        var lat=$('#latitude');
        var textatente=$('#en-cours');
    if (navigator.geolocation){
        navigator.geolocation.getCurrentPosition(function (position) {
            long.val(position.coords.longitude);
            lat.val(position.coords.latitude);
            $('#en-cours').text('Precis de '+position.coords.accuracy+" m");
          $('#accuracy').text(position.coords.accuracy);
        }, function (error) {

        },{
            enableHighAccuracy:true,
        });
    }
    }

$('#start').click(function(){
    $('#loader').css({display:"block"});
    $('#en-cours').text('En cours...');

    setInterval(function(){
        $('#loader').css({display:"none"});
    },15000);
   gps();
});

});
