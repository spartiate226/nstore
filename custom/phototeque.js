

$(function(){
    var selector=$('.mediaSelector');


    $('.mediafile').click(function(){
        var triggerp=$('#'+$(this).attr('data-trig'));
        triggerp.val($(this).attr('data-path'));
    });
});
