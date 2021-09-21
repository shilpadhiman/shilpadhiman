<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link href="<?php echo base_url();?>/assets/css/chat.css" rel='stylesheet' type='text/css'/>
</head>
    <style type="text/css">
    	#chat_message_area {
    -webkit-box-flex: 1;
    flex-grow: 1;
    border: none;
    outline: none !important;
    background-color: transparent;
}

    </style>


<div class="page-content page-container" id="page-content">
    <div class="padding">
	<div class="row container d-flex justify-content-center">

	    <div class="col-md-5">
		<div class="card card-bordered">
	     <div class="card-header">
			<h4 class="card-title"><strong>Friends List</strong></h4><a class="btn btn-xs btn-success" href="#" data-abc="true">Active</a>
		    </div>

		 <div class="ps-container ps-theme-default ps-active-y" id="chat-content" style="overflow-y: scroll !important; height:600px !important;">
			  <?php                              
		    foreach($chat as $chatvalue) {?>
			<div class="media media-chat"><img class="avatar" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
				<div class="media-body" onclick="mediachat('<?php echo $chatvalue['id'];?>','<?php echo $chatvalue['name'];?>' )">
				  <p><strong class="text-info"><?php echo ucfirst($chatvalue['name']);?></strong>
				    <span>DOB:<?php echo $chatvalue['year'];?></span>
				    <small class="text-warning"><?php echo ucfirst($chatvalue['country']);?></small>
				  </p>
				</div>
			    </div>
			<?php }?>
		 </div>
		    </div>   
	    </div>

	    <div class="col-md-6">
	    	<div id="chats">
               <?php foreach($reqdata as $value){?>
                <input type="hidden" name="id" value="<?php echo $value['user_id'];?>" id= "userid"> 
               <?php }?> 

            <div class="chat_window" id="chat_4321">
            </div>
            <div class="user_details"></div>
                   
			</div>
                
	    </div>



	    <div class="col-md-1">
		<div class="card-header">
			<h4 class="card-title"></h4><a class="btn btn-xs btn-info" href="<?= site_url('logout')?>">Logout</a>
		    </div>	
	    </div>


	</div>
    </div>
</div>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"  crossorigin="anonymous">


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"  crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.4.3/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>

<script type="text/javascript">
var url= '<?php echo site_url();?>';
</script>

<script> //CHAT SYSTEM
    function mediachat(id,username){
        $("#chats").append('<div class="card card-bordered"><div class="chat_window_'+id+'" data-touserid="'+id+'" id="chat_box'+id+'"><div class="card-header"><h4 class="card-title"><strong>'+username+'</strong></h4><a class="btn btn-xs btn-warning" href="#" data-abc="true">Lets chat</a></div> <div class="ps-container ps-theme-default ps-active-y" id="chat-content" style="overflow-y: scroll !important; height:400px !important;"><div class="media media-chat"><img class="avatar" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="..."><div class="send-body"></div><div class ="response_msg"></div></div><div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 0px; right: 2px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 2px;"></div></div></div><div class="publisher bt-1 border-light"><img class="avatar avatar-xs" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="..."><div id="chat_message_area" contenteditable class="form-control" ></div><span class="publisher-btn file-group"><i class="fa fa-paperclip file-browser"></i><input type="file"> </span> <a class="publisher-btn" href="#" data-abc="true"><i class="fa fa-smile"></i></a><button type="button" class="publisher-btn text-info" name="send_chat" id="send_chat"><i class="fa fa-paper-plane"></i></button><input type="hidden" name="uname" value='+id+' id="uname"></div></div></div>');      
      //$("#chat_box"+id).trigger('slow');             

    } 
    //send messages
    var user_id = '<?= session()->get('id') ?>';
    var b = $("#userid").val();
  /*  var auto_refresh = setInterval(function () {*/
           /* $.getJSON("chat/fetchdata?user_id="+user_id,function(data){
    
            $.each(data.posts, function(i,data) {
                
                if(b != data.id)  { 
                    var div_data="<span id='"+data.id+"'>"+data.user_id+": "+data.msg+"</span>";                        
                    $(div_data).appendTo("#chat_"+user_id);
                }
            });
        });
}, 2000);  */

/*setInterval(function(){ alert("Hello"); }, 3000);*/


$(document).on("click","#send_chat", function(){

 	var user_id = '<?= session()->get('id') ?>';
 	var recevied_id = $("#uname").val();	
    var chat_message= $.trim($('#chat_message_area').html());
    
    if(chat_message != ''){ 
        $.ajax({
          type: "post",
          url:  url +'/dashboard/chatmessage',
          data: {chat_message: chat_message,user_id:user_id,recevied_id:recevied_id},
          dataType: "json",
          success: function (response) {
            console.log(response);
            if(response.status)
            {
                // Message sent successfully
                var messages = response.data;
                console.log('chat_message =>', messages)
            }else
            {
                // Message not found
            }

             $('#send_chat').attr('disabled',false);
             $('#chat_message_area').html();
             console.log('messages===>',messages)
             var html= "";
             messages.sent.forEach((d) => {
                console.log('d',d);
                 html += '<div class="col-md-12 alert alert-warning">';
                 html += d.chat_message;
                 html +='</div>';
             });
             
             $('.send-body').html(html);
          }
        });
    }else{
    alert('type soomething');
    }

 function fetch_user()
 {
  $.ajax({
   url:url +'/dashboard/fetch_message',
   method:"get",
   dataType: "json",
   success:function(data){
     pid = data[0].user_id;
     chat_message= data[0].chat_message;
   $('.response_msg').append(chat_message);
   }
  });
 } 




    });
    
</script>
