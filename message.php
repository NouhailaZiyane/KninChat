<html>  
    <head>  
        <title>KninChat: Envoyez un message</title>  
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Source+Sans+Pro&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style type="text/css">
    	#user_details
      {
        padding: 30px;
        background: white;
            width: 500px;
            border-radius: 15px;
      }

      body{
    background-image: linear-gradient(to right,#e63946,blue);
    color: black;
    display: flex;
}
h1
{
  font-size: 3em;
  font-family: verdana;
}
p{
  font-size: 3em;
}.container
{
   margin-top: 30px;
}
a
{
  font-size: 0.3em; 
}
h2
{
  margin-top: 70px;
  margin-left: 20px;
  color: #e63946;
}
.n
{
  background-color: black;
  color:white;
            border: 1px solid black ;
            border-radius: 10px;
            padding-left,right: 100px;
            padding:25px;
            box-shadow: 0 0 15px black;
}
.options-menu
{
  width: 99.8%;
  height: 760px;
}

.options-center
{
  width: 75%;
  margin: 0 auto;
}
.logo
{
  padding: 4% 0  4% 37%;
}
.option i
{
    margin-top: 20px;
}
.option
{
  margin-top: 45px;
  margin-right: 16px;
}
.option div a{
    text-decoration: none;
    font-size: 20px;
    font-weight:600;
    padding: 12px 15px;
    border-radius: 30px;
    color: white;
}

.option div a:hover{
  background: #e1f5ff;
  color: blue;
}

.option button{
  padding: 15px 80px;
  border-radius: 30px;
  outline: none;
  background: #1d00ce;
  color: white;
  border: none;
  font-weight: 600;
  font-size: 16px;
  cursor: pointer;
  margin-top: 10px;
}
.option button:hover{
  box-shadow: 0 2px 20px #1d00ce;
  background: #1d00ce;
  transition: 0.1s;
  transform: scale(1.1) ;
}
.flex
{
  display: flex;
}
    </style>
    </head>  
    <body>  
        <div class="container">
          <div class="n">
   <br /><div class="option-menu">
    <img src="logo1.png" margin="100px" width="100px" height="90px">
  <br />
   <br />
   <div class="rr">
   <div class="table-responsive">
    <div>
    <p align="center"><?php  session_start(); $photo1=$_SESSION['photo'];
              $ph1="<img src=\"photo/$photo1\" alt=\"image\" height=80 width=80 />";
                             echo $ph1;  ?> Bienvenue - <?php   echo $_SESSION['nom'];  ?> - <a href="sessiondes.php">Logout</a></p></div>
        </div></div>
        <div class="flex">
      <div class="option">
          <div><a href="twitter.php" title="Accueil"><i class="fa fa-home">Accueil</i></a></div>
          <div><a href="sug.php" title="Explorer"><i class="fa fa-hashtag">Explorer</i></a></div>
          <div><a href="index.php" title="Profil"><i class="fa fa-user-o">Profil</i></a></div>
          <div><a href="sessiondes.php" title="Plus"><i class="fa fa-ellipsis-h">Déconnexion</i></a></div>
          <a href="twitter.php"><button>Tweeter</button></a>
        </div>
        <div class="col-lg-6 col-12">
        <h2 align="left">Abonnés</h2>
    <div id="user_details"></div>
    <div id="user_model_details"></div></div>
  </div>
</div>
   
   
    

    </body>  
</html>  

<script>  
$(document).ready(function(){

 fetch_user();

 setInterval(function(){
  update_last_activity();
  fetch_user();
  update_chat_history_data();
 }, 5000);

 function fetch_user()
 {
  $.ajax({
   url:"fetch_user.php",
   method:"POST",
   success:function(data){
    $('#user_details').html(data);
   }
  })
 }

 function update_last_activity()
 {
  $.ajax({
   url:"update_last_activity.php",
   success:function()
   {

   }
  })
 }

 function make_chat_dialog_box(to_user_id, to_user_name)
 {
  var modal_content = '<div id="user_dialog_'+to_user_id+'" class="user_dialog" title="You have chat with '+to_user_name+'">';
  modal_content += '<div style="height:400px; font-size: 0.45em; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;" class="chat_history" data-touserid="'+to_user_id+'" id="chat_history_'+to_user_id+'">';
  modal_content += fetch_user_chat_history(to_user_id);
  modal_content += '</div>';
  modal_content += '<div class="form-group">';
  modal_content += '<textarea name="chat_message_'+to_user_id+'" id="chat_message_'+to_user_id+'" class="form-control"></textarea>';
  modal_content += '</div><div class="form-group" align="right">';
  modal_content+= '<button type="button" name="send_chat" id="'+to_user_id+'" class="btn btn-info send_chat">Send</button></div></div>';
  $('#user_model_details').html(modal_content);
 }

 $(document).on('click', '.start_chat', function(){
  var to_user_id = $(this).data('touserid');
  var to_user_name = $(this).data('tousername');
  make_chat_dialog_box(to_user_id, to_user_name);
  $("#user_dialog_"+to_user_id).dialog({
   autoOpen:false,
   width:400
  });
  $('#user_dialog_'+to_user_id).dialog('open');
 });

 $(document).on('click', '.send_chat', function(){
  var to_user_id = $(this).attr('id');
  var chat_message = $('#chat_message_'+to_user_id).val();
  $.ajax({
   url:"insert_chat.php",
   method:"POST",
   data:{to_user_id:to_user_id, chat_message:chat_message},
   success:function(data)
   {
    $('#chat_message_'+to_user_id).val('');
    $('#chat_history_'+to_user_id).html(data);
   }
  })
 });

 function fetch_user_chat_history(to_user_id)
 {
  $.ajax({
   url:"fetch_user_chat_history.php",
   method:"POST",
   data:{to_user_id:to_user_id},
   success:function(data){
    $('#chat_history_'+to_user_id).html(data);
   }
  })
 }

 function update_chat_history_data()
 {
  $('.chat_history').each(function(){
   var to_user_id = $(this).data('touserid');
   fetch_user_chat_history(to_user_id);
  });
 }

 $(document).on('click', '.ui-button-icon', function(){
  $('.user_dialog').dialog('destroy').remove();
 });
 
});  
</script>
<script>  
$(document).ready(function(){

 fetch_user();

 setInterval(function(){
  update_last_activity();
  fetch_user();
  update_chat_history_data();
 }, 5000);

 function fetch_user()
 {
  $.ajax({
   url:"fetch_user.php",
   method:"POST",
   success:function(data){
    $('#user_details').html(data);
   }
  })
 }

 function update_last_activity()
 {
  $.ajax({
   url:"update_last_activity.php",
   success:function()
   {

   }
  })
 }

 function update_chat_history_data()
 {
  $('.chat_history').each(function(){
   var to_user_id = $(this).data('touserid');
   fetch_user_chat_history(to_user_id);
  });
 }

 $(document).on('click', '.ui-button-icon', function(){
  $('.user_dialog').dialog('destroy').remove();
 });
 
});  

</script>
