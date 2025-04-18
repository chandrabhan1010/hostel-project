$(document).ready(function(){
 // Hero-slider
  $('#hero-slider').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    items:1,
    dots:false,
    smartSpeed:1000,
    navText:['PREV','NEXT'],
    autoplay:true,
    autoplayTimeout:3000,
    responsive:{
        0:{
           nav: false,
        },
        768:{
            nav:true,
        }

    }
   })
});