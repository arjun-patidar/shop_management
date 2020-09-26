 <div class="container">
 <div class="panel panel-default">
        <div class=" bg-primary">
   
         <div class="panel-heading text-center" style="font-size:25px;">Log in</div></div>
   
  <div class="panel-body">
              <?php if($error=$this->session->flashdata('user_registered')):?>
      <div class="row" style="position: fixed;margin-top: -40px;" id="fadedata" style="margin-top: 10px;  font-size: 18px;">
        <div class="">
          <div class="alert alert-success">
            <?php echo $error; ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
           
       <?php if($error=$this->session->flashdata('login_failed')):?>
      <div class="row" id="fadedata" style="position: fixed;margin-top: -40px;" style="margin-top: 10px;  font-size: 18px;">
        <div class="">
          <div class="alert alert-danger">
            <?php echo $error; ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
   
    <form class="form-horizontal" id="insertForm" style="margin-left:20px;margin-top:10px;" action="<?php echo base_url(); ?>Home/login_user" method="POST">
    <input type="hidden" value="<?php echo base_url(); ?>Home/login_user" id="post_link">
  <div class="form-group">
    <label for="text">Username:</label>
    <input type="text" class="form-control" id="name" name="username" placeholder="username">
    <span class="text-danger"><?php echo form_error('username');?></span>
  </div>

  <div class="form-group">
    <label for="text">Password:</label>
    <input type="password" class="form-control" name="password" placeholder="password">
    <span class="text-danger"><?php echo form_error('password');?></span>
  </div>
  
  
  
   <button type="submit" class="btn btn-default btn-success">Login</button>
   <a href="<?php echo base_url();?>Home/registration" class="btn btn-default btn-primary"> register</a>

   </div>
     </div>
</form> 
  </div>
   <script>
  $(document).ready(function()
  {
    $("#fadedata").fadeToggle(4000);
  });
</script>  