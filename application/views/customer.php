
<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a href="<?php echo base_url(); ?>Home/customer">Add</a></li>
    <li><a href="<?php echo base_url(); ?>Home/customertable">All</a></li>
    
  </ul>

  <div class="panel panel-default">
    <div class="bg-primary">
         <div class="panel-heading text-center" style="font-size:25px;">Customer Details</div>
    </div>
 
  <div class="panel-body">
    <form class="form-horizontal" id="insertForm" style="margin-left:20px;margin-top:10px;" action="<?php echo base_url(); ?>Home/insertdata" method="POST">
    <input type="hidden" value="<?php echo base_url(); ?>Home/insertdata" id="post_link">
  <div class="form-group">
    <label for="text">Customer Name:</label>
    <input type="text" class="form-control" id="name" name="customer_name" placeholder="customer_name">
     <span class="text-danger"><?php echo form_error('customer_name');?></span>

  </div>
  <div class="form-group">
    <label for="text">Product Name:</label>
    <input type="text" class="form-control" name="product" placeholder="product">
     <span class="text-danger"><?php echo form_error('product');?></span>
  </div>
  <div class="form-group">
    <label for="text">Mobile no.:</label>
    <input type="number" class="form-control" name="customer_mobile" placeholder="customer mobile ">
     <span class="text-danger"><?php echo form_error('customer_mobile');?></span>
  </div>
  <div class="form-group">
    
      <div class="row">
        <div class="col-md-4">
         <label for="text">Total Payment:</label>
         <input type="number" class="form-control" id="total_pay" name="total_pay" placeholder="total Payment">
          <span class="text-danger"><?php echo form_error('total_pay');?></span>
        </div>
        <div class="col-md-4">
         <label for="text">Cash:</label>
         <input type="number" class="form-control" id="cash" name="cash" placeholder="cash">
          <span class="text-danger"><?php echo form_error('cash');?></span>
        </div>
         <div class="col-md-4">
         <label for="text">Due:</label>
         <input type="number" class="form-control" id="due_pay" name="due_pay" placeholder="due payment">
          <span class="text-danger"><?php echo form_error('due_pay');?></span>
        </div>
         
    </div>
  </div>
   <!-- <div class="form-group col-md-6 col-xs-6">
                    <label for="exampleInputPassword1">Photo</label><br>
                 
                        <div class="fileinput fileinput-new" data-provides="fileinput" style="border:1px solid #dcdcdc;">
                <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
                
                  <img src="<?php echo base_url(); ?>uploads/no_file.jpg" alt="...">
                </div>
                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                <div>
                  <span class="btn btn-white btn-file">
                    <span class="fileinput-new">Select image</span>
                    <span class="fileinput-exists">Change</span>
                    <input type="file" name="profileimage" accept="image/*">
                  </span>
                  <a href="#" class="btn btn-xs btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                </div>
        </div>

        </div> -->
        <br>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default btn-success">Submit</button>
</form> 
  </div>
  <div class="panel-footer"></div>
</div>
</div>

<script type="text/javascript">
  $(document).keyup(function (){
    
    var due =  $('#total_pay').val()- $('#cash').val();
    document.getElementById("due_pay").value =due; 
  });
</script>