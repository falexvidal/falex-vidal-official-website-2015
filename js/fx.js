$(document).ready(function() {
    
    $('nav').slideDown(800).css('display','block');
    $('.img-logo').animate({top:"-290px", easing:"easeOutQuad"}, 800 );
    $('.box h2').fadeIn(3000);
    $('.box h3').fadeIn(3000);
    $('.box .social-left').animate({top:"-25px", easing:"easeOutElastic"}, 1000);
    $('.box .social-right').animate({top:"-25px", easing:"easeOutElastic"}, 1000);


    $('#gallery li').mouseover(function() {
        var thisfeature = $(this).find('.featured-desc')
        thisfeature.slideDown();
        
        $(this).mouseleave(function(){
            thisfeature.slideUp();
        });
        
    });
});