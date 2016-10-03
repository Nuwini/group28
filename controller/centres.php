<?php
        		include('../model/config.php');
				
        		$id = $_POST['id'];
                $name = $_POST['name'];
                $location = $_POST['location'];
                $cocordinator= $_POST['coordinator'];
                $telephone = $_POST['telephone'];
                $fax= $_POST['fax'];
                $email = $_POST['email'];
                $website= $_POST['website'];
                $image=$_POST['image'];
               
                $sql = "INSERT INTO centers (center_id,center_name,center_location,center_coordinator,center_telephone,center_fax,center_email,website,image) VALUES ('$id','$name','$location','$cocordinator',' $telephone','$fax','$email','$website','$image')";
				
                if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("A new centre added successfully!");';
                    echo 'window.location="../view/pages/staff_center_back.php";';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                }

?>