<?php
        		include('../../model/config.php');
       ?>
       <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../view/layout/styles/bootstrap.min.css">
        <script src="../view/layout/scripts/jquery-2.0.0.js"></script>
        <script src="../view/layout/scripts/bootstrap.min.js"></script>
        
        <style>
            .radio-left {
                float: left;
            }
        </style>
        
        <title>Add facility</title>
    </head>
    <body>
        
        <?php 
		
		$result=mysqli_query($connect, "SELECT count(*) as total from facilities"); 
		$count = mysqli_fetch_assoc($result)['total']; 
		$count++; 
		$fid = "F000" . strval($count); ?>
         
        
        
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">Add facility</h2>
        <form   method="post" action="../../controller/facility.php">
            <div class="form-group">
            <label for="id" class="col-sm-6 control-label">Facility ID</label>
                <div class="col-sm-5">
            <input required class="form-control" type="text" name="id" value="<?php echo $fid; ?>">
                </div>
            </div>
            
            <div class="form-group">
                 <label for="name" class="col-sm-6 control-label">Facility</label>
                 <div class="col-sm-5">
                     <input required class="form-control" type="text" name="name">
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="rent" class="col-sm-6 control-label">Rent(per hour)</label>
                 <div class="col-sm-5">
                     <input required  class="form-control" type="double" name="rent">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="capacity" class="col-sm-6 control-label">Capacity</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="int" name="capacity">
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="description" class="col-sm-6 control-label">Description</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="text" name="description">
                 </div>
            </div>
            
            <button type="submit" class="btn btn-default" style="margin-left:-950px;margin-top:20%;">Submit</button>
              
            </form>
        </div>
    </body>
</html>