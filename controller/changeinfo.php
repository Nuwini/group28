<?php

include('../model/config.php');


				$vision = $_POST['vision'];
                $mission = $_POST['mission'];
                $ucsc_description = $_POST['ucsc_description'];
                $telephone = $_POST['telephone'];
                $fax = $_POST['fax'];
                $email = $_POST['email'];
                $goals = $_POST['goals'];
                $mailing_address=$_POST['mailing_address'];
                $union_activities = $_POST['union_activities'];
                $director_mg =$_POST['director_mg'];
                
               
                $sql = "INSERT INTO info (vision,mission,ucsc_description,goals,mailing_address,telephone,fax,email,union_activities,director_mg) VALUES ('$vision','$mission','$ucsc_description','$goals','$mailing_address','$telephone','$fax','$email','$union_activities','$director_mg')";

if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("Successfully Updated!");';
                    echo 'window.location="../view/pages/admin_only.php";';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                } 
            
?>