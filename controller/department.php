<?php
        		include('../model/config.php');
				
                $id = $_POST['id'];
                $name = $_POST['name'];
                $location = $_POST['location'];
                $head = $_POST['head'];
				$description=$_POST['description'];
                $telephone = $_POST['telephone'];
                $fax= $_POST['fax'];
                $email = $_POST['email'];
                $website= $_POST['website'];
                $image=$_POST['image'];
                
               
                $sql = "INSERT INTO department (dep_id,dep_name,location,dep_head,dep_description,telephone,fax,email,website,image) VALUES ('$id','$name','$location','$head','$description','$telephone','$fax','$email','$website','$image')";
				
                if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("A new department added successfully");';
                    echo 'window.location="../view/pages/staff_center_back.php";';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                } 
?>