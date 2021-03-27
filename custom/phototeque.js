

$(function(){
    var selector=$('.mediaSelector');
    selector.focus(function(){
        
        var inpute=$(this);
        $('.mediafile').click(function(){
            inpute.val($(this).attr('data-path'));
        });
    });
});
