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
        
        <title>View and Edit Achievement</title>
    </head>
    <body>
	       
        <?php $sql = "SELECT achievement_id,award_name,category,project_name,locality FROM achievements"; 
$result = mysqli_query($connect, $sql);
if (!$result) {
                    echo "Error";
                    die();
				}
?>				
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">View Achievements</h2>
			
			<table border="1">
            <tr><th> Achievement ID</th>
                    <th>Award Name</th>
                    <th>Category</th>
                     <th>Project_name</th>
					 <th>Locality</th>
					 <th></th>
                    </tr>

        <?php

             while($row=mysqli_fetch_assoc($result))
             {
                 ?>
            <tr>
                <td><?php echo $row['achievement_id']; ?></td>
                <td><?php echo $row['award_name']; ?></td>
                <td><?php echo $row['category']; ?></td>
                <td><?php echo $row['project_name'] ;?></td>
				<td><?php echo $row['locality'] ;?></td>
				<td><a href="#" onclick="window.open('edit_achievement.php?edit_id=<?php echo $row['achievement_id']; ?>', 'newwindow', 'width=600, height=600'); return false;">EDIT</a></td>
                               
            </tr>
        <?php
             }
             ?>
             </table>
        
        </div>
    </body>
</html>