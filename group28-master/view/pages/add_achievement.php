<?php
session_start();
$user_id = $_SESSION['login_user'];

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
        
        <title>Add Achievement</title>
    </head>
    <body>
        <?php
        
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                
                $achievement_id = $_POST['achievement_id'];
                $award_name = $_POST['award_name'];
                $category = $_POST['category'];
                $project_name = $_POST['project_name'];
				$locality = $_POST['locality'];   
				
                $sql = "INSERT INTO achievements (achievement_id,award_name,category,project_name,locality) VALUES ('$achievement_id','$award_name','$category','$project_name','$locality')";
                if (mysqli_query($connect,$sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("A new achievement added successfully!");';
                    echo 'window.location="staff_center_back.php";';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                } 

            }
        ?>
        
         <?php
        $result=mysqli_query($connect, "SELECT count(*) as total from achievements"); 
		$count = mysqli_fetch_assoc($result)['total']; 
		$count++; 
		$aid = "A0" . strval($count);
                 
        ?> 
        
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">Add Achievement</h2>
        <form method="post" action="">
            
            <div class="form-group">
                 <label for="achievement_id" class="col-sm-6 control-label">Achievement ID</label>
                 <div class="col-sm-5">
                     <input required class="form-control" type="text" name="achievement_id" value="<?php echo $aid; ?>">
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="award_name" class="col-sm-6 control-label">Award Name</label>
                 <div class="col-sm-5">
                     <input required  class="form-control" type="double" name="award_name">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="category" class="col-sm-6 control-label">Category</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="text" name="category">
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="project_name" class="col-sm-6 control-label">Project Name</label>
                 <div class="col-sm-5">
                     <textarea class="form-control" type="text" name="project_name"></textarea>
                 </div>
            </div>
			<div class="form-group">
                 <label for="locality" class="col-sm-6 control-label">Locality</label>
                 <div class="col-sm-5">
                     <textarea class="form-control" type="text" name="locality"></textarea>
                 </div>
            </div>
            
            <button type="submit" class="btn btn-default" style="margin-left:535px;">Submit</button>
              
            </form>
        </div>
    </body>
</html>