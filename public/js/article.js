// get positions elements
var startPos = $('.title-box').offset().top; 
var endPos = $('.gray-author').offset().top;

$(window).scroll(function() {                  

    var currentScroll = $(window).scrollTop(); // get current position
    var next = $('.next');
    var prev = $('.prev');
    if (currentScroll >= startPos && currentScroll<= endPos) {  
        prev.css("visibility","visible");  
        next.css("visibility","visible"); 
        prev.fadeIn();
        prev.fadeIn("slow");
        prev.fadeIn(3000);  
        next.fadeIn();
        next.fadeIn("slow");
        next.fadeIn(3000); 
    } else {      
        prev.fadeOut();
        prev.fadeOut("slow");
        prev.fadeOut(3000);  
        next.fadeOut();
        next.fadeOut("slow");
        next.fadeOut(3000);                           
    }
});