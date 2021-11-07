$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data != '')
    {
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(x)
   {
    $('#display_comment').html(x);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  var comment_id_serialize = 'id='+comment_id;
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   data:comment_id_serialize,
   success:function(comment)
   {
    $('#display_comment').html(comment);
   }
  })
 });

 $(document).on('click', '.delete', function(){
    var comment_id = $(this).attr("id");
    var comment_id_serialize = 'id='+comment_id+'&trigger=1';
    $.ajax({
     url:"delete_comment.php",
     method:"POST",
     data:comment_id_serialize,
     success:function(comment)
     {
        load_comment();
     }
    })
   });

 $(document).on('submit','#reply',function(e){
  e.preventDefault();
  var form_data_reply = $("#reply").serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
    data: form_data_reply,
    success:function(x){

      load_comment();
    }
  })
  
});
 
});