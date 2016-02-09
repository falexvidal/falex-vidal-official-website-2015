var $j = jQuery.noConflict();

$j(document).ready(function() {
    
    $j('nav').slideDown(800).css('display','block');
    $j('.img-logo').animate({top:"-290px", easing:"easeOutQuad"}, 800 );
    $j('.box h2').fadeIn(3000);
    $j('.box h3').fadeIn(3000);
    $j('.box .social-left').animate({top:"-25px", easing:"easeOutElastic"}, 1000);
    $j('.box .social-right').animate({top:"-25px", easing:"easeOutElastic"}, 1000);


    $j('#gallery li').mouseover(function() {
        var thisfeature = $j(this).find('.featured-desc')
        thisfeature.slideDown();

        $j(this).mouseleave(function(){
            thisfeature.slideUp();
        });
        
    });
});