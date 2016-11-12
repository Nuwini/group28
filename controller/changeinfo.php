<?php

include('../model/config.php');


$vision = $_POST['vision'];
$mission = $_POST['mission'];


$sql = "UPDATE info SET vision='$vision',mission='$mission'";

if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("Successfully Updated!");';
                    echo 'window.location="../view/pages/staff_center_back.php";';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                } 
            
?>