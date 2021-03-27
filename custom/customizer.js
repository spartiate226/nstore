$(function () {
var field=$('.customizer-field');
field.blur(function () {
$.post($('#customizer_url').attr('data-url'),
       {'val':$(this).val(),
        '_token':$('#customizer_url').attr('data-token'),
        'setting':$(this).attr('data-setting'),
        'section':$(this).attr('data-section'),
        'control':$(this).attr('data-control')
       },{}).done(function (data) {
console.log(data);
});
});

});
