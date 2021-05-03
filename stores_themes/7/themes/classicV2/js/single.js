/*------------------------
   Single Product Image Zoom
   -------------------------*/
// Zoom One
jQuery(document).ready(function(){
    $(".zoom").elevateZoom({
        tint:true,
        tintColour:'#000',
        tintOpacity:0.5,
        zoomWindowWidth:375,
        zoomWindowHeight:330,
        responsive: true,
        easing : true
    });

    //Zoom Two
    $("#zoom-2").elevateZoom({
        responsive: true,
        tint:true,
        tintColour:'#000000',
        tintOpacity:0.4,
        easing: true,
        zoomWindowWidth:450,
        zoomWindowHeight:274,
        borderSize: 1,
        borderColour: '#252525',
        gallery:'images-menu',
        cursor: 'pointer',
        galleryActiveClass: "active"
    });

    $("#zoom-2").bind("click", function(e) {
        var ez = $('#zoom-2').data('elevateZoom');
        $.fancybox(ez.getGalleryList());
        return false;
    });

    //Zoom Three
    $("#zoom-3").elevateZoom({
        responsive: true,
        zoomType: 'inner',
        easing: true,
        zoomWindowWidth:450,
        zoomWindowHeight:274,
        borderSize: 1,
        borderColour: '#252525',
        gallery:'images-menu',
        cursor: 'pointer',
        galleryActiveClass: "active"
    });
});
