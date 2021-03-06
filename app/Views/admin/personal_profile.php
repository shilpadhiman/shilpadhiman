<!DOCTYPE HTML>
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

