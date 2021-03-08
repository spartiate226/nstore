

$(function(){
    var selector=$('.mediaSelector');
    selector.focus(function(){
        console.log('hello');
        var inpute=$(this);
        $('.mediafile').click(function(){
            inpute.val($(this).attr('data-path'));
        });
    });
});
