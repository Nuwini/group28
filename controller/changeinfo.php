<?php

include('../model/config.php');


$vision = $_POST['vision'];
$mission = $_POST['mission'];
$ucsc_description = $_POST['description'];
$goals = $_POST['goals'];


$sql = "UPDATE info SET vision='$vision',mission='$mission',ucsc_description='$ucsc_description',goals='$goals'";

if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("Successfully Updated!");';
                    echo 'window.location="../view/pages/admin_only.php";';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                } 
            
?>