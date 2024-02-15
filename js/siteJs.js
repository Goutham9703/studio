$(document).ready(function () {
    var silder = $(".owl-carousel");
    silder.owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
        items: 1,
        stagePadding: 20,
        center: true,
        nav: false,
        margin: 2,
        dots: true,
        loop: true,
        responsive: {
        0: { items: 1 },
        480: { items: 1 },
        575: { items: 1 },
        768: { items: 2 },
        991: { items: 3 },
        1200: { items:3 }
        }
    });
        $('.close_btn').hide();
    $('.enquiery_form').hide();
    $('.chat_sec').click(function(){
        $('.enquiery_form').show();
        $('.close_btn').show();
    });
    $('.close_btn').click(function(){ 
        $('.enquiery_form').hide();
        $('.close_btn').hide();
    });
    $('.btnLinkSd').click(function(){ 
        $('.enquiery_form').show();
        $('.close_btn').show();
    }); 
});
	
		 