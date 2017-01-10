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
        
        <title>View and Edit Course</title>
    </head>
    <body>
	       
        <?php $sql = "SELECT course_id,course_name,course_coordinator,degreeProgramme FROM courses"; 
$result = mysqli_query($connect, $sql);
if (!$result) {
                    echo "Error";
                    die();
				}
?>				
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">View Courses</h2>
			
			<table border="1">
            <th> Course ID</th>
                    <th>Course Name</th>
                    <th>Course Coordinator</th>
                     <th>Degree Programme</th>
                    <th></th>
                    </tr>

        <?php

             while($row=mysqli_fetch_assoc($result))
             {
                 ?>
            <tr>
                <td><?php echo $row['course_id']; ?></td>
                <td><?php echo $row['course_name']; ?></td>
                <td><?php echo $row['course_coordinator']; ?></td>
                <td><?php echo $row['degreeProgramme'] ;?></td>
				<!-- <td align="center"><a href="edit_course.php?edit_id=<?php echo $row['course_id']; ?>">EDIT</a></td>-->
				<td><a href="#" onclick="window.open('edit_course.php?edit_id=<?php echo $row['course_id']; ?>', 'newwindow', 'width=500, height=500'); return false;">EDIT</a></td>
                               
            </tr>
        <?php
             }
             ?>
             </table>
        
        </div>
    </body>
</html>