<!DOCTYPE HTML>
<html>
<?= $this->include('admin/header') ?>

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

<form action="<?php echo base_url('user/InPartner'); ?>" method="post">
<div class="form-group">
<div class="col-md-2">
<label for="educationfor">Interest:</label>	
</div>
<div class="col-md-10">
<input type="text" name="interest" placeholder="Interest" value="" class="form-control">
	
</div>	
</div>

<div class="form-group">
<div class="col-md-2">
<label for="agefor">Education level</label>	
</div>
<div class="col-md-10">
<input type="text" name="education_level" placeholder="Education level" value="" class="form-control">	
</div>	
</div>

<div class="form-group">
<div class="col-md-2">
<label for="hobbiesfor">Income</label>	
</div>
<div class="col-md-10">
<input type="text" name="income" placeholder="Income" value="" class="form-control">	
</div>	
</div>

<div class="form-group">
<div class="col-md-2">
<label for="hobbiesfor">Height</label>	
</div>
<div class="col-md-10">
<input type="text" name="height" placeholder="Height" value="" class="form-control">	
</div>	
</div>

<div class="form-group">
<div class="col-md-2">
<label for="hobbiesfor">Age</label>	
</div>
<div class="col-md-10">
<input type="text" name="age" placeholder="Age" value="" class="form-control">	
</div>	
</div>

<div class="form-group">
<div class="col-md-2">
<label for="hobbiesfor">Cast</label>	
</div>
<div class="col-md-10">
<input type="text" name="cast" placeholder="Cast" value="" class="form-control">	
</div>	
</div>
<div class="form-group">
<div class="col-md-2">
<label for="hobbiesfor">Nationality</label>    
</div>
<div class="col-md-10">
<input type="text" name="nationality" placeholder="Nationality" value="" class="form-control">    
</div>  
</div>

<div class="form-group">
<div class="col-md-2">
<label for=""></label>    
</div>
<div class="row">
<label for="vegetarianfor">Vegetarian:
<div class="col-md-3">
<input type="radio" name="vegetarian"  value="vegetarian" >
</div>
</label>
<label for="vegetarianfor">Non Vegetarian:
<div class="col-md-3">
<input type="radio" name="vegetarian"  value="non vegetarian">
</div>
</label>
</div>
</div>

<div class="form-group">
<div class="col-md-2">
<label for=""></label>    
</div>
<div class="row">
<label for="drinkerfor">Non Smoking:
<div class="col-md-3">
<input type="radio" name="smoking"  value="NonSmoking">
</div>
</label>
<label for="drinkerfor">Drinking:
<div class="col-md-3">
<input type="radio" name="smoking"  value="Drinking" >
</div>
</label>
<label for="dinkfor">None:
<div class="col-md-3">
<input type="radio" name="smoking"  value="None" >
</div>
</label>
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

