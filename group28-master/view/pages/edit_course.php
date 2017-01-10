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
        
        <title>Edit Course</title>
    </head>
    <body>
        <?php
        
            include('../../model/config.php');
			
			if(isset($_GET['edit_id']))
				$id = $_GET['edit_id'];
{
 $sql_query = "SELECT course_name,course_coordinator,degreeProgramme FROM courses WHERE course_id='$id'";
 
 $result_set = mysqli_query($connect, $sql_query);
 
 $row = mysqli_fetch_assoc($result_set);
 
}


			
			
			if(isset($_POST['update'])){
			
			$course_name = $_POST['course_name'];
                $course_coordinator = $_POST['course_coordinator'];
                $degreeProgramme = $_POST['degreeProgramme'];
                
               
                $sql = "UPDATE courses SET course_name='$course_name',course_coordinator='$course_coordinator',degreeProgramme='$degreeProgramme' WHERE 
				course_id='$id'";
				
                if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("The course updated successfully!");';
                    echo 'window.close()';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
			}}

        ?>
        
               
        
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">Edit Course</h2>
        <form method="post">
            <div class="form-group">
                 <label for="course_name" class="col-sm-6 control-label">Course Name</label>
                 <div class="col-sm-5">
                     <textarea required class="form-control" name="course_name" ><?php echo $row['course_name']?></textarea>
                 </div>
            </div>
             <div class="form-group">
                 <label for="course_coordinator" class="col-sm-6 control-label">Course Coordinator</label>
                 <div class="col-sm-5">
                     <textarea required class="form-control" name="course_coordinator" ><?php echo $row['course_coordinator']?></textarea>
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="degreeProgramme" class="col-sm-6 control-label">Degree Programme</label>
                 <div class="col-sm-5">
                     <textarea required class="form-control" name="degreeProgramme" ><?php echo $row['degreeProgramme']?></textarea>
                 </div>
            </div>
            <button type="submit" name="update" class="btn btn-default" style="margin-left:200px;">Update</button>
              
            </form>
        </div>
    </body>
</html>