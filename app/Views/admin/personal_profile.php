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

<style>
.col-md-10 {
margin-top: 30px;
}
label {
    margin-top: 35px;
}
.logoutfor a {
    color: currentColor;
    float: right;
}
.logoutfor {
    display: contents;
}
.row {
    margin-top: 50px;
}
</style>


<div class="container">
<div class="row">
<div class="panel panel-primary">
<div class="panel-heading"><?= session()->get('name') ?>
	<div class="logoutfor"><a href="<?= site_url('logout') ?>">Logout</a></div>
</div>
 
<div class="panel-body">
 <?php if (isset($validation)) : ?>
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                            <?= $validation->listErrors() ?>
                        </div>
                    </div>
                <?php endif; ?>

<form action="<?php echo base_url('user/profile'); ?>/<?php echo $profile->id;?>" method="post">
<div class="form-group">
<div class="col-md-2">
<label for="educationfor">Education:</label>	
</div>
<div class="col-md-10">
<input type="text" name="edu" placeholder="Education" value="" class="form-control">
	
</div>	
</div>

<div class="form-group">
<div class="col-md-2">
<label for="agefor">Age</label>	
</div>
<div class="col-md-10">
<input type="text" name="age" placeholder="Age" value="" class="form-control">	
</div>	
</div>

<div class="form-group">
<div class="col-md-2">
<label for="hobbiesfor">Hobbies</label>	
</div>
<div class="col-md-10">
<input type="text" name="Hobbies" placeholder="Hobbies" value="" class="form-control">	
</div>	
</div>

<div class="form-group">
<div class="col-md-2">
<label for="hobbiesfor">High Degree</label>	
</div>
<div class="col-md-10">
<input type="text" name="jobs" placeholder="high degree" value="" class="form-control">	
</div>	
</div>

<div class="form-group">
<div class="col-md-2">
<label for="hobbiesfor">Employee In</label>	
</div>
<div class="col-md-10">
<input type="text" name="employee" placeholder="Employee in" value="" class="form-control">	
</div>	
</div>

<div class="form-group">
<div class="col-md-2">
<label for="hobbiesfor">Annual Income</label>	
</div>
<div class="col-md-10">
<input type="text" name="annual" placeholder="Annual Income" value="" class="form-control">	
</div>	
</div>

<div class="form-group">
<input type="submit" name="submit" value="Submit" class="btn btn-info">
</div>
</form>
</div>
</div>
</div>
</div>

