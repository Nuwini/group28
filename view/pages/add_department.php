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
        
        <title>Add Department</title>
    </head>
    <body>
        
        <?php
        $result=mysqli_query($connect, "SELECT count(*) as total from department"); 
		$count = mysqli_fetch_assoc($result)['total']; 
		$count++; 
		$did = "D000" . strval($count);
                 
        ?> 
         
        
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">Department</h2>
        <form  method="post" action="../../controller/department.php">
            <div class="form-group">
            <label for="id" class="col-sm-6 control-label">Department ID</label>
                <div class="col-sm-5">
            <input required class="form-control" type="text" name="id" value="<?php echo $did; ?>"><br>
                </div>
            </div>
            
            <div class="form-group">
                 <label for="name" class="col-sm-6 control-label">Department</label>
                 <div class="col-sm-5">
                     <input required class="form-control" type="text" name="name">
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="location" class="col-sm-6 control-label">Location</label>
                 <div class="col-sm-5">
                     <input required  class="form-control" type="text" name="location">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="telephone" class="col-sm-6 control-label">Contact number</label>
                 <div class="col-sm-5">
                     <input required class="form-control" type="text" name="telephone">
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="fax" class="col-sm-6 control-label">Fax</label>
                 <div class="col-sm-5">
                     <input required  class="form-control" type="text" name="fax">
                 </div>
            </div>
            
            
            <div class="form-group">
                 <label for="head" class="col-sm-6 control-label">Head of the department</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="text" name="head">
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="email" class="col-sm-6 control-label">Email</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="email" name="email">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="website" class="col-sm-6 control-label">Web site</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="wrbsite" name="website">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="image" class="col-sm-6 control-label">Image</label>
                 <div class="col-sm-5">
                     <input  type="file" name="image">
                 </div>
            </div>
            <div class="form-group">
				<div class="col-sm-5">
            <button type="submit" class="btn btn-default" style="margin-left:535px;">Submit</button>
			</div>
              
            </form>
        </div>
    </body>
</html>