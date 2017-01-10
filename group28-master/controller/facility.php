<?php
        include('../model/config.php');
                         
                $id = $_POST['id'];
                $name = $_POST['name'];
                $rent = $_POST['rent'];
                $capacity = $_POST['capacity'];
                $description= $_POST['description'];
               
                $sql = "INSERT INTO facilities (facility_id,facility_name,rent,capacity,description) VALUES ('$id','$name','$rent','$capacity','$description')";
                
				if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("A new facility added successfully!");';
                    echo 'window.location="../view/pages/staff_center_back.php";';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                }

            
        ?>