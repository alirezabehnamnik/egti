require('./bootstrap');

$(window).ready(function() {
    $(".loader").delay(500).fadeOut();
    $("#mask").delay(1000).fadeOut("slow");
});

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
