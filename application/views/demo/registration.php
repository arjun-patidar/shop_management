 <div class="container">
 <div class="panel panel-default">
    <div class="bg-primary">
         <div class="panel-heading text-center" style="font-size:25px;"> Registration</div>
    </div>
 
  <div class="panel-body">
    <form class="form-horizontal" id="insertForm" style="margin-left:20px;margin-top:10px;" action="<?php echo base_url(); ?>Home/register_user" method="POST">
    <input type="hidden" value="<?php echo base_url(); ?>Home/register_user" id="post_link">
  <div class="form-group">
    <label for="text">Username Name:</label>
    <input type="text" class="form-control" id="name" name="username" placeholder="username">
    <span class="text-danger"><?php echo form_error('username');?></span>

  </div>
  <div class="form-group">
    <label for="text">Email:</label>
    <input type="text" class="form-control" name="email" placeholder="email address">
    <span class="text-danger"><?php echo form_error('email');?></span>
  </div>
  <div class="form-group">
    <label for="text">Password:</label>
    <input type="password" class="form-control" name="password" placeholder="password">
    <span class="text-danger"><?php echo form_error('password');?></span>
  </div>
  
  
  
   <a href="<?php base_url();?>Home/registration"> <button type="submit" class="btn btn-default btn-success">Register</button></a>
   <a href="login" class="btn btn-default btn-primary"> Login</a>

   </div>
     </div>
</form> 
  </div>