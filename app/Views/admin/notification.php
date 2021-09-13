<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
	<div class="row">

	<div class="col-lg-10 col-sm-10 col-12 offset-lg-1 offset-sm-1">
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
<a class="nav-link text-light" href="#">Chat</a>
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
		foreach($notificdata as $value){
 
	?>

<div class="col-lg-3 col-sm-3 col-3 text-center">
<img src="/images/profileimage.png" class="w-50 rounded-circle">
</div>
<div class="col-lg-8 col-sm-8 col-8">
<strong class="text-info"><?php echo $value['name'];?></strong>
<div>
<span>DOB:<?php echo $value['year'];?></span>
</div>
<small class="text-warning"><?php echo $value['gender'];?></small>

<button type="button" class="btn btn-info">Confirm</button> <button type="button" class=" btn btn-warning">Reject</button>
</div>
<?php }}?>
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


<div id="btnContainer">
      <button class="btn" onclick="listView()"><i class="fa fa-bars"></i> List</button> 
      <button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
  </div>

  <div class="row">
    
    <div class="col-md-12"> 
    <?php

       if(!empty($builddata)){
       foreach ($builddata as $value) {

       ?>    
        <div class="column  col-md-3" >

          <img src="<?php echo base_url();?>/images/profileimage.png" alt="Snow" style="width:30%">


          <img src="<?php echo base_url();?>/images/profileimage.png" alt="Snow" style="width:30%">

          <img src="<?php echo base_url();?>/images/ab.png" alt="Snow" style="width:30%">


          <span>Name:  <?php echo $value['name'];?></span>
          <span>Education:  <?php echo $value['education_level'];?></span>
          <span>Age:  <?php echo $value['age'];?></span>
          <span>Gender:  <?php echo $value['gender'];?></span>

          <button type="button"  onclick="removeday('<?php echo $value['id']; ?>','<?php echo $value['email']; ?>')" class="btninfo<?php echo $value['id'];?> btn-primary" >Invite</button>

        </div>
  <?php } }?>
</div>
  
</div>






</div>
</div>
</div>





</div>
</body>
</html>


<script src="<?php echo base_url(); ?>/assets/js/ajax.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script type="text/javascript">
var url= '<?php echo base_url();?>';
 </script>

 
<!-- <script src="<?php echo base_url(); ?>/assets/js/ajax.js"></script> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
   function removeday(id){    
  $.ajax({
    type: "post",
    url: url +'/dashboard/sendrequest',
    data: {id:id},
    dataType: "json",
    beforeSend:function(){
        $('.btninfo').attr('disabled', 'disabled');
    },
    success: function (response) {
      $('.btninfo').attr('disabled', false);
      alert('Success');
    },
    error: function(error){
     console.log(error); 
   }  
 });      
}

</script>



<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column col-md-3");

// Declare a loop variable
var i;

// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "25%";
  }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>


<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
 /* width: 50%;*/
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

div#btnContainer {
    margin-top: 15px;
}
.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}

.column.col-md-3 {
    border: 1px solid;
    color: unset;
    border-color: darkgray;
    padding-left: inherit;
}
span {
    padding-left: initial;
    display: table-footer-group;
    display: table;
}
a.logo {
    color: azure;
    font-size: medium;
}
select#pref-perpage {
    padding-left: 50px;
    padding-right: 50px;
}
.container{
    margin-top:30px;
}

.filter-col{
    padding-left:10px;
    padding-right:10px;
}
button.btn.btn-primary {
   padding-left: 76px;
   }
</style>















<script src="<?php echo base_url(); ?>/assets/js/ajax.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




<style>
#btninfo {
    width: 170px;
}
#agedata {
    margin-left: 0px;
    margin-right: 10px;
    padding-left: 70px;
}
.panel-body {
    margin-top: 25px;
}

.btn.btn-info {
    width: 80px;
}
body{
margin-top: 50px;
background-color: #f1f1f1;
}
.nav-pills .nav-link.active, .nav-pills .show > .nav-link{
background-color: #17A2B8;
}
.dropdown-menu{
top: 60px;
right: 0px;
left: unset;
width: 460px;
box-shadow: 0px 5px 7px -1px #c1c1c1;
padding-bottom: 0px;
padding: 0px;
}
.dropdown-menu:before{
content: "";
position: absolute;
top: -20px;
right: 12px;
border:10px solid #343A40;
border-color: transparent transparent #343A40 transparent;
}
.head{
padding:5px 15px;
border-radius: 3px 3px 0px 0px;
}
.footer{
padding:5px 15px;
border-radius: 0px 0px 3px 3px;
}
.notification-box{
padding: 10px 0px;
}
.bg-gray{
background-color: #eee;
}
@media (max-width: 640px) {
.dropdown-menu{
top: 50px;
left: -16px;
width: 290px;
}
.nav{
display: block;
}
.nav .nav-item,.nav .nav-item a{
padding-left: 0px;
}
.message{
font-size: 13px;
}
}* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
 /* width: 50%;*/
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

div#btnContainer {
    margin-top: 15px;
}
.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}

.column.col-md-3 {
    border: 1px solid;
    color: unset;
    border-color: darkgray;
    padding-left: inherit;
}
span {
    padding-left: initial;
    display: table-footer-group;
    display: table;
}
a.logo {
    color: azure;
    font-size: medium;
}
select#pref-perpage {
    padding-left: 50px;
    padding-right: 50px;
}
.container{
    margin-top:30px;
}

.filter-col{
    padding-left:10px;
    padding-right:10px;
}
button.btn.btn-primary {
   padding-left: 76px;
   }




* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
/*.column {
  float: left;
  width: 50%;
  padding: 10px;
}*/

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

div#btnContainer {
    margin-top: 15px;
}
.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}

.column.col-md-3 {
    border: 1px solid;
    color: unset;
    border-color: darkgray;
    padding-left: inherit;
}
span {
    padding-left: initial;
    display: table-footer-group;
    display: table;
}
a.logo {
    color: azure;
    font-size: medium;
}
select#pref-perpage {
    padding-left: 50px;
    padding-right: 50px;
}
.container{
    margin-top:30px;
}

.filter-col{
    padding-left:10px;
    padding-right:10px;
}
button.btn.btn-primary {
   padding-left: 76px;
   }

	
</style>