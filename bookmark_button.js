$(document).ready(function(){
 
    $('#slider').bootstrapToggle({
     on: 'ON',
     off: 'OFF',
     onstyle: 'success',
     offstyle: 'danger'
    });
   
    $('#slider').change(function(){
     if($(this).prop('checked'))
     {
      $('#status').val('ON');
     }
     else
     {
      $('#status').val('OFF');
     }
   
     setTimeout(function(){
   
       $('#submit_bk').trigger('click');
   
       }, 650);
   
    });
   
    $(document).on('submit','#bookmark',function(e){
       e.preventDefault();
       var form_data_reply = $("#bookmark").serialize();
       $.ajax({
       url:"bookmark.php",
       method:"POST",
         data: form_data_reply,
         success:function(x){
   
           console.log("hhh")
         }
       })
       
     });
   
   });