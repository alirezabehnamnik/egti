require('./bootstrap');

$(window).ready(function() {
    $(".loader").delay(500).fadeOut();
    $("#mask").delay(1000).fadeOut("slow");
});

$('#state').change(function(){
   var sid = $(this).val();
   if(sid){
   $.ajax({
      type:"get",
      url:"city/"+sid,
      success:function(res)
      {
           if(res)
           {
               $("#city").empty();
               $.each(res,function(key,value){
                   $("#city").append('<option value="'+key+'">'+value.name+'</option>');
               });
           }
      }

   });
   }
});
