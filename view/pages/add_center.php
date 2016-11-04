<?php
        		include('../../model/config.php');
       ?>
       <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../layout/styles/bootstrap.min.css">
        <script src="../layout/scripts/jquery-2.0.0.js"></script>
        <script src="../layout/scripts/bootstrap.min.js"></script>
        
        <style>
            .radio-left {
                float: left;
            }
        </style>
        
        <title>Add Center</title>
    </head>
    <body>
        
        
        <?php
        $result=mysqli_query($connect, "SELECT count(*) as total from centers"); 
		$count = mysqli_fetch_assoc($result)['total']; 
		$count++; 
		$cid = "C000" . strval($count);
                 
        ?> 
        
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">Centers</h2>
        <form method="post" action="../../controller/centres.php">
            
            <div class="form-group">
                <label for="id" class="col-sm-6 control-label">Center ID</label>
                <div class="col-sm-5">
                    <input type="text" name="" value="" hidden="true"><input class="form-control" type="text" name="id" value="<?php echo $cid; ?>"><br>
                </div>
            </div>
            
            <div class="form-group">
                 <label for="name" class="col-sm-6 control-label">Center</label>
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
                 <label for="coordinator" class="col-sm-6 control-label">Co-ordinator</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="text" name="coordinator">
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
    
            <button type="submit" class="btn btn-default" style="margin-left:-950px;margin-top:35%;">Submit</button>
              
            </form>
        </div>
    </body>
</html>