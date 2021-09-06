<!DOCTYPE HTML>
<html>
<head>
<title> Matrimonial Signup Page Website Template | SmartEye Apps</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url();?>/assets/css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!-- Custom Theme files -->
<link href="<?php echo base_url();?>/assets/css/style.css" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>

<link href="<?php echo base_url();?>/assets/css/font-awesome.css" rel="stylesheet"> 
</head>

<style>
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

<div class="container" style="margin-top:20px;">
<div class="row">
<div class="panel panel-primary">
<div class="panel-heading"> <?= session()->get('name') ?><a class="logo" href="<?= site_url('logout') ?>">Logout</a></div>

<div class="panel-body">
                    <form class="form-inline" role="form">
                        
                        <div class="form-group">
                            <label class="filter-col" for="pref-perpage">Age:</label>
                            <select id="pref-perpage" class="form-control" class="form-control">
                            	<option></option>
                                <option>18-20</option>
                                <option>20-24</option>
                                <option>24-30</option>
                                <option>30-35</option>
                                <option>35-40</option>
                                <option>40-50</option>
                                <option>50-60</option>
                            </select>                                
                        </div> 
                        <div class="form-group">
                            <label class="filter-col"  for="pref-search">Location:</label>
                            <select id="pref-perpage" class="form-control">
                                <option></option>
                                <option>Chandiagrh</option>
                                <option>punjab</option>
                                <option>Mohali</option>
                                <option>panchkula</option>
                                <option>Delhi</option>
                            </select>
                        </div>
                        <div class="form-group"> 
                           <label class="filter-col"  for="pref-orderby">Gender:</label>
                            <select id="pref-orderby" class="form-control">
                                <option></option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>                                
                        </div>
                        <div class="form-group"> 
                           <label class="filter-col" for="pref-orderby">Cast:</label>
                            <select id="pref-orderby" class="form-control">
                                <option></option>
                                <option>Anglican</option>
                                <option>Baptist</option>
                                <option>Catholic</option>
                                <option>Christian Orthodox</option>
                                <option>Lutheran</option>
                                <option>Pentecostal</option>
                                <option>Presbyterian</option>
                                <option>United Church of Canada</option>
                                <option>Other Christian</option>

                            </select>                                
                        </div>
                        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#filter-panel"><span>Search</span></button>
                       
                    </form>

                    <div id="btnContainer">
  <button class="btn" onclick="listView()"><i class="fa fa-bars"></i> List</button> 
  <button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
</div>

<div class="row">
<div class="col-md-12"> 
  <div class="column  col-md-3" >
  <img src="<?php echo base_url();?>/images/ab.png" alt="Snow" style="width:30%">
    <span>Education: Graduate</span>
    <span>Location: Chandigarh</span>
    <span>Age: 29</span>
    <span>Cast: Anglican</span>
    <span>Gender:Male</span>
  </div>

   <div class="column col-md-3">
  <img src="<?php echo base_url();?>/images/ab.png" alt="Snow" style="width:30%">
    <span>Education: Graduate</span>
    <span>Location: Chandigarh</span>
    <span>Age: 29</span>
    <span>Cast: Anglican</span>
    <span>Gender:Male</span>
  </div>
    
  <div class="column col-md-3">
  <img src="<?php echo base_url();?>/images/ab.png" alt="Snow" style="width:30%">
    <span>Education: Graduate</span>
    <span>Location: Chandigarh</span>
    <span>Age: 29</span>
    <span>Cast: Anglican</span>
    <span>Gender:Male</span>
  </div>
    <div class="column col-md-3">
  <img src="<?php echo base_url();?>/images/ab.png" alt="Snow" style="width:30%">
    <span>Education: Graduate</span>
    <span>Location: Chandigarh</span>
    <span>Age: 29</span>
    <span>Cast: Anglican</span>
    <span>Gender:Male</span>
  </div>

</div>
</div>



</div>
</div>
</div>

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

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
    elements[i].style.width = "50%";
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
</style>