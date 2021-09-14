<!DOCTYPE HTML>
<?= $this->include('admin/header') ?> 

<div class="container">
<div class="row">
<div class="col-lg-10 col-sm-10 col-12 offset-lg-1 offset-sm-1">
<div class="panel panel-primary">
 <h3>Personal Profile</h3>
<div class="panel-body">
 <?php if (isset($validation)) : ?>
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                            <?= $validation->listErrors() ?>
                        </div>
                    </div>
                <?php endif; ?>

<form action="<?php echo base_url('user/profile'); ?>" method="post">
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
</div>
