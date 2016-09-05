$(document).ready(function () {
    $('#t_33').addClass('active');
    

    console.log('ok');
    // canvas Icosahadron


   

    // owl-carousel!!!

    $('.e__text').owlCarousel({
        items: 1,
        dots: true
    });

    $('.owl__c').owlCarousel({
        items:2,
        loop:true,
        nav:false,
        dots:false,
        autoplay:true
    });

    // sv
    $('.icon__c').each(function () {
        var $img = $(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');
        $.get(imgURL, function (data) {
            // Get the SVG tag, ignore the rest
            var $svg = $(data).find('svg');
            // Add replaced image's ID to the new SVG
            if (typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if (typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass + ' replaced-svg');
            }
            $svg = $svg.removeAttr('xmlns:a');
            // Replace image with new SVG
            $img.replaceWith($svg);
        }, 'xml');
    });





    $(".file-upload input[type=file]").change(function () {
        var filename = $(this).val().replace(/.*\\/, "");
        $("#filename").val(filename);
    });

    $('.arrow__down').click(function (e) {
        e.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });

    new WOW().init();

    var jPM = $.jPanelMenu({});
    jPM.on();

    
// mail
});