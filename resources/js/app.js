require('./bootstrap');
require('./jquery.touchSwipe.min');
require('./owl.carousel.min');

// Loading
$(window).ready(function() {
    $(".loader").delay(500).fadeOut();
    $("#mask").delay(1000).fadeOut("slow");
});

// Load Cities based on selected State in register form
$('#state_id').change(function(){
   var sid = $(this).val();
   if(sid){
   $.ajax({
      type:"get",
      url:"city/"+sid,
      success:function(res)
      {
           if(res)
           {
               $("#city_id").empty();
               $.each(res,function(key,value){
                   $("#city_id").append('<option value="'+value.id+'">'+value.name+'</option>');
               });
           }
      }

   });
   }
});

// Carousel swipe with mouse move
$(".carousel").swipe({
        swipe: function (event, direction, distance, duration, fingerCount, fingerData) {
            if (direction == 'left') $(this).carousel('next');
            if (direction == 'right') $(this).carousel('prev');
        },
        allowPageScroll: "vertical"
});

// Bootstrap Tooltip
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Slick Slider JS
$('.owl-sponsers').owlCarousel({
    rtl:true,
    loop:true,
    margin:25,
    nav:true,
    autoplay:true,
    autoplayTimeout:4000,
    dots: true,
    slideBy: 4,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:6
        }
    }
})

// Slick Slider JS
$('.owl-partners').owlCarousel({
    rtl:true,
    loop:true,
    margin:25,
    nav:true,
    autoplay:true,
    autoplayTimeout:4000,
    dots: true,
    slideBy: 4,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:6
        }
    }
})
