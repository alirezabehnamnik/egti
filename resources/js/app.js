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
      url:"/city/"+sid,
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
$('.carousel').carousel({
  pause: false,
})

// Bootstrap Tooltip
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


// Sponsers Slider
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
});

// Partners Slider
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
});

// Certifications Slider
$('.owl-certs').owlCarousel({
    rtl:true,
    loop:true,
    autoplay:true,
    autoplayTimeout:4000,
    dots: false,
    autoplayHoverPause:true,
    center: true,
    items:1,
});

$(document).ready(function() {

// Add class to li when collapse in admin panel
$(".collapse-li").on('click', function (event) {
  $target = $(event.target);
  $target.toggleClass("collapse-active");
  $target.children(".clps-icon").toggleClass("down");
});

// Players id in Team creation form Select2
    $('#players_id').select2({
      theme: 'bootstrap4',
      language: "fa",
      multiple: true,
    });
    $('#standin_id').select2({
      theme: 'bootstrap4',
      placeholder: 'انتخاب کنید',
      language: "fa",
    });
    $('#game_id').select2({
      theme: 'bootstrap4',
      language: "fa",
      multiple: true,
    });
    $('#team_id').select2({
      theme: 'bootstrap4',
      placeholder: 'انتخاب کنید',
      language: "fa",
    });


});
