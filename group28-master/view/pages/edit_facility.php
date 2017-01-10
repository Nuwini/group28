<html>
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery-2.0.0.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/functions.js"></script>
        <style>
            .radio-left {
                float: left;
            }
        </style>
        
        <title>Edit Facility</title>
    </head>
    <body>
        <?php
        
            include('../../model/config.php');
			
			if(isset($_GET['edit_id']))
				$id = $_GET['edit_id'];
{
 $sql_query = "SELECT facility_name,rent,capacity,description FROM facilities WHERE facility_id='$id'";
 
 $result_set = mysqli_query($connect, $sql_query);
 
 $row = mysqli_fetch_assoc($result_set);
 
}
			if(isset($_POST['update'])){
			
			$facility_name = $_POST['facility_name'];
                $rent = $_POST['rent'];
                $capacity = $_POST['capacity'];
				$description = $_POST['description'];

               
                $sql = "UPDATE facilities SET facility_name='$facility_name',rent='$rent',capacity='$capacity',description='$description' WHERE facility_id='$id'";
				
                if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("The facility updated successfully!");';
                    echo 'window.close()';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
			}}

        ?>
        
               
        
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">Edit Facility</h2>
        <form method="post">
                        <div class="form-group">
                 <label for="facility_name" class="col-sm-6 control-label">Facility</label>
                 <div class="col-sm-5">
                     <textarea required class="form-control" name="facility_name"><?php echo $row['facility_name']?></textarea>
                 </div>
            </div>
			
			<div class="form-group">
            <label for="rent" class="col-sm-6 control-label">Rent</label>
			<div class="col-sm-5">
            <textarea width="100" style="width: 500px; height: 350px;" required class="form-control" id="notes1" name="rent"><?php echo $row['rent']?></textarea>
			</div>
        </div>
            
             <div class="form-group">
                 <label for="capacity" class="col-sm-6 control-label">Capacity</label>
                 <div class="col-sm-5">
            <textarea width="100" style="width: 500px; height: 350px;" required class="form-control" id="notes1" name="capacity"><?php echo $row['capacity']?></textarea>
			</div>
            </div>
            
            <div class="form-group">
                 <label for="description" class="col-sm-6 control-label">Description</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="text" name="description" value="<?php echo $row['description']?>">
                 </div>
            </div>
            
            
            
            
            <button type="submit" name="update" class="btn btn-default" style="margin-left:200px;">Update</button>
              
            </form>
        </div>
    </body>
</html>