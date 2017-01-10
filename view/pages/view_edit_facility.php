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
        
        <title>View and Edit Facility</title>
    </head>
    <body>
	       
        <?php $sql = "SELECT facility_id,facility_name,rent,capacity,description FROM facilities"; 
$result = mysqli_query($connect, $sql);
if (!$result) {
                    echo "Error";
                    die();
				}
?>				
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">View Facilities</h2>
			
			<table border="1">
            <th> Facility ID</th>
                    <th>Facility Name</th>
                    <th>Rent</th>
                     <th>Capacity</th>
					 <th>Description</th>
					 <th></th>
                    </tr>

        <?php

             while($row=mysqli_fetch_assoc($result))
             {
                 ?>
            <tr>
                <td><?php echo $row['facility_id']; ?></td>
                <td><?php echo $row['facility_name']; ?></td>
                <td><?php echo $row['rent']; ?></td>
                <td><?php echo $row['capacity'] ;?></td>
				<td><?php echo $row['description'] ;?></td>
				
				<td><a href="#" onclick="window.open('edit_facility.php?edit_id=<?php echo $row['facility_id']; ?>', 'newwindow', 'width=600, height=600'); return false;">EDIT</a></td>
                               
            </tr>
        <?php
             }
             ?>
             </table>
        
        </div>
    </body>
</html>