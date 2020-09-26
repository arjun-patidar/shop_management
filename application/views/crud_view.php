<html>  
 <head>  
   <title><?php echo $title; ?></title>  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
      <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
   <style>  
      </style>  
 </head>  
 <body>  
  <nav class="navbar navbar-default  ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>Home">Shop Soft</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url(); ?>Home">Home  <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo base_url(); ?>Home/customer">Customer Entry</a></li>
         <li><a href="<?php echo base_url(); ?>Home/retailer">Retailer Entry</a></li>
         <li><a href="<?php echo base_url(); ?>Crud/test">Test</a></li>
        
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" id="search" placeholder="Search" >
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    
      <li><a href="<?php echo base_url(); ?>Home/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

      <div class="container box"> 
       <div class="bg-primary">
         <div class="panel-heading text-center" style="font-size:25px;"><?php echo $title; ?></div>
    </div> 
            
           <div class="table-responsive">  
                <br />  
                <table id="demo" class="table table-bordered table-striped">  
                     <thead>  
                          <tr>  
                             <th width="10%">ID</th> 
                               <th width="10%">Customer Name</th>  
                               <th width="35%">Product</th>  
                               <th width="35%">Mobile</th>  
                               <th width="35%">Total</th>  
                               <th width="35%">Due</th>  
                               <th width="35%">Cash</th>  

                               <th width="10%">Edit</th>  
                               <th width="10%">Delete</th>  
                          </tr>  
                     </thead>  
                </table>  
           </div>  
      </div>  
 </body>  
 </html>  
 <script type="text/javascript" language="javascript" >  
 $(document).ready(function(){  
      var dataTable = $('#demo').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'crud/fetch_user'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[7,8],  
                     "orderable":false,  
                },  
           ],  
      });  
 });  
 </script> 