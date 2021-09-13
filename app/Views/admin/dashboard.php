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


<div class="container" style="margin-top:20px;">
<div class="row">
<div class="panel panel-primary">
<div class="panel-heading"> <?= session()->get('name') ?><a class="logo" href="<?= site_url('logout') ?>">Logout</a></div>

<div class="panel-body">
                    <form class="form-inline" role="form" action="<?php echo site_url('dashboard/searchform');?>">
                        
                        <div class="form-group">
                            <label class="filter-col" for="pref-perpage">Age:</label>
                            <select id="pref-perpage" class="form-control" name="age">
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
                            <label class="filter-col"  for="pref-search">Location:</label>
                            <select id="pref-perpage" class="form-control" name="location">
                                <option></option>
                                <option value="chandigarh">Chandiagrh</option>
                                <option value="punjab">punjab</option>
                                <option value="mohali">Mohali</option>
                                <option value="panchkula">panchkula</option>
                                <option value="delhi">Delhi</option>
                            </select>
                        </div>
                        <div class="form-group"> 
                           <label class="filter-col"  for="pref-orderby">Gender:</label>
                            <select id="pref-orderby" class="form-control" name="gender">
                                <option></option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>                                
                        </div>
                        <div class="form-group"> 
                           <label class="filter-col" for="pref-orderby">Cast:</label>
                            <select id="pref-orderby" class="form-control" name="cast">
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
                        <input type="submit" class="btn btn-primary" name="search" value="search">
                       
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