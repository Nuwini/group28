<?php
        		include('../../model/config.php');
       ?>
	   <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <script src="../../js/jquery-2.0.0.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        
        <style>
            .radio-left {
                float: left;
            }
        </style>
        
        <title>Add Course</title>
    </head>
    <body>
	
	<?php
        $result=mysqli_query($connect, "SELECT count(*) as total from courses"); 
		$count = mysqli_fetch_assoc($result)['total']; 
		$count++; 
		$coid = "CO000" . strval($count);
                 
        ?> 
	
        
        
              
        
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">Add Course</h2>
        <form  method="post" action="../../controller/courses.php">
            
			<div class="form-group">
            <label for="cid" class="col-sm-6 control-label">Course ID</label>
                <div class="col-sm-5">
            <input type="text" name="" value="" hidden="true"><input class="form-control" type="text" name="coid" value="<?php echo $coid; ?>"><br>
                </div>
            </div>
            
            <div class="form-group">
                 <label for="cname" class="col-sm-6 control-label">Course name</label>
                 <div class="col-sm-5">
                     <input required class="form-control" type="text" name="cname">
                 </div>
            </div>
			
			
            
             <div class="form-group">
                 <label for="ccoordinator" class="col-sm-6 control-label">Course Coordinator</label>
                 <div class="col-sm-5">
                     <input required  class="form-control" type="double" name="ccoordinator">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="dprogramme" class="col-sm-6 control-label">Degree Programme</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="text" name="dprogramme">
                 </div>
            </div>
            
                         
            <button type="submit" class="btn btn-default" style="margin-left:-950px;margin-top:20%;">Submit</button>
              
            </form>
        </div>
    </body>
</html>