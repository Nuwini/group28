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
        
        <title>Edit Achievement</title>
    </head>
    <body>
        <?php
        
            include('../../model/config.php');
			
			if(isset($_GET['edit_id']))
				$id = $_GET['edit_id'];
{
 $sql_query = "SELECT award_name,category,project_name,locality FROM achievements WHERE achievement_id='$id'";
 
 $result_set = mysqli_query($connect, $sql_query);
 
 $row = mysqli_fetch_assoc($result_set);
 
}
			if(isset($_POST['update'])){
			
			$award_name = $_POST['award_name'];
                $category = $_POST['category'];
                $project_name = $_POST['project_name'];
				$locality = $_POST['locality'];

               
                $sql = "UPDATE achievements SET award_name='$award_name',category='$category',project_name='$project_name',locality='$locality' WHERE achievement_id='$id'";
				
                if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("The achievement updated successfully!");';
                    echo 'window.close()';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
			}}

        ?>
        
               
        
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">Edit Achievement</h2>
        <form method="post">
                        <div class="form-group">
                 <label for="award_name" class="col-sm-6 control-label">Award Name</label>
                 <div class="col-sm-5">
                     <textarea required class="form-control" name="award_name"><?php echo $row['award_name']?></textarea>
                 </div>
            </div>
			
			<div class="form-group">
            <label for="category" class="col-sm-6 control-label">Category</label>
			<div class="col-sm-5">
            <textarea width="100" style="width: 500px; height: 350px;" required class="form-control" id="notes1" name="category"><?php echo $row['category']?></textarea>
			</div>
        </div>
            
             <div class="form-group">
                 <label for="project_name" class="col-sm-6 control-label">Project Name</label>
                 <div class="col-sm-5">
            <textarea width="100" style="width: 500px; height: 350px;" required class="form-control" id="notes1" name="project_name"><?php echo $row['project_name']?></textarea>
			</div>
            </div>
            
            <div class="form-group">
                 <label for="locality" class="col-sm-6 control-label">Locality</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="text" name="locality" value="<?php echo $row['locality']?>">
                 </div>
            </div>
            
            
            
            
            <button type="submit" name="update" class="btn btn-default" style="margin-left:200px;">Update</button>
              
            </form>
        </div>
    </body>
</html>