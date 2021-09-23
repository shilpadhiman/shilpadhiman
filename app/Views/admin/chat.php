<!DOCTYPE html>
<html>
<?= $this->include('admin/header') ?>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
.media.media-send {
    float: right;
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
			<div class="media media-chat">
            <img class="avatar" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">                
				<div class="media-body" id="receivermsg" onclick="mediachat('<?php echo $chatvalue['id'];?>','<?php echo $chatvalue['name'];?>')">
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
                <input type="hidden" name="id" value="<?php echo $value['user_id'];?>" id= "userid"> 
              
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

<script type="text/javascript">
var url= '<?php echo site_url();?>';
</script>

<script> //CHAT SYSTE
  function mediachat(id,username){
      $("#chats").html('<div class="card card-bordered"><div class="chat_window_'+id+'" data-touserid="'+id+'" id="chat_box'+id+'"><div class="card-header"><h4 class="card-title"><strong>'+username+'</strong></h4><a class="btn btn-xs btn-warning" href="#" data-abc="true">Lets chat</a></div> <div class="ps-container ps-theme-default ps-active-y" id="chat-content" style="overflow-y: scroll !important; height:400px !important;"><div class="media media-chat"><img class="avatar" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="..."><div class="received_withd_msg"></div></div><div class="media media-send"><div class= "send-body"></div></div></div><div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 0px; right: 2px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 2px;"></div></div></div><div class="publisher bt-1 border-light"><img class="avatar avatar-xs" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="..."><div id="chat_message_area" contenteditable class="form-control" ></div><span class="publisher-btn file-group"><i class="fa fa-paperclip file-browser"></i><input type="file"> </span> <a class="publisher-btn" href="#" data-abc="true"><i class="fa fa-smile"></i></a><button type="button" class="publisher-btn text-info" name="send_chat" id="send_chat"><i class="fa fa-paper-plane"></i></button><input type="hidden" name="uname" value='+id+' id="uname"></div></div></div>');

          }
 

 

    //send messages

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
             if(messages.sent){
             messages.sent.forEach((d) => {
                console.log('d',d);
                 html += '<div class="col-md-12 alert alert-warning" align="right">';                 
                 html += d.chat_message;
                 html +='</div>';
             });
             $('.send-body').html(html);
             }
              var data= ""; 
             if(messages.recieve){
              messages.recieve.forEach((a) => {
                 data += '<div class="col-md-12 alert alert-info" align="left">';
                 data += a.chat_message;
                 data +='</div>';
                
             });
             $('.received_withd_msg').html(data); 
             }
             
          }
        });
    }else{
    alert('type soomething');
    }

    });




  </script>