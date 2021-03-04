$(function () {
if (navigator.geolocation){
    navigator.geolocation.getCurrentPosition(function (position) {
      $('#accuracy').text(position.coords.accuracy);
      $('#longitude').text(position.coords.longitude);
      $('#latitude').text(position.coords.latitude);
    }, function (error) {

    },{
        enableHighAccuracy:true,
    });
}
});
