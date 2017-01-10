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
        
        <title>View and Edit Center</title>
    </head>
    <body>
	       
        <?php $sql = "SELECT center_id,center_name,center_coordinator,center_telephone,center_fax,center_email,website,center_location,image,center_description FROM 
		centers"; 
$result = mysqli_query($connect, $sql);
if (!$result) {
                    echo "Error";
                    die();
				}
?>				
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">View Centers</h2>
			
			<table border="1">
            <tr><th> Center ID</th>
                    <th>Center Name</th>
                    <th>Center Coordinator</th>
                     <th>Center Telephone</th>
					 <th>Center Fax</th>
					 <th>Center Email</th>
					 <th>Website</th>
					 <th>Center Location</th>
					 <th>Image</th>
                    <th></th>
                    </tr>

        <?php

             while($row=mysqli_fetch_assoc($result))
             {
                 ?>
            <tr>
                <td><?php echo $row['center_id']; ?></td>
                <td><?php echo $row['center_name']; ?></td>
                <td><?php echo $row['center_coordinator']; ?></td>
                <td><?php echo $row['center_telephone'] ;?></td>
				<td><?php echo $row['center_fax'] ;?></td>
				<td><?php echo $row['center_email'] ;?></td>
				<td><?php echo $row['website'] ;?></td>
<td><?php echo '<img width="100%" class="avatar img-circle" alt="avatar" src="../images/demo/location/' . $row['center_location'] . '"/>' ?></td>
				<td><?php echo '<img width="100%" class="avatar img-circle" alt="avatar" src="../images/demo/' . $row['image'] . '"/>' ?></td>
				<!-- <td align="center"><a href="edit_course.php?edit_id=<?php echo $row['course_id']; ?>">EDIT</a></td>-->
				<td><a href="#" onclick="window.open('edit_center.php?edit_id=<?php echo $row['center_id']; ?>', 'newwindow', 'width=600, height=600'); return false;">EDIT</a></td>
                               
            </tr>
        <?php
             }
             ?>
             </table>
        
        </div>
    </body>
</html>