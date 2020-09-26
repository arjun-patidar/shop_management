
<div class="container">
 

  <div class="panel panel-default">
    <div class="bg-primary">
         <div class="panel-heading text-center" style="font-size:25px;">Customer Edit</div>
    </div>
 
  <div class="panel-body">
    <form class="form-horizontal" id="insertForm" style="margin-left:20px;margin-top:10px;" action="<?php echo base_url(); ?>Home/retailerupdatedata" method="POST">
    <input type="hidden" value="<?php echo base_url(); ?>Home/retailerupdatdata" id="post_link">
    <div class="form-group">
    
    <input type="hidden" class="form-control" id="retailer_id" value="<?php echo $row[0]->retailer_id;?>" name="retailer_id">
  </div>
  <div class="form-group">
    <label for="text">Retailer Name:</label>
    <input type="text" class="form-control" id="name" value="<?php echo $row[0]->retailer_name;?>" name="retailer_name" placeholder="retailer name">
  </div>
  <div class="form-group">
    <label for="text">Product Name:</label>
    <input type="text" class="form-control" value="<?php echo $row[0]->product;?>" name="product" placeholder="product">
  </div>
  <div class="form-group">
    <label for="text">Mobile no.:</label>
    <input type="number" class="form-control" value="<?php echo $row[0]->retailer_mobile;?>" name="retailer mobile no." placeholder="retailer_mobile">
  </div>
  <div class="form-group">
    
      <div class="row">
        <div class="col-md-4">
         <label for="text">Total Payment:</label>
         <input type="number" class="form-control" value="<?php echo $row[0]->total_pay;?>" name="total payment" placeholder="total_pay">
        </div>
         <div class="col-md-4">
         <label for="text">Due:</label>
         <input type="number" class="form-control" value="<?php echo $row[0]->due_pay;?>" name="due_pay" placeholder="due payment">
        </div>
         <div class="col-md-4">
         <label for="text">Cash:</label>
         <input type="number" class="form-control" value="<?php echo $row[0]->cash;?>" name="cash" placeholder="cash">
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
  <button type="submit" class="btn btn-default btn-success">Update</button>
</form> 
  </div>
  <div class="panel-footer"></div>
</div>
</div>