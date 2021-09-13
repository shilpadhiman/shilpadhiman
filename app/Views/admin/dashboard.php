<!DOCTYPE HTML>
<html>
<?= $this->include('admin/header') ?>
<div class="container" style="margin-top:20px;">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading"> <?= session()->get('name') ?><a class="logo" href="<?= site_url('logout') ?>">Logout</a></div>

            <div class="panel-body">
                <form class="form-inline" role="form" action="">
                    <div class="form-group">
                        <label class="filter-col" for="pref-perpage">Age:</label>
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
                   <select id="genderdata" class="form-control" name="gender">
                    <option></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>                                
            </div>
            <div class="form-group"> 
               <label class="castdata" for="pref-orderby">Cast:</label>
               <select id="castdata" class="form-control" name="cast">
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
       <?php
       if(!empty($builddata)){
       foreach ($builddata as $value) {?>  
        <div class="column  col-md-3" >
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

<script src="<?php echo base_url(); ?>/assets/js/ajax.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
