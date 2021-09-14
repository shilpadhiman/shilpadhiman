<!DOCTYPE html>
<html lang="en">
<?= $this->include('admin/header') ?>

<div class="container">
<div class="row">
<div class="col-lg-10 col-sm-10 col-12 offset-lg-1 offset-sm-1">
  <div class="panel-heading"><?= session()->get('name') ?>
</div>  
<nav class="navbar navbar-expand-lg bg-info rounded">
<a class="navbar-brand text-light" href="<?= site_url('logout')?>">Logout</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent" style="display: unset !important;">
<ul class="nav nav-pills mr-auto justify-content-end">
<li class="nav-item active">
<a class="nav-link text-light" href="#">Home<span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
<a class="nav-link text-light" href="<?php echo base_url('chat');?>">Chat</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fa fa-bell"></i>
</a>
<ul class="dropdown-menu">
<li class="head text-light bg-dark">
<div class="row">
<div class="col-lg-12 col-sm-12 col-12">
<span>Notifications(3)</span>
<a href="" class="float-right text-light">Mark all as read</a>
</div>
</li>
<li class="notification-box">
<div class="row">	
<?php 
if(!empty($notificdata)){
  $nid=[];
foreach($notificdata as $value){
foreach($chat as $chatdata){

  $nid[]=$chatdata['received_id'];
}


?>
<?php if(in_array($value['send_id'], $nid)){?>
<?php } else {?>
<div class="col-lg-3 col-sm-3 col-3 text-center">
<img src="/images/profileimage.png" class="w-50 rounded-circle">
</div>
<div class="col-lg-8 col-sm-8 col-8">
<strong class="text-info"><?php echo $value['name'];?></strong>
<div>
<span>DOB:<?php echo $value['year'];?></span>
</div>
<small class="text-warning"><?php echo $value['gender'];?></small>
<button type="button" class="btnconfirm<?php echo $value['send_id'];?> btn-info" onclick="Confirmation('<?php echo $value['send_id'];?>')" >Confirm</button>
<button type="button" class=" btn btn-warning">Reject</button>
</div>
<?php }} }?>
</div>
</li>

<li class="footer bg-dark text-center">
<a href="" class="text-light">View All</a>
</li>
</ul>
</li>






</ul>
</div>
</nav>
</div>
</div>

<div class="row">
<div class="col-lg-10 col-sm-10 col-12 offset-lg-1 offset-sm-1">	
<div class="panel-body">
<form class="form-inline" role="form" action="">
<div class="form-group">
<label class="filtercol" for="pref-perpage">Age:</label>
<select id="agedata" class="form-control" name="age">
<option></option>
<option value="18-20">18-20</option>
<option value="20-24">20-24</option>
<option value="24-30">24-30</option>
<option value="30-35">30-35</option>
<option value="35-40">35-40</option>
<option value="40-50">40-50</option>
<option value="50-60">50-60</option>
</select>                                
</div>
<div class="form-group"> 
<label class="genderdata"  for="pref-orderby">Gender:</label>
<select id="agedata" class="form-control" name="gender">
<option></option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>                                
</div>

<div class="form-group"> 
<label class="castdata" for="pref-orderby">Cast:</label>
<select id="agedata" class="form-control" name="cast">
<option></option>
<option value="anglican">Anglican</option>
<option value="baptist">Baptist</option>
<option value="catholic">Catholic</option>
<option value="christian">Christian Orthodox</option>
<option value="lutheran">Lutheran</option>
<option value="pentecostal">Pentecostal</option>
<option value="Presbyterian">Presbyterian</option>
<option value="ucoc">United Church of Canada</option>
<option value="other">Other Christian</option>

</select>                                
</div>
<input type="submit" class="btn btn-info" id="btninfo" name="search" value="search">
</form>
</br>
<div class="row">
<div class="col-md-12"> 
<?php
if(!empty($builddata)){
$ids=[];
foreach ($approved as $vue) { 
$ids[]=$vue['request_id']; 
}
/*foreach($chat as $chatdata){

  $ids[]=$chatdata['received_id'];
}*/


foreach ($builddata as $value) {
?> 

<div class="column  col-md-3">
<div class="absd">
<img src="<?php echo base_url();?>/images/profileimage.png" alt="Snow" style="width:30%">
<span>Name:  <?php echo $value['name'];?></span>
<span>Education:  <?php echo $value['education_level'];?></span>
<span>Age:  <?php echo $value['age'];?></span>
<span>Gender:  <?php echo $value['gender'];?></span>
</div>

<div class="buttoningorm">
 <?php if (in_array($value['id'], $ids)) {?>
<button type="button" class="btn-warning" disabled="disabled">Request send</button>
<?php } else {?>
<button type="button"  onclick="removeday('<?php echo $value['id']; ?>','<?php echo $value['email']; ?>')" class="btninfo<?php echo $value['id'];?> btn-info" >Invite</button>
<?php }?>

</div>


</div>
<?php }} ?>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
var url= '<?php echo base_url();?>';
</script>
<script>
   function removeday(id,email){   
  $.ajax({
    type: "post",
    url: url +'/dashboard/sendrequest',
    data: {id:id,status:'1',email:email},
    dataType: "json",
    beforeSend:function(){
        $('.btninfo').attr('disabled', 'disabled');
    },
    success: function (response) {
      $('.btnAinfo'+id).attr('disabled', false);
      $('.btninfo'+id).remove('btn-success');
      $('.btninfo'+id).addClass('btn-warning');
      $('.btninfo'+id).text('request sended');
      alert('Success');
    },
    error: function(error){
     console.log(error); 
   }  
 });      
}
</script>


<script>
 function Confirmation(id){
    $.ajax({
    type: "post",
    url: url +'/dashboard/confirmation',
    data: {id:id,confirm:'1'},
    dataType: "json",
    beforeSend:function(){
        $('.btnconfirm').attr('disabled', 'disabled');
    },
    success: function (response) {
      $('.btnconfirm'+id).attr('disabled', false);
      $('.btnconfirm'+id).remove('btn-success');
      $('.btnconfirm'+id).addClass('btn-warning');
      $('.btnconfirm'+id).text('Accept');
      $('.btnconfirm'+id).attr('disabled', true);
      alert('Success');
    },

    error: function(error){
     console.log(error); 
   }  
 }); 

 } 

</script>



