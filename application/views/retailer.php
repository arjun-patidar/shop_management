
<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a href="<?php echo base_url(); ?>Home/retailer">Add</a></li>
    <li><a href="<?php echo base_url(); ?>Home/retailertable">All</a></li>
    
  </ul>

  <div class="panel panel-default">
    <div class="bg-primary">
         <div class="panel-heading text-center" style="font-size:25px;">Retailer Details</div>
    </div>
 
  <div class="panel-body">
    <form class="form-horizontal" id="insertForm" style="margin-left:20px;margin-top:10px;" action="<?php echo base_url(); ?>Home/retailer_data" method="POST">
    <input type="hidden" value="<?php echo base_url(); ?>Home/retailer_data" id="post_link">
  <div class="form-group">
    <label for="text">Retailer Name:</label>
    <input type="text" class="form-control" id="name" name="retailer_name" placeholder="retailer name">
     <span class="text-danger"><?php echo form_error('retailer_name');?></span>
  </div>
  <div class="form-group">
    <label for="text">Product Name:</label>
    <input type="text" class="form-control" name="product" placeholder="product name">
     <span class="text-danger"><?php echo form_error('product');?></span>
  </div>
  <div class="form-group">
    <label for="text">Mobile no.:</label>
    <input type="number" class="form-control" name="retailer_mobile" placeholder="retailer mobile no.">
     <span class="text-danger"><?php echo form_error('retailer_mobile');?></span>
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
 $(document).keyup(function(){
    var due=$("#total_pay").val()-$("#cash").val();
    document.getElementById('due_pay').value=due;
 });
</script>